<template>
    <div class="content-wrapper">
        <router-link class="router-link" to="/input-binding-dashboard">
            {{ "Input Bindings" }}
        </router-link>
        <br/><br/>

        <multiselect
            v-model="multiValue"
            :options="source"
            :multiple="true"
            :close-on-select="true"
            placeholder="Pick some"
            label="name"
            track-by="name">
        </multiselect>
        <pre>{{multiValue}}</pre>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'

    export default {
        name: "MultiSelect",

        components: {Multiselect},
        data() {
            return {
                selected: null,
                multiValue: '',
                source: [
                    {id: 1, name: 'yo1'},
                    {id: 2, name: 'yo2'},
                    {id: 3, name: 'yo3'},
                    {id: 4, name: 'yo4'},
                    {id: 5, name: 'yo5'},
                    {id: 5, name: 'mad'}
                ]
            }
        }
    };
</script>

<style scoped>
</style>
