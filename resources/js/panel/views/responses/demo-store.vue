<template>
  <div>
    <div class="flex w-full items-center" id="page-home">
      <div class="vx-col sm:w-1/2 md:w-1/2 lg:w-3/4 xl:w-3/5 sm:m-0">
        <div class="bn-welcome-board">
          <h1 class="my-4">Jenny & Jill Clothing</h1>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class="w-full sw-table">
        <div class="flex flex-wrap">
          <div
            class="w-full px-4 pt-4 pb-0 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 py-4 sm:px-2 md:px-4"
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
          <div
            class="w-full hidden sm:block px-4 pt-4 pb-0 sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 py-4 m:px-2 md:px-4 sm:text-right"
          ></div>
          <div
            class="w-full px-4 pt-4 pb-0 sm:w-full md:w-full lg:w-1/3 xl:w-1/3 sm:px-2 md:px-4 lg:text-right"
          >
            <vs-dropdown class="sw-btn-default w-full sm:w-auto">
              <vs-button class="btn-drop w-full" type="border" icon="settings">
                Settings
                <i class="feather icon-chevron-down"></i>
              </vs-button>
              <vs-dropdown-menu>
                <vs-dropdown-item>Storehub settings</vs-dropdown-item>
                <vs-dropdown-item>Store settings</vs-dropdown-item>
              </vs-dropdown-menu>
            </vs-dropdown>
            <vs-button
              color="primary"
              type="filled"
              icon-pack="feather"
              icon="icon-plus"
              class="float-right sw-btn-primary sw-mobile-btn sm:ml-2"
            >Storehub</vs-button>
          </div>
        </div>
        <vs-divider />
        <div class="flex flex-wrap">
          <div class="w-full text-center mt-10 mb-4">
            <h2>Say hi to your new storehub, Jenny!</h2>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 m-auto text-center">
            <p
              class
            >Your storehub can do pretty cool stuff. Find all the good that it does down below and start selling your ideas!</p>
          </div>
        </div>
        <div class="flex flex-wrap py-5">
          <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-5 py-2">
            <div class="p-4 flex flex-col justify-between leading-normal sw-cards">
              <img class="img-responsive mr-auto" src="@assets/images/pages/add-product.svg" />
              <div class="mb-8">
                <h2 class="text-xl mb-2">Adding new products</h2>
                <p
                  class="text-gray-700 text-base"
                >Your Storehub can store all the amazing products you design. Once you finish your design, We let you save your products in Storehubs, So you can publish the products to other platforms.</p>
              </div>
              <div class="sw-btn-default">
                <vs-button color="primary" type="filled">Try it out now</vs-button>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2 px-5 py-2">
            <div class="p-4 flex flex-col justify-between leading-normal sw-cards">
              <img class="img-responsive mr-auto" src="@assets/images/pages/connect-store.svg" />
              <div class="mb-8">
                <h2 class="text-xl mb-2">Connect Stores</h2>
                <p
                  class="text-gray-700 text-base"
                >Your Storehub can connect to multiple stores so you can publish the products you design quick and easy in all the stores at once.</p>
              </div>
              <div class="sw-btn-default">
                <vs-button color="primary" type="filled">Try it out now</vs-button>
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
        { text: "All Stores", value: 1 },
        { text: "Stores X", value: 2 },
        { text: "Stores Y", value: 3 },
        { text: "Stores Z", value: 4 },
        { text: "Stores A", value: 5 }
      ]
    };
  }
};
</script>