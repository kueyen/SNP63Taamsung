<template>
  <div>
    <img :src="food.image_url" class="w-100 img-fit" height="200" />

    <div class="pb-4">
      <div class="bg-white p-4 mb-3">
        <div class="container">
          <h3 class="text-o">{{ food.name }}</h3>
          <div class="row bt-dashed text-dark">
            <div class="container">
              <br />
              <div class="col-12">
                <span class="text-secondary" style="font-size: 12px">
                  {{ food.description }}
                </span>
                <hr />
                <h6>พิเศษ</h6>
                <hr />
                <h5>{{ food.real_price }} บาท</h5>
                <del v-if="food.discount">{{ food.price }}</del>
                <hr />

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text"
                      id="basic-addon1"
                      @click="amount--"
                      v-if="amount > 1"
                      >-</span
                    >
                    <span class="input-group-text" id="basic-addon1" v-else>-</span>
                  </div>
                  <input type="tel" class="form-control" v-model="amount" />
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon1" @click="amount++">+</span>
                  </div>
                </div>

                <button class="btn btn-primary py-2 w-100 mt-2">เพิ่มรายการอาหาร</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import { sumBy, findKey } from 'lodash'
import axios from 'axios'

export default {
  methods: {
    ...mapActions({
      fetch: 'food/show',
    }),
    addToCart(food) {
      let findAddList = findKey(this.carts, (el) => el.id == food.id)
      console.log(findAddList)
      if (findAddList != undefined) {
        food.amount = this.carts[findAddList].amount + 1
        this.carts.splice(findAddList, 1)
      } else {
        food.amount = 1
      }
      this.carts.push(food)
    },
    sum() {
      return sumBy(this.carts, (el) => el.real_price * el.amount)
    },
    sumAmount() {
      return sumBy(this.carts, (el) => el.amount)
    },
    showModal() {
      this.$refs['my-modal'].show()
    },
    async addToBill() {
      const { data } = await axios.post('/api/addbill', {
        line_user_id: this.user.id,
        carts: this.carts,
      })
      console.log(data)
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
    showId: null,
    carts: [],
    amount: 1,
  }),
  computed: {
    ...mapGetters({
      food: 'food/show',
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

