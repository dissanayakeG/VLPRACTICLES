import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "./components/Dashboard.vue";
import FlexTest from "./components/FlexTest.vue";
import TabsTest from "./components/TabsTest.vue";
import InputStyling from "./components/InputStyling.vue";
import CustomTabs from "./components/CustomTabs/Tabs.vue";
import PropsTests from "./components/PropTests/Props.vue";
import ListRendering from './components/ListRendering.vue'
import InputBindingBashBoard from './components/InputBindings/InputBindingNavigator.vue'
import CheckBoxesSimple from "./components/InputBindings/CheckBoxesSimple.vue"
import CheckBoxesAdvance from "./components/InputBindings/CheckBoxesAdvance.vue"
import CheckBoxesComplex from "./components/InputBindings/CheckBoxesComplex.vue"
import CheckBoxesSimple2 from "./components/InputBindings/CheckBoxesSimple2.vue"
import DynamicRowRender from "./components/DynamicRowRender.vue"
import GroupedCheckBoxes from "./components/GroupedCheckBoxes/GroupedCheckBoxes.vue"
import TreeStructure from "./components/TreeStructure/TreeHome.vue"



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
            name: "CheckBoxesComplex",
            path: "/check-boxes-complex",
            component: CheckBoxesComplex
        },
        {
            name: "CheckBoxesSimple2",
            path: "/check-boxes-simple2",
            component: CheckBoxesSimple2
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
        }
    ],

    mode: "history"  
});
