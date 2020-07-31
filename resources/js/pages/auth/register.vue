<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
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

          <!-- Password -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">password</label>
            <div class="col-md-7">
              <input
                v-model="form.password"
                :class="{ 'is-invalid': form.errors.has('password') }"
                class="form-control"
                type="password"
                name="password"
              />
              <has-error :form="form" field="password" />
            </div>
          </div>

          <!-- Password Confirmation -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">confirm_password</label>
            <div class="col-md-7">
              <input
                v-model="form.password_confirmation"
                :class="{ 'is-invalid': form.errors.has('password_confirmation') }"
                class="form-control"
                type="password"
                name="password_confirmation"
              />
              <has-error :form="form" field="password_confirmation" />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-7 offset-md-3 d-flex">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                ลงทะเบียน
              </v-button>

              <!-- GitHub Register Button -->
              <login-with-github />
            </div>
          </div>
        </form>
      </card>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import LoginWithGithub from '~/components/LoginWithGithub'

export default {
  middleware: 'guest',

  components: {
    LoginWithGithub
  },

  metaInfo() {
    return { title: 'ลงทะเบียน' }
  },

  data: () => ({
    form: new Form({
      first_name: '',
      last_name: '',
      line_user_id: 1,
      email: '',
      tel: '',

      password: '',
      password_confirmation: ''
    })
  }),
  async created() {
    await this.initializeLiff('1654463041-BP37a3GE')
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
