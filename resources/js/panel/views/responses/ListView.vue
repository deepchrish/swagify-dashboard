<template>
  <div id="app" class="w-full mx-auto">
    <div class="flex flex-wrap overflow-hidden">
      <div class="w-1/2 bg-gray-400 h-12 mb-2">
        <h1>Categories</h1>
      </div>
      <div class="w-1/2 text-right bg-gray-400 h-12 mb-2">
        <vs-button color="primary" type="filled" class="float-right">
          <span class="feather icon-plus mr-1"></span>Category
        </vs-button>
      </div>
    </div>

    <div id="app" style="overflow-x:auto;">
      <div
        class="flex flex-wrap overflow-hidden border-b border-grey-light mb-1 mx-1 bg-white py-3"
      >
        <div class="w-1/3 bg-gray-400 h-12 bg-white px-3 py-2">
          <form class="rounded">
            <div>
              <input
                class="shadow appearance-none border rounded w-full px-3 py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="search"
                type="search"
                placeholder="Search Categories"
              />
            </div>
          </form>
        </div>
        <div class="w-1/4 bg-gray-400 h-12 bg-white px-3 py-2">
          <div class="inline-block relative w-auto">
            <select
              class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
            >
              <option>All Categories</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap overflow-hidden border-b border-grey-light bg-white py-3 mx-1">
        <div class="w-1/2 bg-gray-400 h-12 bg-white px-3 py-3">
          <p>Selected 2 of 50 categories</p>
        </div>
        <div class="w-1/2 bg-gray-500 h-12 bg-white">
          <div class="flex inline-flex float-right mt-1">
            <div class="inline-block relative w-auto">
              <select
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
              >
                <option>More options</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
              <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
              >
                <svg
                  class="fill-current h-4 w-4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                  />
                </svg>
              </div>
            </div>
            <div class="inline-block relative w-auto mx-4">
              <select
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
              >
                <option>Show 25 Categories</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
              <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
              >
                <svg
                  class="fill-current h-4 w-4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table class="w-full shadow-lg rounded">
        <thead>
          <tr class="text-left border-b border-grey uppercase">
            <th class="bg-white px-4 py-4">
              <vs-checkbox v-model="checkBox1"></vs-checkbox>
            </th>
            <th class="bg-white text-sm text-gray-700 px-3">Name</th>
            <th class="bg-white text-sm text-gray-700 px-3">Slug</th>
            <th class="bg-white text-sm text-gray-700 px-3">Linked Products</th>
            <th class="bg-white text-gray-700 px-3">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="accordion border-b border-grey-light hover:bg-gray-100">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox2"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3 w-40">
                <p class="text-gray-800 text-sm">T-shirt</p>
                <p class="text-xs text-gray-500 font-medium">Sub Category: Apparel</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">t-shirt</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">27 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span class="bn-dropdown">
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
                <ul class="bn-dropdown-list">
                  <li>
                    <a href="#">Demo 1</a>
                  </li>
                  <li>
                    <a href="#">Demo 2</a>
                  </li>
                  <li>
                    <a href="#">Demo 3</a>
                  </li>
                </ul>
              </span>
            </td>
          </tr>

          <tr class="accordion border-b border-grey-light items-center">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox3"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3">
                <p class="text-gray-800 text-sm">Snapbacks</p>
                <p class="text-xs text-gray-500 font-medium">Parent</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">snapbacks-caps</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">54 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span>
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
              </span>
            </td>
          </tr>

          <tr class="accordion border-b border-grey-light items-center">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox3"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3">
                <p class="text-gray-800 text-sm">Snapbacks</p>
                <p class="text-xs text-gray-500 font-medium">Parent</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">snapbacks-caps</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">54 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span>
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
              </span>
            </td>
          </tr>

          <tr class="accordion border-b border-grey-light items-center">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox3"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3">
                <p class="text-gray-800 text-sm">Snapbacks</p>
                <p class="text-xs text-gray-500 font-medium">Parent</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">snapbacks-caps</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">54 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span>
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
              </span>
            </td>
          </tr>

          <tr class="accordion border-b border-grey-light items-center">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox3"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3">
                <p class="text-gray-800 text-sm">Snapbacks</p>
                <p class="text-xs text-gray-500 font-medium">Parent</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">snapbacks-caps</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">54 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span>
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
              </span>
            </td>
          </tr>

          <tr class="accordion border-b border-grey-light items-center">
            <td class="px-4 py-4">
              <vs-checkbox v-model="checkBox3"></vs-checkbox>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <img
                  class="hidden mr-1 md:mr-2 md:inline-block h-8 w-8 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&h=144&q=80"
                  alt
                />
              </span>
              <span class="py-3">
                <p class="text-gray-800 text-sm">Snapbacks</p>
                <p class="text-xs text-gray-500 font-medium">Parent</p>
              </span>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-800 font-medium">snapbacks-caps</p>
            </td>
            <td class="px-3">
              <p class="text-sm text-gray-700 font-medium">54 Products</p>
            </td>
            <td class="flex inline-flex items-center px-3">
              <span>
                <vs-button color="primary" class="px-4 py-2" type="border">View</vs-button>
              </span>
              <span class="px-4">
                <a href="#">
                  <span class="feather icon-trash-2 danger"></span>
                </a>
              </span>
              <span>
                <a href="#">
                  <span class="feather icon-menu"></span>
                </a>
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="flex flex-wrap overflow-hidden">
      <div class="w-1/2 bg-gray-400 h-12 mb-2">
        <p></p>
      </div>
      <div class="w-full text-right bg-gray-400 h-12 mb-2">
        <div class="bn-pagination">
          <span class="px-3 py-5 bn-pagination-label">Displaying page</span>
          <a class="bn-pagination-link" href="#">
            <span class="feather icon-chevron-left"></span>
          </a>
          <input type="number" min="1" max="10" class="bn-pagiantion-input" value="01" />
          <span class="px-3 py-5 bn-pagination-nums">of 10</span>
          <a class="bn-pagination-link" href="#">
            <span class="feather icon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.bn-pagination-label {
  width: 140px;
}

.bn-display-text {
  position: relative;
}

.bn-display-text p {
  position: absolute;
  white-space: nowrap;
}

.bn-pagination {
  display: flex;
  justify-content: flex-end;
}

.bn-pagination a {
  display: inline-block;
}

.bn-pagination-link {
  border: 1px solid #e6e6e6;
  padding: 4px 8px;
  margin: 14px 0 10px 0;
  border-radius: 0;
  background-image: linear-gradient(rgb(255, 255, 255), rgb(239, 239, 239));
  border: 1px solid #e6e6e6;
}

.bn-pagiantion-input {
  border: 1px solid red;
  text-align: center;
  height: 32px;
  width: 34px;
  margin-top: 14px;
}

.bn-pagiantion-input::-webkit-outer-spin-button,
.bn-pagiantion-input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.bn-dropdown-list {
  position: absolute;
  background: #fff;
  border: 1px solid #f1f1f1;
  border-radius: 3px;
  display: none;
}

.bn-dropdown-list::before {
  content: "";
  position: absolute;
  width: 8px;
  height: 8px;
  background: #fff;
  -webkit-transform: rotate(45deg) translate(-7px);
  transform: rotate(45deg) translate(-7px);
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  z-index: 10;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  top: 0;
  left: 10px;
  /* transform: rotate(45deg); */
}

.bn-dropdown-list li a {
  padding: 8px 22px;
  display: block;
}

.bn-dropdown-list li a:hover {
  background: #f7f7f7;
}

.bn-dropdown:hover .bn-dropdown-list {
  display: block;
}
</style>
