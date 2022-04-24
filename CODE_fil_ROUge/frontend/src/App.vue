<template>
  <div>
      <NavAdmin/>
      <!-- <Home/> -->
      <router-view />
  </div>
</template>

<script>
  import NavAdmin from './components/NavAdmin.vue';
  // import Home from './Pages/Home.vue';
  
  export default {
    name: 'component-vue',
    components: { NavAdmin },
    data() {
      return {}
    }
  }
</script>
