<template>
  <div class="content-wrapper">
    <router-link class="router-link" to="/check-boxes-simple">{{ "Check boxes simple" }}</router-link>
    <router-link class="router-link" to="/check-boxes-advance">{{ "Check boxes Advance" }}</router-link>
    <router-link class="router-link" to="/grouped-check-boxes">{{ "Grouped Check boxes" }}</router-link>
    <router-link class="router-link" to="/list-rendering">{{ "List Rendering" }}</router-link>
    <router-link class="router-link" to="/vue-multi-select">{{ "Vue Multi Select" }}</router-link>
    <router-link class="router-link" to="/search-select">{{ "Search Select" }}</router-link>
  </div>
</template>

<script>
export default {
  name: "InputBindingBashBoard",
};
</script>

<style scoped>
</style>
