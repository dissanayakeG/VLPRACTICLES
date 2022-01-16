<template>
  <div id="app">
    <router-link class="router-link" to="/input-binding-dashboard">
      {{ "Input Bindings" }}
    </router-link>

    {{ roles }} 

    <div v-for="(userRole, index) in users">
      <br /><br />
      {{ index }}
      <input
        type="checkbox"
        v-model="checkAll"
        :value="index"
        @change="checkAllItems(index)"
      />
      <div v-for="role in userRole">
        {{ role.name }}
        <input
          type="checkbox"
          v-model="roles"
          :value="role"
          @change="onChangeUser(role, index)"
        />
      </div>
    </div>

    <button @click.prevent="filterUsers">save</button>
  </div>
</template>

<script>
export default {
  name: "CheckBoxesComplex",
  data() {
    return {
      allSelected: false,
      checkAll: [],
      users: {
        GB1: [
          {
            id: 1,
            name: "Alda Myrrhine",
            user: {
              id: 1,
              first_name: "Hyre",
            },
            pcn: {
              id: 1,
              name: "a",
            },
          },
          {
            id: 2,
            name: "Alda Myrrhine",
            user: {
              id: 2,
              first_name: "Hyre",
            },
            pcn: {
              id: 1,
              name: "a",
            },
          },
          {
            id: 3,
            name: "Alda Myrrhine",
            user: {
              id: 3,
              first_name: "Hyre",
            },
            pcn: {
              id: 1,
              name: "a",
            },
          },
        ],
        GB2: [
          {
            id: 1,
            name: "Amrita Rabi",
            user: {
              id: 4,
              first_name: "Hyre",
            },
            pcn: {
              id: 2,
              name: "ab",
            },
          },
          {
            id: 2,
            name: "Amrita Rabi",
            user: {
              id: 5,
              first_name: "Hyre",
            },
            pcn: {
              id: 2,
              name: "ab",
            },
          },
          {
            id: 3,
            name: "Amrita Rabi",
            user: {
              id: 6,
              first_name: "Hyre",
            },
            pcn: {
              id: 2,
              name: "ab",
            },
          },
        ],
        GB3: [
          {
            id: 1,
            name: "Ruza Alannah",
            user: {
              id: 8,
              first_name: "Hyre",
            },
            pcn: {
              id: 3,
              name: "abc",
            },
          },
          {
            id: 2,
            name: "Ruza Alannah",
            user: {
              id: 9,
              first_name: "Hyre",
            },
            pcn: {
              id: 3,
              name: "abc",
            },
          },
          {
            id: 3,
            name: "Ruza Alannah",
            user: {
              id: 10,
              first_name: "Hyre",
            },
            pcn: {
              id: 3,
              name: "abc",
            },
          },
        ],
      },

      roles: [
        {
          id: 3,
          name: "Alda Myrrhine",
          user: { id: 3, first_name: "Hyre" },
          pcn: { id: 1, name: "a" },
        },
      ],
    };
  },

  mounted() {},

  methods: {
    onChangeUser(role, index) {
      console.log(role, index);
    },

    filterUsers() {
      let tempArry = [];
      this.roles.forEach(function (val, key) {
        tempArry.push({
          id: val.id,
          name: val.name,
          pcnId: val.pcn.id,
        });
      });

      this.roles = tempArry;
    },

    checkAllItems(value) {
      let tempArry = [];
      if (this.checkAll && this.checkAll.indexOf(value) !== -1) {
        this.users[value].forEach(function (val, index) {
          tempArry.push({
            id: val.id,
            name: val.name,
            user: { id: val.user.id, first_name: val.user.first_name },
            pcn: { id: val.pcn.id, name: val.pcn.name },
          });
        });
        this.roles = tempArry;
      } else {
        this.roles[value] = [];
      }
    },
  },
};
</script>