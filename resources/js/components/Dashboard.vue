<template>
    <div class="content-wrapper">
        <router-link class="router-link" to="/ui-navigator">{{ "UI" }}</router-link>
        <router-link class="router-link" to="/input-styling">{{ "Input Styling" }}</router-link>
        <router-link class="router-link" to="/props-tests">{{ "Props" }}</router-link>
        <router-link class="router-link" to="/input-binding-dashboard">{{ "Input Bindings" }}</router-link>
        <router-link class="router-link" to="/dynamic-row-render">{{ "Dynamic Row Render" }}</router-link>
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
