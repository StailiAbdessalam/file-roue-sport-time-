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
    path: "/Stade/:id",
    name: "Stade",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Users/Stade.vue"),
  },
  {
    path: "/Dashboard",
    name: "Dashboard",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Admin/Dashbord.vue"),
  },
  {
    path: "/local",
    name: "local",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Users/local.vue"),
  },
  {
    path: "/Profil",
    name: "Profil",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Organisateur/Profil.vue"),
  },
  {
    path: "/Validation",
    name: "Validation",
    component: () =>
      import(
        /* webpackChunkName: "home" */ "../Pages/Organisateur/Validation.vue"
      ),
  },
  {
    path: "/AddStade",
    name: "Add Stade",
    component: () =>
      import(
        /* webpackChunkName: "home" */ "../Pages/Organisateur/AddStade.vue"
      ),
  },
  {
    path: "/Archieve",
    name: "Archieve",
    component: () =>
      import(/* webpackChunkName: "home" */ "../Pages/Admin/Archieve.vue"),
  },
  {
    path: "/AllStade",
    name: "AllStade",
    component: () =>
      import(
        /* webpackChunkName: "home" */ "../Pages/Organisateur/AllStade.vue"
      ),
  },
];
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

router.beforeEach((to, from, next) => {
  if (to.name == "SingUp" || to.name == "Singin" || to.name == "Home") {
    next();
  } else {
    if (localStorage.getItem("id")) {
      next();
    } else {
      next("/");
    }
  }
});

export default router;
