<style scoped>
.highlight {
  color: aqua;
}
</style>

<template>
  <div class="nav-list">
    <ul>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/dashboard">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'Dashboard' ? 'text highlight' : 'text'"
            >{{ "dashboard" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/flex-test">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'FlexTest' ? 'text highlight' : 'text'"
            >{{ "Flex Test" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/tabs-test">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'TabsTest' ? 'text highlight' : 'text'"
            >{{ "Tabs Test" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/input-styling">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'InputStyling' ? 'text highlight' : 'text'"
            >{{ "Input Styling" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/custom-tabs">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'CustomTabs' ? 'text highlight' : 'text'"
            >{{ "Custome Tabs" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/props-tests">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'PropsTests' ? 'text highlight' : 'text'"
            >{{ "Props test" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/list-rendering">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            class="currentRoute=='ListRendering'? 'text highlight': 'text'"
            >{{ "List Rendering" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/input-binding-dashboard">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="
              currentRoute == 'InputBindingBashBoard'
                ? 'text highlight'
                : 'text'
            "
            >Input Bindings</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/dynamic-row-render">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="
              currentRoute == 'DynamicRowRender' ? 'text highlight' : 'text'
            "
            >Dynamic Row Render</span
          >
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "SideNave",

  data() {
    return {
      currentRoute: "Dashboard",
    };
  },

  methods: {
    checkCurrentRoute() {
      this.currentRoute = this.$route.name;
    },
  },
};
</script>
