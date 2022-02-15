<template>
  <div :style="nodeMargin">
    <b-alert show class="d-flex justify-content-between mb-1">
      {{ node[0].func_table_name }}

      <div v-for="(sub, i) in node">
        <b-form-checkbox :id="sub.func_id" name="checkbox-1" :value="sub.func_id">
          {{sub.function_type}}
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
<!--      <pre>{{node[0].children}}</pre>-->
    <div v-if="hasChildren" v-show="showChildren">
      <TreeNode
        v-for="child in node[0].children"
        :key="child.func_id"
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
        console.log('aaaaaaaaaaaa',this.node[0].children);
      const { children } = this.node[0];
      // return children && children.length > 0;
      return children;
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

