<template>
  <div id="app">
    <router-link class="router-link" to="/input-binding-dashboard">
      {{ "Input Bindings" }}
    </router-link>
    <br /><br />

    <input type="checkbox" @change="checkALL($event)" v-model="allSelected" />
    <li v-for="role in users" :key="role.id">
      <input type="checkbox" v-model="roles" :value="role" />
      <label>{{ role.name }}</label>
    </li>
    <pre>{{ roles }}</pre>
    <button @click.prevent="filterUsers">save</button>
  </div>
</template>

<script>
export default {
  name: "CheckBoxesAdvance",
  data() {
    return {
      allSelected: false,
      users: [
        {
          id: 1,
          name: "Alda Myrrhine",
          pcn: {
            id: 1,
            name: "a",
          },
        },
        {
          id: 2,
          name: "Amrita Rabi",
          pcn: {
            id: 2,
            name: "ab",
          },
        },
        {
          id: 3,
          name: "Ruza Alannah",
          pcn: {
            id: 3,
            name: "abc",
          },
        },
        {
          id: 4,
          name: "Amrita Rabi",
          pcn: {
            id: 2,
            name: "ab",
          },
        },
        {
          id: 5,
          name: "Amrita Rabi",
          pcn: {
            id: 2,
            name: "ab",
          },
        },
      ],

      roles: [],
    };
  },

  mounted() {
    let tempArry = [
      { id: 3, name: "Ruza Alannah", pcn: { id: 3, name: "abc" } },
    ]; // update this from api response(postaman collection)

    this.roles.forEach(function (val, key) {
      tempArry.push({
        id: val.id,
        name: val.name,
        pcnId: val.pcn.id,
        pcnName: val.pcn.name,
      });
    });

    this.roles = tempArry;
  },

  methods: {
    filterUsers() {
      let tempArry = [];
      this.roles.forEach(function (val, key) {
        tempArry.push({
          id: val.id,
          name: val.name,
          pcnId: val.pcn.id,
          pcnName: val.pcn.name,
        });
      });

      this.roles = tempArry;
    },

    checkALL(e) {
      let tempArry = [];
      if (this.allSelected) {
        this.users.forEach(function (val) {
          tempArry.push({
            id: val.id,
            name: val.name,
            pcn: { id: val.pcn.id, name: val.pcn.name },
          });
        });
        this.roles = tempArry;
      } else {
        this.roles = [];
      }
    },
  },
};
</script>