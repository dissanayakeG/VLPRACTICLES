<template>
  <div :style="nodeMargin">
    <b-alert show class="d-flex justify-content-between mb-1">
      {{ node.label }}

      <div>
        <b-form-checkbox :id="node.id" name="checkbox-1" :value="node.id">
          I accept the terms and use
        </b-form-checkbox>
      </div>

      <b-icon
        icon="check-square"
        v-if="hasChildren"
        :class="toggleChildrenIcon"
        @click="toggleChildren"
        @keypress="toggleChildren"
      />
    </b-alert>
    <div v-if="hasChildren" v-show="showChildren">
      <TreeNode
        v-for="child in node.children"
        :key="child.id"
        :node="child"
        v-model="status"
        :spacing="spacing + 10"
      />
    </div>
  </div>
</template>


<script>
export default {
  name: "TreeNode",
  props: {
    node: {
      type: Object,
      required: true,
    },
    spacing: {
      type: Number,
      default: 0,
    },
  },
  data() {
    return {
      showChildren: false,
      status: [],
    };
  },
  computed: {
    nodeMargin() {
      return {
        "margin-left": `${this.spacing}px`,
      };
    },
    hasChildren() {
      const { children } = this.node;
      return children && children.length > 0;
    },
    toggleChildrenIcon() {
      return this.showChildren ? "fas fa-angle-down" : "fas fa-angle-right";
    },
  },
  methods: {
    toggleChildren() {
      this.showChildren = !this.showChildren;
    },
  },
};
</script>

