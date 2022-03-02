<template>
    <div class="content-wrapper" style="padding: 100px">
        <div class="tree-data">
            <TreeNode2 v-for="(node, index) in groupedData" :key="index" :node="node"
                       @emit="getSelectedFunctionIds"/>
            <!--        <TreeNode v-for="node in nodes" :key="node.id" :node="node"/>-->
            <!--        <TreeNodeGrouped v-for="(node, index) in groupedData[0]" :key="index" :node="node"/>-->
        </div>
    </div>
</template>

<script>
    import TreeNode from './_treeNode.vue'
    import TreeNodeGrouped from './_treeNodeGrouped.vue'
    import TreeNode2 from './_adminFunctionCheckbox.vue';

    export default {
        name: 'TreeHome',
        components: {
            TreeNode,
            TreeNodeGrouped,
            TreeNode2
        },
        data() {
            return {
                node2: [
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
                ],

                groupedData: [],

                allViewCheckBoxes: [],
                allManageCheckBoxes: [],
                isCheckAllView: false,
                isCheckAllManage: false,
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
                                        permissions: [
                                            {
                                                id: 1,
                                                permission: 'view'
                                            },
                                            {
                                                id: 1,
                                                permission: 'updt'
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
        },

        mounted() {
            let self = this;
            this.getTreeStructureData();
            this.handleCheckAll();
            this.manageMainCheckBoxesOnInitialLoad();

            //
            self.function_ids = [];
            $.each($(".tree-data input[type='checkbox']:checked"), function () {
                self.function_ids.push($(this).val());
            });
        },

        methods: {
            getTreeStructureData() {
                axios.get('api/get-tree-structure-data').then(response => {
                    this.groupedData = response.data.data;
                    console.log('hhhhh', this.groupedData);

                });
            },

            handleCheckAll() {
                let self = this;
                $('.AllCheck input:checkbox').click(function (event) {
                    if ($(this).attr('function_type') == 'view') {
                        let viewCheckBoxes = $("input[func_type='view']");
                        self.handleCheckAllUnderMainCheckBox(viewCheckBoxes);
                    } else if ($(this).attr('function_type') == 'manage') {
                        let allCheckBoxes = $("input[type='checkbox']");
                        self.handleCheckAllUnderMainCheckBox(allCheckBoxes);
                    }
                });
            },

            handleCheckAllUnderMainCheckBox(allCheckBoxes) {
                let self = this;
                Object.entries(allCheckBoxes).map(([key, value]) => {
                    if (event.target.checked == true && typeof value != 'number') {
                        value.checked = true;

                    } else if (event.target.checked == false && typeof value != 'number') {
                        value.checked = false;
                    }
                })
                self.setColorsToCheckBoxes();
            },

            getSelectedFunctionIds() {
                let self = this;
                let checkedViewCheckBoxes = [];
                let checkedManageCheckBoxes = [];
                $('.tree-data input:checkbox:checked').each(function (key, val) {
                    let function_type = $(val).attr('func_type');
                    if (function_type == 'view') {
                        checkedViewCheckBoxes.push($(val).attr('id'))
                    } else if (function_type == 'manage') {
                        checkedManageCheckBoxes.push($(val).attr('id'))
                    }
                });
                self.checkIsAllChecked(checkedViewCheckBoxes, checkedManageCheckBoxes);
                self.setColorsToCheckBoxes();
            },

            manageMainCheckBoxesOnInitialLoad() {
                let self = this;
                let checkedViewCheckBoxes = [];
                let checkedManageCheckBoxes = [];
                let selectedScopeElement = document.getElementsByClassName('tree-data')[0].querySelectorAll('input[type="checkbox"]');
                selectedScopeElement.forEach((val, key) => {
                    let function_type = $(val).attr('func_type');
                    let is_active = $(val).attr('is_active');
                    if (function_type == 'view') {
                        if (is_active == 'yes') {
                            checkedViewCheckBoxes.push($(val).attr('id'))
                        }
                        self.allViewCheckBoxes.push($(val).attr('id'))
                    } else if (function_type == 'manage') {
                        if (is_active == 'yes') {
                            checkedManageCheckBoxes.push($(val).attr('id'))
                        }
                        self.allManageCheckBoxes.push($(val).attr('id'))
                    }
                })
                self.checkIsAllChecked(checkedViewCheckBoxes, checkedManageCheckBoxes);
                self.setColorsToCheckBoxes();
            },

            checkIsAllChecked(checkedViewCheckBoxes, checkedManageCheckBoxes) {
                let self = this;
                // console.log('viewDiff',self.allViewCheckBoxes.length - checkedViewCheckBoxes.length);
                // console.log('manageDiff',self.allManageCheckBoxes.length - checkedManageCheckBoxes.length);
                if (self.allViewCheckBoxes.length - checkedViewCheckBoxes.length == 0) {
                    self.isCheckAllView = true
                } else {
                    self.isCheckAllView = false
                }
                if (self.allManageCheckBoxes.length - checkedManageCheckBoxes.length == 0) {
                    self.isCheckAllManage = true
                } else {
                    self.isCheckAllManage = false
                }
            },

            setColorsToCheckBoxes() {
                let allCheckedCheckBoxes = [];
                let allUnCheckedCheckBoxes = [];
                $('.tree-data input:checked').each(function (index, item) {
                    allCheckedCheckBoxes.push(item);
                });

                $('.tree-data input:not(:checked)').each(function (index, item) {
                    allUnCheckedCheckBoxes.push(item);
                });

                allCheckedCheckBoxes.forEach((val, key) => {
                    //check parent div has span with fas class
                    let closestWrapperDiv = $(val).closest('div.append-class-by-type')[0].querySelectorAll('b-icon[class^="fas"]');
                    //if has add blue class to all labels
                    //if not add green class to all labels
                    if (closestWrapperDiv.length > 0) {
                        $(val).parent('label').addClass('m-checkbox m-checkbox--solid m-checkbox--state-brand');
                    } else {
                        $(val).parent('label').addClass('m-checkbox m-checkbox--solid m-checkbox--state-success');
                    }
                });

                //remove colors from unchecked checkboxes
                allUnCheckedCheckBoxes.forEach((val, key) => {
                    $(val).parent('label').addClass('m-checkbox m-checkbox--solid');
                    $(val).parent('label').removeClass('m-checkbox--state-brand');
                    $(val).parent('label').removeClass('m-checkbox--state-success');
                });
            },
        }
    }

</script>

<style scoped>
    .m-checkbox--state-brand{
        background-color: #3f9ae5 !important;
    }

    .m-checkbox--state-success{
        color: #5cde0c !important;
    }

    .m-checkbox .m-checkbox--solid{
        color: #fffffe !important;
    }
</style>

