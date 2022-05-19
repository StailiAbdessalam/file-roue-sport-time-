<template>
  <div class="flex flex-wrap mt-24" data-aos="fade-up">
    <div v-for="local in locals" :key="local" class="max-w-lg mx-auto">
      <div
        class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5 w-96"
      >
        <a href="#">
          <img
            class="rounded-t-lg h-64 w-full object-cover"
            :src="`https://firebasestorage.googleapis.com/v0/b/sport-time-763e8.appspot.com/o/Profil%2F${local.Photo}.png?alt=media&token=e6d58393-e912-48f7-801d-06e9fa624757`"
            alt=""
          />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
              {{local.Ville}}
            </h5>
            <h3>{{local.Address}}</h3>
          </a>
          <p class="font-normal text-gray-700 mb-3">
           {{local.About}}
          </p>
          <a
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
            href="#"
          >
            Read more
          </a>
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
        .get("http://localhost/FILEROUGE/Organisateur/selectAllLocal")
        .then((res) => {
          this.locals = res.data;
          console.log(this.locals);
        });
    },
  },
  mounted() {
    this.getAllLocal();
  },
};
</script>

<style lang="scss" scoped></style>
