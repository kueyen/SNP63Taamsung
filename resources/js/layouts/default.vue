<template>
  <div class="main-layout">
    <navbar />
    <loading
      :active.sync="isLoading"
      :can-cancel="false"
      color="#fff"
      :is-full-page="true"
      background-color="#fc6011"
      :opacity="1"
    />
    <div class="container mt-4">
      <child />
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Loading from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/vue-loading.css'
export default {
  name: 'MainLayout',

  components: {
    Navbar,
    Loading
  }
}
</script>

<style>
@import url('/css/bootstrap.min.css');
</style>
