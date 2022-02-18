<template>
  <div class="content-wrapper">
    <b-row class="main">
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
    </b-row>

    <b-row class="main">
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
      <b-card
        title="Card Title"
        tag="article"
        style="max-width: 20rem"
        class="crd"
      >
      </b-card>
    </b-row>
  </div>
</template>

<script>
export default {
  name: "FlexTest",

  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style>
.main {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  flex-wrap: wrap;
  margin: 10px;
  padding: 10px;
}
.crd {
  height: 80px;
  width: 200px;
  margin-right: 5px;
}
</style>
