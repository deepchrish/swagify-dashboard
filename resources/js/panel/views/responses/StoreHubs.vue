<template>
  <div>
    <div class="flex w-full items-center" id="page-home">
      <div class="vx-col sm:w-1/2 md:w-1/2 lg:w-3/4 xl:w-3/5 sm:m-0">
        <div class="bn-welcome-board">
          <h1 class="my-4">Storehubs</h1>
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
          <div class="w-full p-0 sm:w-1/3 md:w-1/3 lg:w-1/2 xl:w-1/2 sm:py-4 sm:px-2 md:px-4">
            <vs-button
              color="primary"
              type="filled"
              icon-pack="feather"
              icon="icon-plus"
              class="float-right sw-btn-primary sw-mobile-btn"
            >Storehub</vs-button>
          </div>
        </div>
        <vs-table
          multiple
          v-model="selected"
          @selected="handleSelected"
          pagination
          max-items="5"
          :data="users"
          description
          :description-items="descriptionItems"
          description-title="Showing"
          description-connector="of"
          description-body="Pages"
        >
          <template slot="thead">
            <vs-th sort-key="storehubname">Storehub Name</vs-th>
            <vs-th sort-key="products">Products</vs-th>
            <vs-th sort-key="storestatus">Status</vs-th>
            <vs-th sort-key="storeslist">Stores</vs-th>
            <vs-th sort-key="settings" class="w-10">Settings</vs-th>
          </template>

          <template slot-scope="{data}">
            <vs-tr :data="tr" :key="indextr" v-for="(tr, indextr) in data">
              <vs-td :data="data[indextr].storehubname">
                <a href="google.com">
                  <vs-list-item v-title>
                    <template slot="avatar">
                      <vs-avatar />
                      {{ data[indextr].storehubname }}
                    </template>
                  </vs-list-item>
                </a>
              </vs-td>
              <vs-td :data="data[indextr].products">{{ data[indextr].products }} Products</vs-td>
              <vs-td :data="data[indextr].storestatus">
                <i
                  v-if="data[indextr].storestatus == 'Active'"
                  class="feather icon-check-circle sw-active"
                ></i>
                <i
                  v-if="data[indextr].storestatus == 'Inactive'"
                  class="feather icon-x-circle sw-inactive"
                ></i>
                {{ data[indextr].storestatus }}
              </vs-td>

              <vs-td :data="data[indextr].storeslist">
                <div v-if="data[indextr].storeslist == 'No Stores Connected'"></div>
                <div v-if="data[indextr].storeslist == ' '">
                  <ul class="total-product">
                    <li v-if="data[indextr].storeslistshopify === 'Shopify'">
                      <img src="@assets/images/logo/shopify.png" title="Shopify" />
                    </li>
                    <li v-if="data[indextr].storeslistetsy === 'ETSY'">
                      <img src="@assets/images/logo/etsy.png" title="ETSY" />
                    </li>
                    <li v-if="data[indextr].storeslistwoocommerce === 'WooCommerce'">
                      <img src="@assets/images/logo/woo.png" title="WooCommerce" />
                    </li>
                    <li v-if="data[indextr].storeslistprestashop === 'Prestashop'">
                      <img src="@assets/images/logo/prestashop.png" title="prestashop" />
                    </li>
                  </ul>
                </div>
                <div>{{ data[indextr].storeslist }}</div>
              </vs-td>

              <vs-td :data="data[indextr].settings">
                <div class="flex btn-group sw-btns-group">
                  <vs-button color="primary" type="border" icon="settings">Store</vs-button>
                  <vs-button color="primary" type="border" icon="edit">Edit</vs-button>
                </div>
              </vs-td>
            </vs-tr>
          </template>
        </vs-table>
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
      ],
      tableList: [
        "vs-th: Component",
        "vs-tr: Component",
        "vs-td: Component",
        "thread: Slot",
        "tbody: Slot",
        "header: Slot"
      ],
      users: [
        {
          id: 1,
          storehubname: "Leanne Graham",
          products: "74",
          storestatus: "Active",
          storeslist: " ",
          storeslistshopify: "Shopify",
          storeslistetsy: "ETSY",
          storeslistwoocommerce: "WooCommerce",
          settings: ""
        },
        {
          id: 2,
          storehubname: "Tom Holand",
          products: "0",
          storestatus: "Inactive",
          storeslist: "No Stores Connected",
          settings: ""
        },
        {
          id: 3,
          storehubname: "Simran",
          products: "10",
          storestatus: "Active",
          storeslist: " ",
          storeslistshopify: "",
          storeslistetsy: "ETSY",
          storeslistwoocommerce: "",
          settings: "hildegard.org"
        },
        {
          id: 4,
          storehubname: "Khushboo",
          products: "0",
          storestatus: "Inactive",
          storeslist: " ",
          storeslistshopify: "Shopify",
          storeslistetsy: "",
          storeslistwoocommerce: "WooCommerce",
          settings: "hildegard.org"
        },
        {
          id: 5,
          storehubname: "Akash",
          products: "20",
          storestatus: "Active",
          storeslist: " ",
          storeslistshopify: "Shopify",
          storeslistetsy: "ETSY",
          storeslistwoocommerce: "WooCommerce",
          storeslistprestashop: "Prestashop",
          settings: "hildegard.org"
        },
        {
          id: 6,
          storehubname: "Aditi",
          products: "15",
          storestatus: "Active",
          storeslist: " ",
          storeslistshopify: "",
          storeslistetsy: "ETSY",
          storeslistwoocommerce: "WooCommerce",
          settings: "hildegard.org"
        },
        {
          id: 7,
          storehubname: "Deepak",
          products: "10",
          storestatus: "Active",
          storeslist: "No Stores Connected",
          settings: "hildegard.org"
        },
        {
          id: 8,
          storehubname: "Leanne Graham",
          products: "74",
          storestatus: "Inactive",
          storeslist: "No Stores Connected",
          settings: "hildegard.org"
        }
      ],
      descriptionItems: [5, 15, 50]
    };
  }
};
</script>