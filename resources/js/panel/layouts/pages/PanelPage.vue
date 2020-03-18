<!-- =========================================================================================
    File Name: PanelPage.vue
    Description: Admin Pages layout
========================================================================================== -->

<!-- template -->
<template>
  <div
    class="layout--main bn-panel-body"
    :class="[layoutTypeClass, navbarClasses, footerClasses, {'no-scroll': isAppPage}]"
  >
    <!-- Sidebar Menu -->
    <v-nav-menu :navMenuItems="navMenuItems" title="My Swagify" parent=".layout--main" />
    <!-- /Sidebar Menu -->

    <div id="content-area" :class="[contentAreaClass, {'show-overlay': bodyOverlay}]">
      <div id="content-overlay" />

      <!-- Header Navbar -->
      <template>
        <the-navbar-vertical
          :navbarColor="navbarColor"
          :class="[
            {'text-white' : isNavbarDark  && !isThemeDark},
            {'text-base'  : !isNavbarDark && isThemeDark}
          ]"
        />
      </template>
      <!-- /Header Navbar -->

      <div class="content-wrapper">
        <div class="router-view">
          <div class="router-content">
            <div class="content-area__content bn-panel-content">
              <back-to-top
                bottom="5%"
                :right="$vs.rtl ? 'calc(100% - 2.2rem - 38px)' : '30px'"
                visibleoffset="500"
                v-if="!hideScrollToTop"
              >
                <vs-button
                  icon-pack="feather"
                  icon="icon-arrow-up"
                  class="shadow-lg btn-back-to-top"
                />
              </back-to-top>

              <transition :name="routerTransition" mode="out-in">
                <router-view
                  :key="$route.fullPath"
                  @changeRouteTitle="changeRouteTitle"
                  @setAppClasses="(classesStr) => $emit('setAppClasses', classesStr)"
                />
              </transition>
            </div>
            <!-- .bn-panel-content -->
          </div>
        </div>
      </div>
      <!-- .content-wrapper -->
      <the-footer />
    </div>
    <!-- #content-area -->
  </div>
  <!-- .bn-panel-body -->
</template>


<script>
import BackToTop from "vue-backtotop";
import navMenuItems from "@/layouts/components/vertical-nav-menu/navMenuItems.js";
import TheNavbarVertical from "@/layouts/components/navbar/TheNavbarVertical.vue";
import TheFooter from "@/layouts/components/TheFooter.vue";
import themeConfig from "@/../themeConfig.js";
import VNavMenu from "@/layouts/components/vertical-nav-menu/VerticalNavMenu.vue";

export default {
  components: {
    BackToTop,
    navMenuItems,
    TheFooter,
    TheNavbarVertical,
    VNavMenu
  },
  data() {
    return {
      footerType: themeConfig.footerType || "static",
      hideScrollToTop: themeConfig.hideScrollToTop,
      isNavbarDark: false,
      navbarColor: themeConfig.navbarColor || "#fff",
      navbarType: themeConfig.navbarType || "floating",
      navMenuItems: navMenuItems,
      routerTransition: themeConfig.routerTransition || "none",
      routeTitle: this.$route.meta.pageTitle
    };
  },
  watch: {
    $route() {
      this.routeTitle = this.$route.meta.pageTitle;
    },
    isThemeDark(val) {
      const color = this.navbarColor == "#fff" && val ? "#10163a" : "#fff";
      this.updateNavbarColor(color);
    },
    "$store.state.mainLayoutType"(val) {
      this.setNavMenuVisibility(val);
    }
  },
  computed: {
    bodyOverlay() {
      return this.$store.state.bodyOverlay;
    },
    contentAreaClass() {
      if (this.mainLayoutType === "vertical") {
        if (this.verticalNavMenuWidth == "default")
          return "content-area-reduced";
        else if (this.verticalNavMenuWidth == "reduced")
          return "content-area-lg";
        else return "content-area-full";
      }
      // else if(this.mainLayoutType === "boxed") return "content-area-reduced"
      else return "content-area-full";
    },
    footerClasses() {
      return {
        "footer-hidden": this.footerType == "hidden",
        "footer-sticky": this.footerType == "sticky",
        "footer-static": this.footerType == "static"
      };
    },
    isAppPage() {
      return this.$route.meta.no_scroll;
    },
    isThemeDark() {
      return this.$store.state.theme == "dark";
    },
    layoutTypeClass() {
      return `main-${this.mainLayoutType}`;
    },
    mainLayoutType() {
      return this.$store.state.mainLayoutType;
    },
    navbarClasses() {
      return {
        "navbar-hidden": this.navbarType == "hidden",
        "navbar-sticky": this.navbarType == "sticky",
        "navbar-static": this.navbarType == "static",
        "navbar-floating": this.navbarType == "floating"
      };
    },
    verticalNavMenuWidth() {
      return this.$store.state.verticalNavMenuWidth;
    },
    windowWidth() {
      return this.$store.state.windowWidth;
    }
  },
  methods: {
    changeRouteTitle(title) {
      this.routeTitle = title;
    },
    updateNavbar(val) {
      if (val == "static")
        this.updateNavbarColor(this.isThemeDark ? "#10163a" : "#fff");
      this.navbarType = val;
    },
    updateNavbarColor(val) {
      this.navbarColor = val;
      if (val == "#fff") this.isNavbarDark = false;
      else this.isNavbarDark = true;
    },
    updateFooter(val) {
      this.footerType = val;
    },
    setNavMenuVisibility(layoutType) {
      if (
        (layoutType === "horizontal" && this.windowWidth >= 1200) ||
        (layoutType === "vertical" && this.windowWidth < 1200)
      ) {
        this.$store.commit("TOGGLE_IS_VERTICAL_NAV_MENU_ACTIVE", false);
        this.$store.dispatch("updateVerticalNavMenuWidth", "no-nav-menu");
      } else {
        this.$store.commit("TOGGLE_IS_VERTICAL_NAV_MENU_ACTIVE", true);
      }
    },
    toggleHideScrollToTop(val) {
      this.hideScrollToTop = val;
    }
  },
  created() {
    const color =
      this.navbarColor == "#fff" && this.isThemeDark
        ? "#10163a"
        : this.navbarColor;
    this.updateNavbarColor(color);
    this.setNavMenuVisibility(this.$store.state.mainLayoutType);
  }
};
</script>