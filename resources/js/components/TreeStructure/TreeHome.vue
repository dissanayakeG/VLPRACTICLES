<template>
    <div class="content-wrapper">
        <TreeNode v-for="node in nodes" :key="node.id" :node="node"/>
        <TreeNodeGrouped v-for="(node, index) in node2[0]" :key="index" :node="node"/>
    </div>
</template>

<script>
    import TreeNode from './_treeNode.vue'
    import TreeNodeGrouped from './_treeNodeGrouped.vue'

    export default {
        name: 'TreeHome',
        components: {
            TreeNode,
            TreeNodeGrouped
        },
        data(){
            return{
                node2:[
                    {
                        "Account Manager": [
                            {
                                "func_id": 250,
                                "func_table_name": "Account Manager",
                                "func_name": "api.account.manager.view",
                                "function_type": "view",
                                "parent_id": 0,
                                "children": {
                                    "Accounts": [
                                        {
                                            "func_id": 252,
                                            "func_table_name": "Accounts",
                                            "func_name": "api.account.view",
                                            "function_type": "view",
                                            "parent_id": 250,
                                            "children": {
                                                "Registration": [
                                                    {
                                                        "func_id": 256,
                                                        "func_table_name": "Registration",
                                                        "func_name": "api.sub2.view",
                                                        "function_type": "view",
                                                        "parent_id": 252,
                                                        "children": {
                                                            "Registration2": [
                                                                {
                                                                    "func_id": 300,
                                                                    "func_table_name": "Registration",
                                                                    "func_name": "api.sub2.view",
                                                                    "function_type": "view",
                                                                    "parent_id": 256
                                                                },
                                                                {
                                                                    "func_id": 301,
                                                                    "func_table_name": "Registration",
                                                                    "func_name": "api.sub2.manage",
                                                                    "function_type": "manage",
                                                                    "parent_id": 256
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        "func_id": 257,
                                                        "func_table_name": "Registration",
                                                        "func_name": "api.sub2.manage",
                                                        "function_type": "manage",
                                                        "parent_id": 252
                                                    }
                                                ]
                                            }
                                        },
                                        {
                                            "func_id": 253,
                                            "func_table_name": "Accounts",
                                            "func_name": "api.account.manage",
                                            "function_type": "manage",
                                            "parent_id": 250
                                        }
                                    ],
                                    "Log in to an Account": [
                                        {
                                            "func_id": 254,
                                            "func_table_name": "Log in to an Account",
                                            "func_name": "api.account2.view",
                                            "function_type": "view",
                                            "parent_id": 250
                                        },
                                        {
                                            "func_id": 255,
                                            "func_table_name": "Log in to an Account",
                                            "func_name": "api.account2.manage",
                                            "function_type": "manage",
                                            "parent_id": 250
                                        }
                                    ]
                                }
                            },
                            {
                                "func_id": 251,
                                "func_table_name": "Account Manager",
                                "func_name": "api.account.manager.manage",
                                "function_type": "manage",
                                "parent_id": 0
                            }
                        ],
                        "New": [
                            {
                                "func_id": 258,
                                "func_table_name": "New",
                                "func_name": "api.sub2.view",
                                "function_type": "view",
                                "parent_id": 0,
                                "children": {
                                    "Registration3": [
                                        {
                                            "func_id": 302,
                                            "func_table_name": "Registration",
                                            "func_name": "api.sub2.view",
                                            "function_type": "view",
                                            "parent_id": 258
                                        },
                                        {
                                            "func_id": 303,
                                            "func_table_name": "Registration",
                                            "func_name": "api.sub2.manage",
                                            "function_type": "manage",
                                            "parent_id": 258
                                        }
                                    ]
                                }
                            },
                            {
                                "func_id": 259,
                                "func_table_name": "New",
                                "func_name": "api.sub2.manage",
                                "function_type": "manage",
                                "parent_id": 0
                            }
                        ]
                    }
                ]
            }
        },
        computed: {
            nodes() {
                return [
                    {
                        id: 1,
                        label: 'Foods',
                        children: [
                            {
                                id: 2,
                                label: 'Fruits',
                                children: [
                                    {
                                        id: 3,
                                        label: 'Banana',
                                        permissions:[
                                            {
                                                id:1,
                                                permission:'view'
                                            },
                                            {
                                                id:1,
                                                permission:'updt'
                                            }
                                        ]
                                    },
                                    {
                                        id: 4,
                                        label: 'Apple'
                                    },
                                    {
                                        id: 5,
                                        label: 'Strawberry'
                                    }
                                ]
                            },
                            {
                                id: 6,
                                label: 'Vegetables',
                                children: [
                                    {
                                        id: 7,
                                        label: 'Carrot'
                                    },
                                    {
                                        id: 8,
                                        label: 'Lettuce'
                                    },
                                    {
                                        id: 9,
                                        label: 'Potato'
                                    }
                                ]
                            }
                        ]
                    },

                    {
                        id: 10,
                        label: 'Drinks',
                        children: [
                            {
                                id: 11,
                                label: 'Beers',
                                children: [
                                    {
                                        id: 12,
                                        label: 'Budweiser'
                                    },
                                    {
                                        id: 13,
                                        label: 'Heineken'
                                    }
                                ]
                            },
                            {
                                id: 14,
                                label: 'Wines'
                            },
                            {
                                id: 15,
                                label: 'Whiskey'
                            }
                        ]
                    }
                ]
            }
        }
    }

</script>

