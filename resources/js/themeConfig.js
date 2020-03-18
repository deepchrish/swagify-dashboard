/*=========================================================================================
  File Name: themeConfig.js
  Description: Admin Panel Theme configuration
==========================================================================================*/

// MAIN THEME COLORS (VUESAX)
let colors = {
    primary: '#6441a5',
    success: '#28C76F',
    danger: '#EA5455',
    warning: '#FF9F43',
    dark: '#1E1E1E',
}

// THEME CONFIGS
const themeConfig = {
    footerType: "static",
    hideScrollToTop: false,
    mainLayoutType: "vertical",
    navbarColor: "#fff", // options[String]  : HEX color / rgb / rgba
    navbarType: "sticky", // options[String]  : floating(default) / static / sticky / hidden
    routerTransition: "slide-fade", // options[String]  : zoom-fade / slide-fade / fade-bottom / fade / zoom-out / none(default)
    rtl: false,
    sidebarCollapsed: false, // options[Boolean] : true, false(default)
    theme: "semi-dark",
    userInfoLocalStorageKey: "userInfo",
}

// Init Vuesax
import Vue from 'vue'
import Vuesax from 'vuesax'
Vue.use(Vuesax, {
    theme: {
        colors
    },
    rtl: themeConfig.rtl
})

export default themeConfig
