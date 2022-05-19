<template>
  <div>
    <NavAdmin v-if="Role == 'Admin'" />
    <!-- <Home/> -->
    <NavBar />
    <NavUser v-if="Role == 'Client'" />
    <NavOrganisateur v-if="Role == 'organisateur'" />
    <router-view />
    <Footer v-if='Role!="Admin"' />

  </div>
</template>

<script>
import NavOrganisateur from './components/Organisateur/NavOrganisateur.vue';
import NavAdmin from './components/Admin/NavAdmin.vue';
import NavUser from './components/Users/NavUser.vue';
import NavBar from './components/NavBar.vue';
import Footer from './components/Footer.vue';
import {computed} from "vue";

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar, Footer, NavUser, NavOrganisateur },
  provide(){
    return {
      setRole: this.setRole,
      Role: computed(() => {
        return this.Role
      })
    }
  },
  data() {
    return {
      Role: localStorage.getItem('user'), 
    }
  },
  methods: {
    setRole(role) {
      this.Role = role;
    },
  },
}
</script>
