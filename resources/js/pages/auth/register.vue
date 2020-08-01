<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <div class="text-center">
        <img :src="user.image_url" width="200" />
      </div>

      <card title="ลงทะเบียน">
        <form @submit.prevent="register" @keydown="form.onKeydown($event)">
          <!-- Name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">first_name</label>
            <div class="col-md-7">
              <input
                v-model="form.first_name"
                :class="{ 'is-invalid': form.errors.has('first_name') }"
                class="form-control"
                type="text"
                name="first_name"
              />
              <has-error :form="form" field="first_name" />
            </div>
          </div>

          <!-- LastName -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">last_name</label>
            <div class="col-md-7">
              <input
                v-model="form.last_name"
                :class="{ 'is-invalid': form.errors.has('last_name') }"
                class="form-control"
                type="text"
                name="last_name"
              />
              <has-error :form="form" field="last_name" />
            </div>
          </div>

          <!-- Email -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
            <div class="col-md-7">
              <input
                v-model="form.email"
                :class="{ 'is-invalid': form.errors.has('email') }"
                class="form-control"
                type="email"
                name="email"
              />
              <has-error :form="form" field="email" />
            </div>
          </div>

          <!-- Phone -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Phone Number</label>
            <div class="col-md-7">
              <input
                v-model="form.tel"
                :class="{ 'is-invalid': form.errors.has('tel') }"
                class="form-control"
                type="tel"
                name="tel"
              />
              <has-error :form="form" field="tel" />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-7 offset-md-3 d-flex">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                ลงทะเบียน
              </v-button>
            </div>
          </div>
        </form>
      </card>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'
export default {
  middleware: 'guest',

  metaInfo() {
    return { title: 'ลงทะเบียน' }
  },

  data: () => ({
    form: new Form({
      first_name: '',
      last_name: '',
      line_user_id: 1,
      email: '',
      tel: ''

      // password: '',
      // password_confirmation: ''
    })
  }),
  watch: {
    async user() {
      const { data } = await axios.get(`/api/line/user/check/register?line_user_id=${this.user.id}`)

      if (data.result.isRegistered) {
        alert('มึงลงทะเบียนแล้ว')
        this.closeWindow()
      }

      this.form.email = this.user.email
      this.form.line_user_id = this.user.id
    }
  },
  async created() {
    // await this.initializeLiff('1654463041-BP37a3GE')
  },

  methods: {
    async register() {
      // Register the user.
      const { data, status } = await this.form.post('/api/register')

      if (status == 200) {
        alert('ลงทะเบียนสำเร็จ')
      }
    }
  }
}
</script>
