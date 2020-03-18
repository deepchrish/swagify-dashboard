/*=========================================================================================
  File Name: router.js
  Description: Routes for vue-router. Lazy loading is enabled.
==========================================================================================*/


import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

const router = new Router({
    mode: 'history',
    base: '/dashboard',
    scrollBehavior() {
        return {
            x: 0,
            y: 0
        }
    },
    routes: [{
            // =============================================================================
            // PANEL PAGE LAYOUT ROUTES
            // =============================================================================

            path: '/dashboard',
            component: () => import('./layouts/pages/PanelPage.vue'),
            children: [{
                    path: '/home',
                    component: () => import('./views/account/Dashboard.vue'),
                },
                {
                    path: '/storehubs',
                    component: () => import('./views/responses/StoreHubs.vue'),
                },
                {
                    path: '/demo-store',
                    component: () => import('./views/responses/demo-store.vue'),
                },
                {
                    path: '/empty-product',
                    component: () => import('./views/responses/empty-product.vue'),
                },
                {
                    path: '/swag-lab',
                    component: () => import('./views/responses/DefaultView.vue'),
                },
                {
                    path: '/product-details',
                    component: () => import('./views/responses/ProductDetails.vue'),
                },
                {
                    path: '/order-issues',
                    component: () => import('./views/responses/OrderIssues.vue'),
                },
                {
                    path: '/order-issues-2',
                    component: () => import('./views/responses/Ordersissues2.vue'),
                },
                {
                    path: '/swag-lab-step-1',
                    component: () => import('./views/responses/SwagLabStep1.vue'),
                },
                {
                    path: '/orders-listing',
                    component: () => import('./views/responses/OrdersListing.vue'),
                },
                {
                    path: '/custom-services',
                    component: () => import('./views/responses/ListView.vue'),
                },
                {
                    path: '/production',
                    component: () => import('./views/responses/DefaultView.vue'),
                },
                {
                    path: '/shipping',
                    component: () => import('./views/responses/DefaultView.vue'),
                },
                {
                    path: '/sales',
                    component: () => import('./views/responses/DefaultView.vue'),
                }
            ]

        },
        {
            // =============================================================================
            // FULL PAGE LAYOUT ROUTES
            // =============================================================================
            path: '/dashboard',
            component: () => import('./layouts/pages/FullPage.vue'),
            children: [{
                    path: '/notfound',
                    component: () => import('./views/responses/NotFound.vue')

                },
                {
                    path: '/create-new-storehub',
                    component: () => import('./views/responses/CreateNewStorehub.vue')

                }
            ]

        },
        // Redirect to 404 page, if no match found
        {
            path: '*',
            redirect: '/notfound'
        }

    ],
})

router.beforeEach((to, from, next) => {
    return next();
});
export default router
