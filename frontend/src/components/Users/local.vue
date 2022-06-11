<template>
  <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 mt-24" data-aos="fade-up">
    <div v-for="local in locals" :key="local" class="mx-2 h-fit">
      <div
        class="bg-white shadow-md border border-gray-200 rounded-lg  mb-5 w-full"
      >
        <a href="#">
          <img
            class="rounded-t-lg h-64 w-full object-cover"
            :src="`https://res.cloudinary.com/dqeb5aris/image/upload/v1654943245/${local.Photo}.jpg`"
            alt=""
            loading="lazy"
          />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
              {{ local.Ville }}
            </h5>
            <h3>{{ local.Address }}</h3>
          </a>
          <p class="font-normal text-gray-500 mb-3 truncate h-10">
            {{ local.About }}
          </p>
          <router-link class="text-white hover:cursor-pointer bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" :to="{ name: 'Stade', params: { id: local.id }}">read more</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Local-e",
  data() {
    return {
      locals: "",
    };
  },
  methods: {
    getAllLocal() {
      axios
        .get(`${this.$apiUrl}/Organisateur/selectOrg`)
        .then((res) => {
          this.locals = res.data;
          // console.log(this.locals);
        });
    },
    // Profil(data) {
    //   // this.$router.push(`/Stade`,{
    //     params: {
    //       id: data.id,
    //     },
    //   });
    // },
  },
  mounted() {
    this.getAllLocal();
  },
};
</script>

<style lang="scss" scoped></style>
