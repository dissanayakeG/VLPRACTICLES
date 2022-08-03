<template>
    <div class="content-wrapper">
        <div class="container">
            <div id="bar">
                <h1>Vue Email Editor (Demo)</h1>

                <button v-on:click="saveDesign">Save Design</button>
                <button v-on:click="exportHtml">Export HTML</button>
            </div>

            <!-- <EmailEditor ref="emailEditor" v-on:load="editorLoaded" /> -->
        </div>
    </div>
</template>

<script>
// import { EmailEditor } from "vue-email-editor";

export default {
    name: "EmailTemplates",

    components: {
        // EmailEditor,
    },
};
</script>

<style></style>
