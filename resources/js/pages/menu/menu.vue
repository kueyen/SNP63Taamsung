<template>
  <div class="">
    <div v-if="!showId">
      <div v-if="menu">
        <div class="bg-white py-3 add_to_basket" v-if="carts.length">
          <div class="container">
            <button class="btn btn-primary w-100" @click="showModal">
              <div class="clearfix">
                <div class="float-left">
                  รายการอาหาร {{ carts.length }} อย่าง {{ sumAmount }} จาน
                </div>
                <div class="float-right">{{ sum }} บาท</div>
              </div>
            </button>
          </div>
        </div>
        <img :src="menu.profile_url" class="w-100 img-fit" height="200" />

        <div class="pb-4">
          <div class="bg-white p-4 mb-3">
            <div class="container">
              <h3 class="text-o">{{ menu.name }}</h3>
              <span class="text-secondary">{{ menu.description }}</span>
            </div>
          </div>

          <div class="bg-white py-3">
            <div class="container">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-search"></i></div>
                </div>
                <input
                  type="text"
                  class="form-control"
                  id="inlineFormInputGroup"
                  placeholder="ค้นหา"
                />
              </div>
              <hr />
              <label for="">จัดเรียงโดย</label>

              <div class="input-group mb-2">
                <select v-model="sortBy" class="form-control">
                  <option :value="sort.name" v-for="sort in sorts" :key="sort.name">
                    {{ sort.label }}
                  </option>
                </select>
              </div>
            </div>
          </div>

          <div class="bg-white py-3 mt-3">
            <div class="container">
              <div class="clearfix">
                <div class="float-left">ยอดนิยม</div>
              </div>
              <div>
                <carousel :perPage="1" class="mt-4">
                  <slide v-for="food in menu.food_recomments" :key="food.id">
                    <img :src="food.image_url" class="w-100 img-fit br20" height="200" />
                  </slide>
                </carousel>
              </div>
            </div>
          </div>

          <div class="bg-white py-3 mt-3 mb-3" v-for="cat in menu.categories" :key="cat.id">
            <div class="container">
              <div class="clearfix mb-3">
                <div class="float-left">{{ cat.name }}</div>
              </div>
              <!-- // row1 -->

              <div class="row bt-dashed text-dark" v-for="food in cat.foods" :key="food.id">
                <div class="col-5">
                  <img :src="food.image_url" class="w-100 img-fit br20" height="100%" />
                </div>
                <div class="col-7">
                  <h4>{{ food.name }}</h4>
                  <span class="text-secondary" style="font-size: 12px">
                    {{ food.description }}
                  </span>
                  <hr />
                  <h5>{{ food.real_price }}</h5>
                  <del v-if="food.discount">{{ food.price }}</del>
                  <br />
                  <button class="btn btn-primary py-2 w-100 mt-2" @click="addToCart(food)">
                    เพิ่มรายการอาหาร
                  </button>
                </div>
              </div>
              <br />
            </div>
          </div>
        </div>

        <b-modal ref="my-modal" hide-footer title="รายการอาหาร" scrollable style="z-index: 9999999">
          <div class="row bt-dashed text-dark" v-for="(food, index) in carts" :key="index">
            <div class="col-5">
              <img :src="food.image_url" class="w-100 img-fit br20" height="100%" />
            </div>
            <div class="col-7">
              <h4>{{ food.name }}</h4>
              <span class="text-secondary" style="font-size: 12px">
                {{ food.description }}
              </span>
              <hr />
              <h5>{{ food.real_price }}</h5>
              <del v-if="food.discount">{{ food.price }}</del>
              <h6>X {{ food.amount }}</h6>
            </div>
          </div>

          <div class="clearfix">
            <div class="float-left">รายการอาหาร {{ carts.length }} อย่าง {{ sumAmount }} จาน</div>
            <div class="float-right">{{ sum }} บาท</div>
          </div>

          <button class="btn btn-primary py-2 w-100 mt-2" @click="confirmOrder()">
            ยืนยันการสั่งอาหาร
          </button>
        </b-modal>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
export default {
  methods: {
    ...mapActions({
      fetch: 'restaurant/show',
      addToCart: 'cart/addToCart',
      addToBill: 'cart/addToBill',
    }),
    showModal() {
      this.$refs['my-modal'].show()
    },
    confirmOrder() {
      let _this = this
      this.$swal
        .fire({
          title: 'ต้องการยืนยัน?',
          text: 'ต้องการยืนยันรายการอาหารใช่หรือไม่',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก',
        })
        .then(async (result) => {
          if (result.isConfirmed) {
            await _this.addToBill()
            _this.$swal
              .fire({
                type: 'success',
                title: 'สำเร็จ',
              })
              .then((res) => {
                if (res.isConfirmed) {
                  _this.closeWindow()
                }
              })
          }
        })
    },
  },
  data: () => ({
    sortBy: 'score',
    showId: null,
    sorts: [
      {
        name: 'score',
        label: 'คะแนน',
      },
      {
        name: 'name',
        label: 'ชื่อ',
      },
      {
        name: 'price',
        label: 'ราคา',
      },
    ],
  }),
  computed: {
    ...mapGetters({
      menu: 'restaurant/show',
      sum: 'cart/sum',
      sumAmount: 'cart/sumAmount',
      carts: 'cart/carts',
    }),
    id() {
      let lp = this.$liffParams.get('id')
      let t = lp ? lp : this.$route.query.id
      return t
    },
  },
  async created() {
    // await this.initializeLiff('1654579616-vejGe5jz')
    this.fetch(this.id)
  },
}
</script>

<style scoped>
.add_to_basket {
  position: fixed;
  width: 100%;
  bottom: 0;
  z-index: 2;
}
</style>
