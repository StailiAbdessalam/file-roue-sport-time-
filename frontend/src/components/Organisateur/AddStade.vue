<template>
  <div class="flex h-screen bg-white items-center justify-center mt-32 mb-32">
    <white v-if="load" />
    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
      <div class="flex justify-center py-4">
        <!-- <div class="flex bg-orange-200 rounded-full md:p-4 p-2 border-2 border-orange-300">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
      </div> -->
      </div>
      <div
        data-aos="fade-down"
        v-if="added"
        class="flex bg-green-300 rounded-lg p-4 mb-4 text-sm text-green-700 absolute top-32 left-2/5 w-1/2"
        role="alert"
      >
        <svg
          class="w-5 h-5 inline mr-3"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"
          ></path>
        </svg>
        <div>
          <span class="font-medium">Success alert!</span> Change a few things up
          and try submitting again.
        </div>
      </div>

      <div class="flex justify-center">
        <div class="flex">
          <h1 class="text-gray-600 font-bold md:text-2xl text-xl">
            Add Your Stade
          </h1>
        </div>
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <label
          class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
          >Title</label
        >
        <input
          v-model="Stade.Title"
          class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent"
          type="text"
          placeholder="Title"
        />
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
        <div class="grid grid-cols-1">
          <label
            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
            >Description</label
          >
          <input
            v-model="Stade.Description"
            class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent"
            type="text"
            placeholder="Description"
          />
        </div>
        <div class="grid grid-cols-1">
          <label
            class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
            >Number Personne</label
          >
          <input
            v-model="Stade.num_personne"
            class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent"
            type="number"
            placeholder="Number Personne"
          />
        </div>
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <label
          class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
          >Stade de ..</label
        >
        <select
          v-model="Stade.Type"
          class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent"
        >
          <option>Football</option>
          <option>basketball</option>
          <option>auther</option>
        </select>
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <label
          class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"
          >Prix (DH)</label
        >
        <input
          v-model="Stade.priceH"
          class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-transparent"
          type="number"
          placeholder="Prix"
        />
      </div>

      <div class="grid grid-cols-1 mt-5 mx-7">
        <label
          class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1"
          >Upload Photo</label
        >
        <div class="flex items-center justify-center w-full">
          <label
            class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-orange-300 group"
          >
            <div class="flex flex-col items-center justify-center pt-7">
              <svg
                class="w-10 h-10 text-orange-400 group-hover:text-orange-600"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                ></path>
              </svg>
              <p
                class="lowercase text-sm text-gray-400 group-hover:text-orange-600 pt-1 tracking-wider"
              >
                Select a photo
              </p>
            </div>
            <input type="file" @change="changeImage" class="hidden" />
          </label>
        </div>
      </div>

      <div class="flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5">
        <div>
          <div @click="stadeAllRegarder" class="flex rounded border-b-2 border-grey-300 overflow-hidden">
            <button
              class="block text-white text-sm shadow-border bg-orange-500 hover:bg-orange-700 text-sm py-3 px-4 font-sans tracking-wide uppercase font-bold"
            >
              schedule a demo
            </button>
            <div class="bg-orange-300 shadow-border p-3">
              <div class="w-4 h-4">
                <svg
                  class="fill-current text-white"
                  viewBox="0 0 1792 1792"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1024 544v448q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h224v-352q0-14 9-23t23-9h64q14 0 23 9t9 23zm416 352q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="flex rounded border-b-2 border-grey-300 overflow-hidden" @click="ADDStade">
            <button
              class="block text-white text-sm shadow-border bg-green-500 hover:bg-green-700 text-sm py-3 px-4 font-sans tracking-wide uppercase font-bold"
            >
              Ajouter
            </button>
             
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import white from "../../components/chose/whit.vue";
import store from "../../store/index";
import axios from "axios";
import * as fireStorage from "firebase/storage";
export default {
  name: "Add-Stade",
  data() {
    return {
      added: false,
      load: false,
      Stade: {
        idLocal: "",
        Title: "",
        Description: "",
        num_personne: "",
        priceH: "",
        Type: "",
      },
      images: "",
    };
  },
  mounted() {
    this.localid();
  },
  methods: {
    stadeAllRegarder(){
      this.$router.push("/AllStade");
    },
    changeImage(e) {
      this.images = e.target.files[0];
      console.log(this.images);
    },
    async ADDStade() {
      this.load = true;
      try {
        let file = this.images;
        let newname =
          Math.random().toString(36).slice(2) +
          new Date().getTime().toString(36);
        let storageRef = fireStorage.ref(
          fireStorage.getStorage(),
          "Stade/" + newname + ".png"
        );
        const Stade = this.Stade;
        console.log(this.Stade);
        await fireStorage.uploadBytes(storageRef, file).then(function () {
          console.log("uploaded");
        });
        await axios.post(`${this.$apiUrl}/Stade/AddStade`, {
          ...Stade,
          images: newname,
        });
        this.added = true;
        this.load = false;
        setTimeout(() => {
          this.added = false;
        }, 2000);
        this.Stade.idLocal = "";
        this.Stade.Title = "";
        this.Stade.Description = "";
        this.Stade.num_personne = "";
        this.Stade.priceH = "";
        this.Stade.Type = "";
      } catch (e) {
        console.log(e);
      }
    },
    localid() {
      this.Stade.idLocal = store.state.User.id;
    },
  },
  computed: {
    user: () => {
      return store.getters.User;
    },
  },
  components: {
    white,
  },
};
</script>

<style lang="scss" scoped></style>
