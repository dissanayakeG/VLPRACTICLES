<template>
    <div class="content-wrapper">
        <router-link class="router-link" to="/input-binding-dashboard">
            {{ "Input Bindings" }}
        </router-link>
        <br /><br />
    </div>
</template>

<script>
export default {
    name: "MultiSelect",

    components: { Multiselect },

    data() {
        return {
            source: [
                { id: 1, name: "a" },
                { id: 2, name: "b" },
                { id: 3, name: "c" },
                { id: 4, name: "d" },
                { id: 5, name: "e" },
            ],
        };
    },

    methods: {},
};
</script>

<style scoped></style>
