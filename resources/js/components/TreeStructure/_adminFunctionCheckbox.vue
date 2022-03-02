<template>
    <div :style="nodeMargin" :class="'checkboxes-wrapper '+replaceDotByUnderscore(node[0].func_name)">
        <div show class="d-flex justify-content-between mb-5">

            <div class="d-flex justify-content-end append-class-by-type w-100">
                <div class="">
                    {{ node[0].func_table_name }}
                </div>

                <ul class="mr-3 d-flex justify-content-end ml-auto" style="list-style-type: none;">
                    <li class="mr-3" v-for="(sub, i) in node" :key="i">
                        <label>
                            <input type="checkbox"
                                   @change="check()"
                                   :func_id="sub.func_id"
                                   :id="sub.func_id"
                                   :name="replaceDotByUnderscore(sub.func_name)"
                                   :value="sub.func_id"
                                   :func_type="sub.function_type"
                                   :parent_id="sub.parent_id"
                                   :parent_class="sub.parent_class"
                                   :has_children="sub.children ? 'yes' : 'no'"
                                   :checked="sub.is_active==0"
                                   :is_active="sub.is_active==0 ? 'yes' : 'no'"
                            >
                            <span></span>
                        </label>
                    </li>
                </ul>

                <div class="toggle-class">
                    <b-icon
                        icon="check-square"
                        v-if="hasChildren"
                        :class="toggleChildrenIcon"
                        @click="toggleChildren"
                        @keypress="toggleChildren"
                    ></b-icon>
                </div>
            </div>
        </div>

        <div v-if="hasChildren" v-show="showChildren">
            <TreeNode
                v-for="child in node[0].children"
                :key="child.func_id"
                :node="child"
                v-model="status"
                :spacing="spacing + 10"
                @emit="getSelectedFunctionIds"
            />
        </div>
    </div>
</template>

<script>
    export default {
        name: "TreeNode",
        props: {
            node: {
                type: [Object, Array],
                required: true,
            },
            spacing: {
                type: Number,
                default: 0,
            },
        },

        data() {
            return {
                showChildren: true,
                status: [],
            };
        },
        mounted() {
            this.handleCheck();
        },

        computed: {
            nodeMargin() {
                return {
                    "margin-left": `${this.spacing}px`,
                };
            },
            hasChildren() {
                const {children} = this.node[0];
                return children;
            },
            toggleChildrenIcon() {
                return this.showChildren ? "fas fa-angle-down" : "fas fa-angle-right";
            },
        },
        methods: {
            toggleChildren() {
                this.showChildren = !this.showChildren;
            },

            check() {
                this.$emit('emit');
            },

            getSelectedFunctionIds() {
                this.$emit('emit');
            },

            replaceDotByUnderscore(name) {
                let removeFunctionTypeFromName = name.split(".").filter(e => e !== 'view' && e !== 'manage');
                return removeFunctionTypeFromName.toString().replaceAll(',', '_');
            },

            handleCheck() {
                let self = this;
                $('.tree-data input:checkbox').click(function (event) {
                    let selectedCheckBoxParentId = $(this).attr("parent_id");
                    let hasChildren = $(this).attr("has_children");
                    let func_type = $(this).attr("func_type");
                    let func_name = $(this).attr("name");
                    let parentId = $("#" + selectedCheckBoxParentId).attr("id");
                    let closestWrapperDiv = $("#" + parentId).closest('div.checkboxes-wrapper').find("input");
                    let selectedScopeElement = document.getElementsByClassName('checkboxes-wrapper ' + func_name)[0].querySelectorAll('input[type="checkbox"]');

                    self.selectAll(selectedScopeElement, func_type);
                    self.selectCollapsibleMenuIfAllCheckBoxesChecked(selectedCheckBoxParentId, func_type, parentId, closestWrapperDiv);
                    event.stopPropagation();
                });
            },

            selectAll(elements, func_type) {
                if (func_type == 'view') {
                    for (let i = 0, len = elements.length; i < len; i++) {
                        let elementFunctionType = $(elements[i]).attr("func_type");
                        if (event.target.checked == true && elementFunctionType == 'view') {
                            elements[i].checked = true;
                        } else if (event.target.checked == false && elementFunctionType == 'view') {
                            elements [i].checked = false;
                        }
                    }
                } else {
                    for (let i = 0, len = elements.length; i < len; i++) {
                        let elementFunctionType = $(elements[i]).attr("func_type");
                        if (event.target.checked == true) {
                            elements[i].checked = true;
                        } else if (event.target.checked == false) {
                            elements [i].checked = false;
                        }
                    }
                }
            },

            selectCollapsibleMenuIfAllCheckBoxesChecked(selectedCheckBoxParentId, func_type, parentId, closestWrapperDiv) {
                //if function has child, it's parent id always is function_type view's function_id
                let parentMangeCheckBoxId = parseInt(selectedCheckBoxParentId) + 1;
                parentMangeCheckBoxId = parentMangeCheckBoxId.toString();

                let uncheckedViewCheckBoxIds = [];
                let uncheckedManageCheckBoxIds = [];
                if (closestWrapperDiv.length > 0) {
                    Object.entries(closestWrapperDiv).map(([key, value]) => {
                        if (value.checked == false && ($(value).attr("func_type") == func_type) && ($(value).attr("func_id") != selectedCheckBoxParentId) && func_type == 'view') {
                            uncheckedViewCheckBoxIds.push(value)
                        } else if (value.checked == false && ($(value).attr("func_type") == func_type) && ($(value).attr("func_id") != parentMangeCheckBoxId) && func_type == 'manage') {
                            uncheckedManageCheckBoxIds.push(value)
                        }
                    })
                    // console.log('uncheckedViewCheckBoxIds:', uncheckedViewCheckBoxIds);
                    // console.log('uncheckedManageCheckBoxIds:', uncheckedManageCheckBoxIds);

                    if (uncheckedViewCheckBoxIds.length == 0 && func_type == 'view') {
                        document.getElementById(selectedCheckBoxParentId).checked = true;
                    } else if (uncheckedViewCheckBoxIds.length > 0 && func_type == 'view') {
                        document.getElementById(selectedCheckBoxParentId).checked = false;
                    }

                    if (uncheckedManageCheckBoxIds.length == 0) {
                        document.getElementById(parentMangeCheckBoxId).checked = true;
                    } else if (uncheckedManageCheckBoxIds.length > 0) {
                        document.getElementById(parentMangeCheckBoxId).checked = false;
                        document.getElementById(selectedCheckBoxParentId).checked = false;
                    }
                }
            }
        }
    };
</script>

