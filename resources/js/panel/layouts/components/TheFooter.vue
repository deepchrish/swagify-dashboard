<!-- =========================================================================================
    File Name: TheFooter.vue
    Description: Footer component
    Component Name: TheFooter
========================================================================================== -->

<!-- Template -->
<template functional>
  <footer class="the-footer flex-wrap justify-between b" :class="classes">
    <span>
      COPYRIGHT &copy; {{ new Date().getFullYear() }}
      <a
        href="javascript:void(0)"
        target="_blank"
        rel="nofollow"
      >Swagify</a>
    </span>
    <span class="md:flex hidden items-center">
      <feather-icon icon="HeartIcon" size="15px" svgClasses="fill-current text-danger" />
      <span>Designed By:</span>
      <a href="https://www.chrishansolutions.com/" target="_blank" rel="nofollow">Team Chrishan</a>
    </span>
  </footer>
</template>

<!-- Template Script -->
<script>
export default {
  name: "the-footer",
  props: {
    classes: {
      type: String
    }
  }
};
</script>
