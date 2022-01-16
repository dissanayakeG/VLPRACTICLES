<template>
  <div class="content-wrapper">
    <router-link class="router-link" to="/input-binding-dashboard">
      {{ "Input Bindings" }}
    </router-link>
    <br /><br />

    <div id="app">
      <input type="checkbox" v-model="allSelected" /> Select All <br /><br />

      <ul>
        <li v-for="user in users" :key="user.id">
          <input type="checkbox" v-model="user.selected" /> {{ user.name }}
        </li>
      </ul>

      <br /><br />
      {{ users }}
      <br /><br />

      <button @click="getSelectedUsers">Get Selected Users</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "CheckBoxesSimple2",

  data() {
    return {
      users: [
        { id: 1, name: "Alda Myrrhine" },
        { id: 2, name: "Amrita Rabi" },
        { id: 3, name: "Ruza Alannah" },
      ],

      selectedUsers: [],
    };
  },
  mounted() {
    this.users.map(function (item) {
      const container = {};

      container[id] = item.id;
      container.name = item.name;
      container.selected = false;

      return container;
    });
  },

  computed: {
    allSelected: {
      set(selected) {
        this.users.forEach(function (user) {
          user.selected = selected;
        });
      },
      get() {
        return this.users.every(function (user) {
          return user.selected;
        });
      },
    },
  },
  methods: {
    getSelectedUsers() {
      let users = this.users.filter((user) => {
        return user.selected;
      });

      console.log(users);
    },
  },
};
</script>