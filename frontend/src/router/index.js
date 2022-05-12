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
  {
    path: "/Contact",
    name: "contact",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Contact.vue"),
  },
  {
    path: "/AllORG",
    name: "All Organisateur",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Admin/AllOrg.vue"),
  },
  {
    path: "/Reservation",
    name: "Reservation",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Users/Reservation.vue"),
  },
  {
    path: "/Dashboard",
    name: "Dashboard",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Admin/Dashbord.vue"),
  },
];
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
