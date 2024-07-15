import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);
import firstPage from "./components.vue/pages/myFirstVuePage.vue";
import newRoutePage from "./components.vue/pages/newRoutePage.vue";

const routes = [
    {
        path: "/my-new-view-route",
        component: firstPage,
    },
    {
        path: "/my-new-route",
        component: newRoutePage,
    },
];

export default new Router({
    mode: "history",
    routes,
});
