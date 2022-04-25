<template>
  <div>
    <NavAdmin v-if="Role" />
    <!-- <Home/> -->
    <router-view />
    <NavBar />
    <Home />
    <Footer />
  </div>
</template>

<script>
import NavAdmin from './components/Admin/NavAdmin.vue';
import NavBar from './components/NavBar.vue';
import Home from './components/Home.vue';
import Footer from './components/Footer.vue';

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar, Home, Footer },
  data() {
    return {
      Role: false
    }
  }
}
</script>
