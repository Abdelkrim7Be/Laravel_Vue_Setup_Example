import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);
import firstPage from "./components.vue/pages/myFirstVuePage.vue";

const routes = [
    {
        path: "/my-new-view-route",
        component: firstPage,
    },
];
