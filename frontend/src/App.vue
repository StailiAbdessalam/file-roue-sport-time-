<template>
  <div>
    <NavAdmin v-if="Role" />
    <!-- <Home/> -->
    <NavBar />
    <profile/>
    <router-view />
    <Footer />

  </div>
</template>

<script>
import NavAdmin from './components/Admin/NavAdmin.vue';
import NavBar from './components/NavBar.vue';
import Footer from './components/Footer.vue';
import profile from './components/Admin/Profile'

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar, Footer, profile },
  data() {
    return {
      Role: false
    }
  }
}
</script>
