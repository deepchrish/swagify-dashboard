<template>
  <div>
    <div class="flex w-full items-center" id="page-home">
      <div class="vx-col sm:w-1/2 md:w-1/2 lg:w-3/4 xl:w-3/5 sm:m-0">
        <div class="bn-welcome-board">
          <h1 class="my-4">Orders Issues</h1>
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
            <vs-th sort-key="storehubname">Order ID</vs-th>
            <vs-th sort-key="products">Items with issues</vs-th>
            <vs-th sort-key="storestatus">Created on</vs-th>
            <vs-th sort-key="storeslist">Status</vs-th>
            <vs-th sort-key="storeslist">Resolved on</vs-th>
            <vs-th sort-key="settings" class="w-10">Action</vs-th>
          </template>

          <template slot-scope="{data}">
            <vs-tr :data="tr" :key="indextr" v-for="(tr, indextr) in data">
              <vs-td :data="data[indextr].orderid">
                <vs-list-item v-title>
                  <template slot="avatar">
                    <vs-avatar />
                    {{ data[indextr].orderid }}
                  </template>
                </vs-list-item>
              </vs-td>
              <vs-td :data="data[indextr].itemid">{{ data[indextr].itemid }}</vs-td>

              <vs-td :data="data[indextr].creationdate">{{ data[indextr].creationdate }}</vs-td>
              <vs-td :data="data[indextr].storestatus">
                <i
                  v-if="data[indextr].orderstatus == 'Requested'"
                  class="feather icon-circle sw-blue"
                >
                  <span>{{ data[indextr].orderstatus }}</span>
                </i>
                <i
                  v-if="data[indextr].orderstatus == 'Resolved'"
                  class="feather icon-circle sw-green"
                >
                  <span>{{ data[indextr].orderstatus }}</span>
                </i>
                <i
                  v-if="data[indextr].orderstatus == 'Under Review'"
                  class="feather icon-circle sw-orange"
                >
                  <span>{{ data[indextr].orderstatus }}</span>
                </i>
              </vs-td>
              <vs-td :data="data[indextr].resolveddate">{{ data[indextr].resolveddate }}</vs-td>
              <vs-td :data="data[indextr].proname" class="sw-proname">
                <div class="flex sw-btns-group">
                  <vs-button color="primary" type="border">View</vs-button>
                  <a href="#">
                    <i class="feather icon-refresh-ccw"></i>
                  </a>
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
      select3: 1,
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
      ],
      options3: [
        {
          text: "All Storeshubs",
          value: 1
        },
        {
          text: "Storeshubs X",
          value: 2
        },
        {
          text: "Storeshubs Y",
          value: 3
        },
        {
          text: "Storeshubs Z",
          value: 4
        },
        {
          text: "Storeshubs A",
          value: 5
        }
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
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Under Review",
          resolveddate: "08.27.2019"
        },
        {
          id: 2,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Requested",
          resolveddate: "08.27.2019"
        },
        {
          id: 3,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Resolved",
          resolveddate: "08.27.2019"
        },
        {
          id: 4,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Resolved",
          resolveddate: "08.27.2019"
        },
        {
          id: 5,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Requested",
          resolveddate: "08.27.2019"
        },
        {
          id: 6,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Requested",
          resolveddate: "08.27.2019"
        },
        {
          id: 7,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Under Review",
          resolveddate: "08.27.2019"
        },
        {
          id: 8,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Under Review",
          resolveddate: "08.27.2019"
        },
        {
          id: 9,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Resolved",
          resolveddate: "08.27.2019"
        },
        {
          id: 10,
          orderid: "SW-9603",
          itemid: "20",
          creationdate: "08.27.2019",
          orderstatus: "Resolved",
          resolveddate: "08.27.2019"
        }
      ],
      descriptionItems: [5, 15, 50]
    };
  }
};
</script>
