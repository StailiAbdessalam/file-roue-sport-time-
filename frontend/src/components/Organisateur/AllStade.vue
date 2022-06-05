<template>
  <div class="irtifa3  overflow-y-scroll flex justify-center items-center flex-col">
    <AllStade v-for="stad in stade" :key="stad"  :stade="stad" />

   

<div v-if="stade[0]==null" class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md my-2" role="alert">
  <div class="flex">
    <svg class="h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
    <div>
      <p class="font-bold">All Stadieum</p>
      <p class="text-sm">d'abord tu n'es pas un stadieum</p>
    </div>
  </div>
</div>

  </div>
</template>

<script>
import store from "@/store";
import axios from "axios";
import AllStade from "./AllReservationComponent/AllStadieum.vue";
export default {
  name: "All-Stade",
  data() {
    return {
      stade: [],
    };
  },
  components: {
    AllStade,
  },
  methods: {
    getOrganisateur() {
      this.$store.dispatch("getOrganisateur");
    },
    getAllStade() {
      axios
        .post(`${this.$apiUrl}/Stade/getAllStadebyId`, {
          id: this.user.id,
        })
        .then((res) => {
          this.stade = res.data;
        });
    },
  },
  computed: {
    user: () => {
      return store.getters.User;
    },
  },
  mounted() {
    this.getAllStade();
    this.getOrganisateur();
  },
};
</script>

<style lang="scss" scoped>
.irtifa3{
  height: 78vh;
}
</style>
