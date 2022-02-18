<template>
  <div class="content-wrapper">
    <Comp1 :item="item" v-model="getText" />
    {{ getText }}<br />{{ item }}<br /><br />

    <Comp2 v-bind:value="searchText" v-on:input="searchText = $event" />
    {{ searchText }}
  </div>
</template>

<script>
import Comp1 from "./Comp1.vue";
import Comp2 from "./Comp2.vue";
export default {
  name: "PropsTests",

  data() {
    return {
      getText: "a",
      searchText: "",
      item: {
        id: 1,
        name: "name1",
        email: "name1@gmail.com",
        phone: "045678904235",
        address: "kksd sdf sdf",
      },
    };
  },

  components: {
    Comp1,
    Comp2,
  },
};
</script>

<style scoped>
</style>
