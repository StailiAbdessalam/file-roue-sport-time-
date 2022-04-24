

import { createRouter,createWebHistory } from "vue-router";

const routes = [
    {
        path: "/home",
        name: "Home",
        component: () => import(/* webpackChunkName: "home" */ "../Pages/Home.vue"),
    },
]




const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
  });

export default router;