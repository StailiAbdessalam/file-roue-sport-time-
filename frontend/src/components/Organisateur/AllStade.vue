<template>
  <div class="irtifa3  overflow-y-scroll flex justify-center items-center flex-col">
    <AllStade v-for="stad in stade" :key="stad"  :stade="stad" />

    <div v-if="stade[0]==null" class="bg-gray-400 h-72 w-1/2 flex justify-center items-center rounded-lg">
      <h1 class="text-2xl text-white">tu es auccun stade d'abord </h1>
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
