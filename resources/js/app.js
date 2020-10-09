import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'

import '~/plugins'
import '~/components'
import liff from '@line/liff'
import Mixins from './mixins'
Vue.mixin(Mixins)

Vue.prototype.$liff = liff
import VueCarousel from 'vue-carousel'
Vue.use(VueCarousel)

Vue.config.productionTip = false
const queryString = decodeURIComponent(window.location.search).replace('?liff.state=', '')
const params = new URLSearchParams(queryString)
Vue.prototype.$liffParams = params
/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
