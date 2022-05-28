<template>
  <div class="irtifa3 flex-col overflow-y-scroll">
    <AllStade v-for="stad in stade" :key="stad"  :stade="stad" />
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
