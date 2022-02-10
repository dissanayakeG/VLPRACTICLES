<template>
    <div class="content-wrapper">
        <router-link class="router-link" to="/flex-test">{{ "Flex Test" }}</router-link>
        <router-link class="router-link" to="/tabs-test">{{ "Tabs Test" }}</router-link>
        <router-link class="router-link" to="/input-styling">{{ "Input Styling" }}</router-link>
        <router-link class="router-link" to="/custom-tabs">{{ "Custom Tabs" }}</router-link>
        <router-link class="router-link" to="/props-tests">{{ "Props test" }}</router-link>
        <router-link class="router-link" to="/list-rendering">{{ "List Rendering" }}</router-link>
        <router-link class="router-link" to="/input-binding-dashboard">{{ "Input Bindings" }}</router-link>
        <router-link class="router-link" to="/dynamic-row-render">{{ "Dynamic Row Render" }}</router-link>
        <router-link class="router-link" to="/grouped-check-boxes">{{ "Grouped CheckBoxes" }}</router-link>
        <router-link class="router-link" to="/tree-structure">{{ "Tree Structure" }}</router-link>
        <button @click.prevent="callJob">call job</button>
    </div>
</template>

<script>
export default {
    name: "Dashboard",

    methods: {
        callJob() {
            axios.post('api/test-jobs').then(res => {
                console.log(res)
            });
        }
    }
};
</script>

<style scoped>
</style>
