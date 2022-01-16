<template>
  <div class="content-wrapper">
    <router-link class="router-link" to="/input-binding-dashboard">
      {{ "Input Bindings" }}
    </router-link>
    <br /><br />

    {{ selectedUsers }}

    <div id="app">
      <input type="checkbox" v-model="allSelected" /> Select All <br /><br />

      <ul>
        <li v-for="user in users" :key="user.id">
          <input
            type="checkbox"
            v-model="user.selected"
            @change="onChangeUser(user)"
          />
          {{ user.name }}
        </li>
      </ul>

      <br /><br />
      <button @click="getSelectedUsers">Get Selected Users</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "CheckBoxesSimple",

  data() {
    return {
      users: [
        {
          id: 1,
          name: "Alda Myrrhine",
          selected: false,
          pcn: {
            id: 1,
            name: "a",
          },
        },
        {
          id: 2,
          name: "Amrita Rabi",
          selected: false,
          pcn: {
            id: 2,
            name: "ab",
          },
        },
        {
          id: 3,
          name: "Ruza Alannah",
          selected: false,
          pcn: {
            id: 3,
            name: "abc",
          },
        },
      ],

      selectedUsers: [],
    };
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
    onChangeUser(item) {
      let self = this;

      this.users.forEach(function (value, key) {
        if (value.id == item.id && value.selected == true) {
          self.selectedUsers.push({
            user_id: value.id,
            pcn_id: value.pcn.name,
            user_name: value.name,
          });
        }
      });
    },

    getSelectedUsers() {
      let array2 = [];

      //get only selected objects
      this.selectedUsers = this.users.filter((user) => {
        return user.selected;
      });

      //filter duplicates
      let result = this.selectedUsers.filter(function (a) {
        return !this[a.id] && (this[a.id] = true);
      }, Object.create(null));
      array2.push(result);

      this.selectedUsers = array2;

      //filter empty objects and update final array
      this.selectedUsers = this.selectedUsers.filter(
        (value) => Object.keys(value).length !== 0
      );
    },
  },
};
</script>