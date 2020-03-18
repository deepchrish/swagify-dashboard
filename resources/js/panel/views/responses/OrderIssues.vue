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
          <div
            class="w-full px-4 pt-4 pb-0 sm:w-1/3 md:w-1/3 lg:w-1/4 xl:w-1/4 py-4 sm:px-2 md:px-4"
          >
            <template>
              <vs-input
                size="default"
                icon="search"
                placeholder="Search"
                v-model="value1"
                class="sw-search"
              />
            </template>
          </div>
          <div class="w-full px-4 sm:w-1/3 md:w-1/3 lg:w-1/4 xl:w-1/4 py-4 m:px-2 md:px-4">
            <template>
              <div class="con-select-example">
                <vs-select class="selectExample" v-model="select2" width="100%">
                  <vs-select-item
                    :key="index"
                    :value="item.value"
                    :text="item.text"
                    v-for="(item,index) in options2"
                  />
                </vs-select>
              </div>
            </template>
          </div>
        </div>
        <vs-divider />
        <div class="flex flex-wrap">
          <div class="w-full text-center mt-10 mb-4">
            <h2>Here you will see all issues you submited against orders.</h2>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 m-auto text-center px-2">
            <p class="text-grey">
              When problem arises, you can always submit a request to have it checked, We will review
              it and ger back to you.
            </p>
          </div>
        </div>
        <div class="flex flex-wrap pb-5">
          <div class="w-full px-5 py-2">
            <div class="p-4 flex flex-col text-center">
              <img class="img-responsive" src="@assets/images/pages/noproducts.svg" />
              <div class="mt-4">
                <vs-button color="primary" type="filled" class="sw-btn-primary">Start Desiging</vs-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selected: [],
      select1Normal: "",
      select2: 1,
      options2: [
        {
          text: "All Stores",
          value: 1
        },
        {
          text: "Stores X",
          value: 2
        },
        {
          text: "Stores Y",
          value: 3
        },
        {
          text: "Stores Z",
          value: 4
        },
        {
          text: "Stores A",
          value: 5
        }
      ]
    };
  }
};
</script>
