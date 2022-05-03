<template>
  <div>
    <NavAdmin v-if="Role=='Admin'" />
    <!-- <Home/> -->
    <NavBar   />
    <NavUser v-if="Role=='Clients'" />
    <profile/>
    <router-view />
    <Footer />

  </div>
</template>

<script>
import NavAdmin from './components/Admin/NavAdmin.vue';
import NavUser from './components/Users/NavUser.vue';
import NavBar from './components/NavBar.vue';
import Footer from './components/Footer.vue';
import profile from './components/Admin/Profile'

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar, Footer, profile,NavUser },
  data() {
    return {
      Role: localStorage.getItem('user') ,
    }
  }
}
</script>
