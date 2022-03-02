import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "./components/Dashboard.vue";
import FlexTest from "./components/UI/FlexTest.vue";
import TabsTest from "./components/UI/TabsTest.vue";
import InputStyling from "./components/UI/InputStyling.vue";
import CustomTabs from "./components/UI/CustomTabs/Tabs.vue";
import PropsTests from "./components/Props/Props.vue";
import ListRendering from './components/InputBindings/ListRendering.vue'
import InputBindingBashBoard from './components/InputBindings/InputBindingNavigator.vue'
import CheckBoxesSimple from "./components/InputBindings/CheckBoxesSimple.vue"
import CheckBoxesAdvance from "./components/InputBindings/CheckBoxesAdvance.vue"
import DynamicRowRender from "./components/DynamicRows/DynamicRowRender.vue"
import GroupedCheckBoxes from "./components/InputBindings/GroupedCheckBoxes.vue"
import TreeStructure from "./components/TreeStructure/TreeHome.vue"
import UiNavigator from "./components/UI/UiNavigator";
import MultiSelect from "./components/InputBindings/MultiSelect";



Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            name: "Dashboard",
            path: "/",
            component: Dashboard
        },
        {
            name: "Dashboard",
            path: "/dashboard",
            component: Dashboard
        },
        {
            name: "FlexTest",
            path: "/flex-test",
            component: FlexTest
        },
        {
            name: "TabsTest",
            path: "/tabs-test",
            component: TabsTest
        },
        {
            name: "InputStyling",
            path: "/input-styling",
            component: InputStyling
        },
        {
            name: "CustomTabs",
            path: "/custom-tabs",
            component: CustomTabs
        },
        {
            name: "PropsTests",
            path: "/props-tests",
            component: PropsTests
        },
        {
            name: "ListRendering",
            path: "/list-rendering",
            component: ListRendering
        },

        {
            name: "InputBindingBashBoard",
            path: "/input-binding-dashboard",
            component: InputBindingBashBoard
        },
        {
            name: "CheckBoxesSimple",
            path: "/check-boxes-simple",
            component: CheckBoxesSimple
        },
        {
            name: "CheckBoxesAdvance",
            path: "/check-boxes-advance",
            component: CheckBoxesAdvance
        },
        {
            name: "DynamicRowRender",
            path: "/dynamic-row-render",
            component: DynamicRowRender
        },
        {
            name: "GroupedCheckBoxes",
            path: "/grouped-check-boxes",
            component: GroupedCheckBoxes
        },
        {
            name: "TreeStructure",
            path: "/tree-structure",
            component: TreeStructure
        },
        {
            name: "UiNavigator",
            path: "/ui-navigator",
            component: UiNavigator
        },
        {
            name: "MultiSelect",
            path: "/vue-multi-select",
            component: MultiSelect
        }
    ],

    mode: "history"
});
