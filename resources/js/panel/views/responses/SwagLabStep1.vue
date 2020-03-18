<template>
  <div>
    <div class="flex w-full items-center" id="page-home">
      <div class="vx-col sm:w-1/2 md:w-1/2 lg:w-3/4 xl:w-3/5 sm:m-0">
        <div class="bn-welcome-board">
          <h1 class="my-4">Order Issues</h1>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="w-full sw-table">
        <div class="flex flex-wrap">
          <div class="w-full text-center mt-10 mb-4">
            <h2>Upload your Design</h2>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 m-auto text-center px-2">
            <p class="text-grey">Drag and drop your design or upload below.</p>
          </div>
        </div>
        <div class="flex flex-wrap pb-5 justify-center">
          <div class="w-full px-5 py-2">
            <div class="sw-upload-img">
              <vs-upload
                action="https://jsonplaceholder.typicode.com/posts/"
                @on-success="successUpload"
              />
            </div>
          </div>
          <div class="xl:w-1/3 text-center">
            <p class="text-grey">
              PNG, JPG and SVG formats supported.
              <br />For optimum printing quality, we recommend usingvector graphics or images with a minimum resolution of 2400px(w) x 3300px(h) at 300dpi.
            </p>
            <p class="text-grey py-4">Maximum upload file size is 50MB.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    successUpload() {
      this.$vs.notify({
        color: "success",
        title: "Upload Success",
        text: "Lorem ipsum dolor sit amet, consectetur"
      });
    }
  }
};
</script>
