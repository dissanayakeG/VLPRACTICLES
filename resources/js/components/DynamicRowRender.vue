<template>
  <div class="content-wrapper">
    <button class="btn btn-primary" @click.prevent="addNewItem()">Add</button>
    <br /><br />
    <!-- <pre>{{items}}</pre> -->
    <form>
      <div v-for="(item, index) in items" :key="index">
        Name:<input type="text" v-model="item.name" /> 
        Email:<input type="text" v-model="item.email" /> 
        Phone:<input type="text" v-model="item.phone" />
        <br /><br />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "DynamicRowRender",

  data() {
    return {
      items: [],
      rowId:0
    };
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    addNewItem() {
      this.items.push({
        id:this.rowId,
        name:'',
        email:'',
        phone:''
      })
      this.rowId++;     
    },
  },
};
</script>

<style scoped>
</style>
