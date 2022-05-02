import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    name: "Home",
    component: () => import(/* webpackChunkName: "home" */ "../Pages/Home.vue"),
  },
  {
    path: "/Login",
    name: "Singin",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Login.vue"),
  },
  {
    path: "/SingUp",
    name: "SingUp",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/SingUp.vue"),
  },
];
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
