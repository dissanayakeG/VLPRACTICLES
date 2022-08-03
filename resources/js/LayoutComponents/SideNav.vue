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
        <router-link to="/ui-navigator">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'UiNavigator' ? 'text highlight' : 'text'"
            >{{ "UI" }}</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/props-tests">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'PropsTests' ? 'text highlight' : 'text'"
            >{{ "Props" }}</span
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
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/tree-structure">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'TreeStructure' ? 'text highlight' : 'text'"
            >Tree Structure</span
          >
        </router-link>
      </li>
      <li class="item" @click="checkCurrentRoute">
        <router-link to="/email-templates">
          <ion-icon name="chevron-forward-outline"></ion-icon>
          <span
            :class="currentRoute == 'EmailTemplates' ? 'text highlight' : 'text'"
            >Email Templates</span
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
