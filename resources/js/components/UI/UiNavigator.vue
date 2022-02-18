<template>
  <div class="content-wrapper">
    <router-link class="router-link" to="/flex-test">{{ "Flex Boxes" }}</router-link>
    <router-link class="router-link" to="/tabs-test">{{ "Tabs" }}</router-link>
    <router-link class="router-link" to="/custom-tabs">{{ "Custom Tabs" }}</router-link>
    <router-link class="router-link" to="/input-styling">{{ "InputStyling" }}</router-link>
  </div>
</template>

<script>
export default {
  name: "UiNavigator",
};
</script>

<style scoped>
</style>
