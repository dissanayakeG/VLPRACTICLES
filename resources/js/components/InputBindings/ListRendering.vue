<template>
    <div class="content-wrapper">
        <router-link class="router-link" to="/input-binding-dashboard">
            {{ "Input Bindings" }}
        </router-link>
        <br/><br/>

        {{ checks }}
        <div class="header-name" v-for="(item, index) in items" :key="index">
            <span class="header-text">{{ index }}</span>
            <div class="user" v-for="(object, index) in item" :key="index">
                <input type="checkbox" v-model="checks" :value="object.practice.id"/>
                <div class="img"></div>
                <p>{{ object.practice.name }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ListRendering",

        components: {},

        data() {
            return {
                checks: [],
                items: {
                    GP1: [
                        {
                            id: 3,
                            user_id: 1,
                            practice_id: 3,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 1,
                                name: "Gerlach-Kuhic",
                            },
                        },
                        {
                            id: 4,
                            user_id: 1,
                            practice_id: 4,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 2,
                                name: "O'Reilly, Hyatt and White",
                            },
                        },
                        {
                            id: 5,
                            user_id: 1,
                            practice_id: 5,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 3,
                                name: "Breitenberg-Bailey",
                            },
                        },
                    ],
                    GP2: [
                        {
                            id: 3,
                            user_id: 1,
                            practice_id: 3,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 4,
                                name: "Gerlach-Kuhic",
                            },
                        },
                        {
                            id: 4,
                            user_id: 1,
                            practice_id: 4,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 5,
                                name: "O'Reilly, Hyatt and White",
                            },
                        },
                        {
                            id: 5,
                            user_id: 1,
                            practice_id: 5,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 6,
                                name: "Breitenberg-Bailey",
                            },
                        },
                    ],

                    GP3: [
                        {
                            id: 3,
                            user_id: 1,
                            practice_id: 3,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 7,
                                name: "Gerlach-Kuhic",
                            },
                        },
                        {
                            id: 4,
                            user_id: 1,
                            practice_id: 4,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 8,
                                name: "O'Reilly, Hyatt and White",
                            },
                        },
                        {
                            id: 5,
                            user_id: 1,
                            practice_id: 5,
                            job_role_id: 1,
                            is_locum: 0,
                            created_at: null,
                            updated_at: null,
                            user: {
                                id: 1,
                                first_name: "Hyre",
                                last_name: "User",
                                email: "admin@hyre.com",
                                phone_number: null,
                                photo_url: false,
                                profile: null,
                            },
                            job_role: {
                                id: 1,
                                name: "GP",
                            },
                            practice: {
                                id: 9,
                                name: "Breitenberg-Bailey",
                            },
                        },
                    ],
                },
            };
        },
    };
</script>

<style scoped>
    .abc {
        border: 1px solid gray;
    }

    .header-name {
        color: cornflowerblue;
    }

    .header-text {
        color: cornflowerblue;
        background-color: cyan;
        height: 50px;
        width: 100%;
        display: block;
    }

    .user {
        display: flex;
        color: crimson;
        align-items: center;
        /* justify-content: center; */
        border-bottom: 1px solid gray;
    }

    .img {
        width: 30px;
        height: 30px;
        margin-left: 5px;
        margin-right: 5px;
        border: 1px solid blue;
    }
</style>
