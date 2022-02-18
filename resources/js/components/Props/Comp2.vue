<template>
  <div>
    <input
      v-bind:value="value1"
      v-on:input="$emit('input', $event.target.value)"
    />

    <button @click="clickMe()">Click</button>
  </div>
</template>

<script>
export default {
  name: "Comp1",

  data() {
    return {
      inputText: "",
      value1: "",
    };
  },

  props: {
    value: {
      type: String,
    },
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
      this.value1 = "aaaaaaaaaaaaa";
    },
  },
};
</script>

<style scoped>
</style>