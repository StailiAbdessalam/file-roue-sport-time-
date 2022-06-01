<template>
  <div class="">
    <div
      class="p-0 m-0 flex justify-between items-center h-16 md:px-20 sm:px-6 mt-4"
    >
      <img
        @click="naviger('/')"
        class="w-36 cursor-pointer"
        :class="{
          'ml-auto': log,
        }"
        src="../assets/img/LOGO.png"
        alt=""
      />
      <div v-if="!log" class="h-full flex items-center justify-between w-40">
        <button
          @click="naviger('/Login')"
          class="bg-white flex items-center h-2/3 px-4"
        >
          Login
        </button>
        <button
          @click="naviger('/SingUp')"
          class="bg-green-500 rounded-md text-lg w-3/6 h-2/3 text-white"
        >
          Sing up
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "nav-user",
  data() {
    return {
      log: localStorage.getItem("user") ? true : false,
    };
  },
  methods: {
    naviger(choi) {
      this.$router.push(choi);
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
