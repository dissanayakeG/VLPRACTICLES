<template>
  <div class="content-wrapper">
    <label class="file-wrapper">
      <span class="file-name" id="fileName">
        <input type="file" class="input-btn" id="fileUpload" />
      </span>
      <span type="button" class="file-label" id="customButton">Browse</span>
    </label>
  </div>
</template>

<style>
.input-btn {
  display: none;
}

.file-wrapper {
  margin: 20px;
  display: flex !important;
  flex-direction: row !important;
  justify-content: flex-end;
  border: 1px solid #6ce87e !important;
  width: 400px;
}

.file-label {
  background-color: #d5d2d2;
}

.file-name {
  min-width: 300px;
  margin-right: 10px;
}

.content-wrapper {
  margin: 10px;
  height: 100vh;
}
</style>

<script>
export default {
  name: "InputStyling",

  mounted() {
    document
      .getElementById("customButton")
      .addEventListener("click", function () {
        document.getElementById("fileUpload").click(); // trigger the click of actual file upload button
      });

    document.getElementById("fileUpload").addEventListener(
      "change",
      function () {
        let fullPath = this.value; // fetched value = C:\fakepath\fileName.extension
        let fileName = fullPath.split(/(\\|\/)/g).pop(); // fetch the file name
        document.getElementById("fileName").innerHTML = fileName; // display the file name
      },
      false
    );
  },

  methods: {
    clickIcon() {
      alert("Please dont click me again and again!");
    },
  },
};
</script>


