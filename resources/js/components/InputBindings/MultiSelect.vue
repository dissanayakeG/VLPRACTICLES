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
            group-values="libs"
            group-label="language"
            :group-select="true"
            placeholder="Select Site(s)"
            label="name"
            track-by="name"
            ref="mySelect"
            @select="selected">>
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
                multiValue: [],
                source: [
                    {
                        language: 'Select All',
                        libs: [
                            {name: 'Vue.js', category: 'Front-end'},
                            {name: 'React', category: 'Front-end'},
                            {name: 'Angular', category: 'Backend'},
                            {name: 'Laravel', category: 'Backend'},
                            {name: 'Node', category: 'Backend'}
                        ]
                    }
                ]
            }
        },

        methods: {
            selected(selectedOption, id) {
                console.log(selectedOption, id);
                this.$refs.mySelect.deactivate();
            },
        }
    };
</script>

<style scoped>
</style>
