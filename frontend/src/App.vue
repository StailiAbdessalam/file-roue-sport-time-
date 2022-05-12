<template>
  <div>
    <NavAdmin v-if="Role == 'Admin'" />
    <!-- <Home/> -->
    <NavBar />
    <NavUser v-if="Role == 'Client'" />
    <NavOrganisateur v-if="Role == 'organisateur'" />
    <profile />
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
import profile from './components/Admin/Profile'

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar, Footer, profile, NavUser, NavOrganisateur },
  data() {
    return {
      Role: localStorage.getItem('user'),
    }
  }
}
</script>
