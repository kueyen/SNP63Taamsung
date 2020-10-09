<template>
  <div>
    <div class="bg-white py-3 add_to_basket">
      <div class="container">
        <button class="btn btn-primary w-100">
          <div class="clearfix">
            <div class="float-left">ราการอาหาร 1 อย่าง</div>
            <div class="float-right">1,290 บาท</div>
          </div>
        </button>
      </div>
    </div>
    <img
      src="https://www.remotelands.com/travelogues/app/uploads/2018/08/shutterstock_761494024.jpg"
      class="w-100 img-fit"
      height="200"
    />

    <div class="pb-4">
      <div class="bg-white p-4 mb-3">
        <div class="container">
          <h3 class="text-o">ร้านตะหลิวทอง</h3>
          <span class="text-secondary">หลังมหาลัยศิลปากร วิทยาเขตสารสนเทศเพชรบุรี</span>
        </div>
      </div>

      <div class="bg-white py-3">
        <div class="container">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-search"></i></div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="ค้นหา" />
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
            <div class="float-right text-secondary">ดูเพิ่มเติม</div>
          </div>
          <div>
            <carousel :perPage="1" class="mt-4">
              <slide>
                <img
                  src="https://images.unsplash.com/photo-1551326844-4df70f78d0e9?ixlib=rb-1.2.1"
                  class="w-100 img-fit br20"
                  height="200"
                />
              </slide>
              <slide>
                <img
                  src="https://sites.google.com/site/xaharthaiphakhklang/tmya-kung/3354.jpg?attredirects=0"
                  class="w-100 img-fit br20"
                  height="200"
                />
              </slide>
            </carousel>
          </div>
        </div>
      </div>

      <div class="bg-white py-3 mt-3 mb-3">
        <div class="container">
          <div class="clearfix mb-3">
            <div class="float-left">อาหารจานเดียว</div>
          </div>
          <!-- // row1 -->

          <router-link :to="{ name: 'menu.show', params: { id: '1' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://images.unsplash.com/photo-1551326844-4df70f78d0e9?ixlib=rb-1.2.1"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ข้าวผัดกุ้ง</h4>
                <span class="text-secondary" style="font-size: 12px">
                  แดนเซอร์สเก็ตช์ โปรโมชั่นฟลุทออกแบบ แรลลีสเตริโอ ซ้ออินดอร์เห่ยช็อคก๋ากั่น
                  ไทยแลนด์ไฮเปอร์แกสโซฮอล์
                </span>
                <hr />
                <h5>40.00 บาท</h5>
                <del>59.00</del>
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">เพิ่มรายการอาหาร</button>
              </div>
            </div>
          </router-link>

          <!-- // row2 -->
          <router-link :to="{ name: 'menu.show', params: { id: '2' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://img.wongnai.com/p/1920x0/2018/09/13/04717b1b9f2846b983c056918f724efd.jpg"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ข้าวกระเพราไก่</h4>
                <span class="text-secondary" style="font-size: 12px">
                  แดนเซอร์สเก็ตช์ โปรโมชั่นฟลุทออกแบบ แรลลีสเตริโอ ซ้ออินดอร์เห่ยช็อคก๋ากั่น
                  ไทยแลนด์ไฮเปอร์แกสโซฮอล์
                </span>
                <hr />
                <h5>45.00 THB</h5>
                <!-- <del>60.00</del> -->
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">Add to Cart</button>
              </div>
            </div>
          </router-link>

          <!-- // row3 -->
          <router-link :to="{ name: 'menu.show', params: { id: '3' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://i.ytimg.com/vi/LRXlzBAmLw4/maxresdefault.jpg"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ข้าวเขียวหวานไก่</h4>
                <span class="text-secondary" style="font-size: 12px">
                  แดนเซอร์สเก็ตช์ โปรโมชั่นฟลุทออกแบบ แรลลีสเตริโอ ซ้ออินดอร์เห่ยช็อคก๋ากั่น
                  ไทยแลนด์ไฮเปอร์แกสโซฮอล์
                </span>
                <hr />
                <h5>60.00 THB</h5>
                <!-- <del>59.00</del> -->
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">Add to Cart</button>
              </div>
            </div>
          </router-link>

          <!-- // row4 -->
          <router-link :to="{ name: 'menu.show', params: { id: '4' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/2/22/Phanaeng_nuea_rat_khao.jpg"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ข้าวพะแนงไก่</h4>
                <span class="text-secondary" style="font-size: 12px">
                  แดนเซอร์สเก็ตช์ โปรโมชั่นฟลุทออกแบบ แรลลีสเตริโอ ซ้ออินดอร์เห่ยช็อคก๋ากั่น
                  ไทยแลนด์ไฮเปอร์แกสโซฮอล์
                </span>
                <hr />

                <h5>40.00 THB</h5>
                <del>59.00</del>
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">Add to Cart</button>
              </div>
            </div>
          </router-link>
        </div>
      </div>
      <div class="bg-white py-3 mt-3 mb-5">
        <div class="container">
          <div class="clearfix mb-3">
            <div class="float-left">ประเภทต้มยำ</div>
          </div>
          <!-- // row1 -->

          <router-link :to="{ name: 'menu.show', params: { id: '1' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://sites.google.com/site/xaharthaiphakhklang/tmya-kung/3354.jpg?attredirects=0"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ต้มยำกุ้ง</h4>
                <span class="text-secondary" style="font-size: 12px">
                  อุปสงค์ โลโก้คอลัมน์ วีไอพีอีสต์ เวิลด์จตุคามเทอร์โบ
                  คอนเฟิร์มคอนเซ็ปต์พะเรอทิปออร์แกนิค
                </span>
                <hr />
                <h5>120.00 บาท</h5>
                <del>160.00</del>
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">เพิ่มรายการอาหาร</button>
              </div>
            </div>
          </router-link>

          <!-- // row2 -->
          <router-link :to="{ name: 'menu.show', params: { id: '2' } }">
            <div class="row bt-dashed text-dark">
              <div class="col-5">
                <img
                  src="https://www.phongxodiax.com/wp-content/uploads/2019/07/%E0%B8%95%E0%B9%89%E0%B8%A1%E0%B8%A2%E0%B8%B3%E0%B9%84%E0%B8%81%E0%B9%88-%E0%B9%83%E0%B8%AA%E0%B9%88%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94.png"
                  class="w-100 img-fit br20"
                  height="100%"
                />
              </div>
              <div class="col-7">
                <h4>ต้มยำไก่</h4>
                <span class="text-secondary" style="font-size: 12px">
                  ปสงค์ โลโก้คอลัมน์ วีไอพีอีสต์ เวิลด์จตุคามเทอร์โบ
                  คอนเฟิร์มคอนเซ็ปต์พะเรอทิปออร์แกนิค
                </span>
                <hr />
                <h5>60.00 THB</h5>
                <del>65.00</del>
                <br />
                <button class="btn btn-primary py-2 w-100 mt-2">Add to Cart</button>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    sortBy: 'score',
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
}
</script>

<style scoped>
.add_to_basket {
  position: fixed;
  width: 100%;
  bottom: 0;
  z-index: 9999;
}
</style>
