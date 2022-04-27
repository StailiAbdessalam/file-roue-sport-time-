<template>
  <div>
    <NavAdmin v-if="Role" />
    <!-- <Home/> -->
    <NavBar />
    <router-view />
    <Footer />
  </div>
</template>

<script>
import NavAdmin from './components/Admin/NavAdmin.vue';
import NavBar from './components/NavBar.vue';
import Footer from './components/Footer.vue';

export default {
  name: 'component-vue',
  components: { NavAdmin, NavBar,  Footer },
  data() {
    return {
      Role: false
    }
  }
}
</script>
