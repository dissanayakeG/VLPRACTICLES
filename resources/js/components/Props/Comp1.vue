<template>
  <div>
    <form>
      <input type="text" v-model="item.name" />
      <input type="text" v-model="item.email" />
      <input type="text" v-model="item.phone" />
      <input type="text" v-model="item.address" />
    </form>
    <br />
    <br />
    <input type="text" v-model="getText" />
    <button @click="clickMe()">Click</button>
  </div>
</template>

<script>
export default {
  name: "Comp1",

  data() {
    return {
    };
  },

  props: {
    item: {
      default: {},
      type: Object,
    },

    value: {
      type: String,
    },
  },

  updated() {
    this.$nextTick(function () {
      console.log("updated");
    });
  },

  computed: {
    getText: {
      get() {
        return this.value;
      },
      set(val) {
        this.$emit("input", val);
      },
    },
  },

  methods: {
    clickMe() {
      this.getText = "aaaaaaaaaaaaa";
    },
  },
};
</script>

<style scoped>
</style>