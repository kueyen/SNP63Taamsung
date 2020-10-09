<template>
  <div>
    <img
      src="https://www.remotelands.com/travelogues/app/uploads/2018/08/shutterstock_761494024.jpg"
      class="w-100 img-fit"
      height="200"
    />

    <div class="pb-4">
      <div class="bg-white p-4 mb-3">
        <div class="container">
          <h3 class="text-o">Food Detail {{ id }}</h3>
          <span class="text-secondary"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. At iste modi blanditiis t
            placeat!</span
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    id() {
      return this.$route.params.id
    }
  }
}
</script>

<style></style>
