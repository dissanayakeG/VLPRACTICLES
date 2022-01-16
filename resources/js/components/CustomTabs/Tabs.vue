<template>
  <div class="content-wrapper">
    <div class="tab-holder">
      <span @click.prevent="changeTab('tab-1')" :class="currentTab == 'tab-1' ? 'highlight' : 'normal-text'">tab-1  </span>
      <span>></span>
      <span @click.prevent="changeTab('tab-2')" :class="currentTab == 'tab-2' ? 'highlight' : 'normal-text'">tab-2  </span>
      <span>></span>
      <span @click.prevent="changeTab('tab-3')" :class="currentTab == 'tab-3' ? 'highlight' : 'normal-text'">tab-3  </span>
    </div>

    <div class="tab-holder">
      <tab-1 v-if="currentTab == 'tab-1'" />
      <tab-2 v-if="currentTab == 'tab-2'" />
      <tab-3 v-if="currentTab == 'tab-3'" />
    </div>
  </div>
</template>

<script>
import Tab1 from "./Tab1.vue";
import Tab2 from "./Tab2.vue";
import Tab3 from "./Tab3.vue";

export default {
  name: "CustomTabs",

  data() {
    return {
      currentTab: "tab-1",
    };
  },

  components: { Tab1, Tab2, Tab3 },

  methods: {
    changeTab(tabNumber) {
      this.currentTab = tabNumber;
    },
  },
};
</script>

<style scoped>
.tab-holder {
  display: flex;
}

.highlight{
    font-size: 20px;
    color: rgb(42, 71, 165);
    padding-bottom: 20px;
}

.normal-text{
    font-size: 20px;
    padding-bottom: 20px;
}
</style>
