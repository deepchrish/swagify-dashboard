/*=========================================================================================
  File Name: navMenuItems.js
  Description: Sidebar Menu Items list. Add / Remove menu items from here.
  Strucutre:
          url     => router path
          name    => name to display in sidebar
          slug    => router path name
          icon    => Feather Icon component/icon name
          tag     => text to display on badge
          tagColor  => class to apply on badge element
          submenu   => submenu of current item (current item will become dropdown )
                NOTE: Submenu don't have any icon(you can add icon if u want to display)
          isDisabled  => disable sidebar item/group
==========================================================================================*/


export default [{
        url: '/home',
        name: "Home",
        icon: "HomeIcon",
    },
    {
        url: '/storehubs',
        name: "Storehubs",
        icon: "PieChartIcon",
    },
    {
        url: '/empty-product',
        name: "Products",
        icon: "BookIcon",
    },
    {
        url: '/swag-lab-step-1',
        slug: 'swag-lab-step-1',
        name: "Swag Lab",
        icon: "FilterIcon",
    },
    {
        url: '/operations',
        name: "My Orders",
        icon: "BriefcaseIcon",
        submenu: [{
            url: '/order-issues',
            slug: 'order-issues',
            name: "Order Issues",
            icon: "UsersIcon",

        }]
    },
    {
        url: '/product-details',
        slug: 'product-details',
        name: "Product Details",
        icon: "GlobeIcon",
    },
    {
        url: '/production',
        name: "Production",
        icon: "CpuIcon",
    },
    {
        url: '/shipping',
        name: "Shipping",
        icon: "TruckIcon",
    },
    {
        url: '/sales',
        name: "Sales",
        icon: "ShoppingCartIcon",
    }
]
