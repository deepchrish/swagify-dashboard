<!-- =========================================================================================
	File Name: App.vue
	Description: Main vue file
========================================================================================== -->

<!-- Template -->
<template>
	<div id="app" :class="vueAppClasses">
		<router-view @setAppClasses="setAppClasses" />
	</div>
</template>

<!-- Template Script -->
<script>
import themeConfig from '@/../themeConfig.js'

export default {
  data() {
    return {
      vueAppClasses: [],
    }
  },
  methods: {
    toggleClassInBody(className) {
        document.body.classList.add('theme-semi-dark')
    },
    setAppClasses(classesStr) {
      this.vueAppClasses.push(classesStr)
    },
    handleWindowResize() {
      this.$store.commit('UPDATE_WINDOW_WIDTH', window.innerWidth)

      // Set --vh property
      document.documentElement.style.setProperty('--vh', `${window.innerHeight * 0.01}px`);
    },
    handleScroll() {
      this.$store.commit('UPDATE_WINDOW_SCROLL_Y', window.scrollY)
    }
  },
  mounted() {
    this.toggleClassInBody(themeConfig.theme)
    this.$store.commit('UPDATE_WINDOW_WIDTH', window.innerWidth)

    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  },
  async created() {

    let dir = "ltr"
    document.documentElement.setAttribute("dir", dir)

    window.addEventListener('resize', this.handleWindowResize)
    window.addEventListener('scroll', this.handleScroll)

  },
  destroyed() {
    window.removeEventListener('resize', this.handleWindowResize)
    window.removeEventListener('scroll', this.handleScroll)
  },
}

</script>
