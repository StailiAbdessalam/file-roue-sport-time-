<template>
  <div class="justify-center items-center">
    <div class="max-w-3xl h-[563px] mx-auto">
      <Transition>
        <div class="pad" v-if="step === 'complete'">
          <div
            class="bg-white rounded-lg p-10 flex items-center shadow justify-between"
          >
            <div>
              <svg
                class="mb-4 h-20 w-20 text-green-500 mx-auto"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                />
              </svg>

              <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                Registration Success
              </h2>

              <div class="text-gray-600 mb-8">
                Thank you. We have sent you an email to
                A.STAILI@student.youcode.com Please white the reponse in your
                demande to activate your account.
              </div>

              <button
                @click="returnHome"
                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
              >
                Ok
              </button>
            </div>
          </div>
        </div>
      </Transition>

      <Transition>
        <div class="pad" v-if="step != 'complete'">
          <!-- step 1 -->
          <div class="border-b-2 py-4">
            <div
              class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
            ></div>
            <div
              class="flex flex-col md:flex-row md:items-center md:justify-between"
            >
              <div class="flex-1 text-lg font-bold text-gray-700 leading-tight">
                Step: {{ step }} of 3
              </div>

              <div class="flex items-center md:w-64">
                <div class="w-full bg-white rounded-full mr-2">
                  <div
                    class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                    :style="
                      'width: ' +
                      parseInt((step / 3) * 100) +
                      '%; transition: width 0.3s ease-in-out;'
                    "
                  ></div>
                </div>
                <div class="text-xs w-10 text-gray-600">
                  {{ parseInt((step / 3) * 100) }}%
                </div>
              </div>
            </div>
          </div>
          <div class="py-10">
            <div v-if="step === 1">
              <div class="mb-5 text-center">
                <div
                  class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset"
                >
                  <img
                    id="image"
                    class="object-cover w-full h-32 rounded-full"
                    :src="image"
                  />
                </div>

                <label
                  for="fileInput"
                  type="button"
                  class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect
                      x="0"
                      y="0"
                      width="24"
                      height="24"
                      stroke="none"
                    ></rect>
                    <path
                      d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"
                    />
                    <circle cx="12" cy="13" r="3" />
                  </svg>
                  Browse Photo
                </label>

                <div
                  class="mx-auto w-48 text-gray-500 text-xs text-center mt-1"
                >
                  Click to add profile picture
                </div>

                <input
                  name="photo"
                  id="fileInput"
                  accept="image/*"
                  class="hidden"
                  type="file"
                  ref="img"
                  @change="avatarChange"
                />
              </div>

              <div class="mb-5">
                <label for="Adress" class="font-bold mb-1 text-gray-700 block"
                  >Adress</label
                >

                <input
                  type="text"
                  class="w-full px-4 border-2 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                  placeholder="Enter your Adress..."
                  v-model="local.Address"
                />
              </div>

              <div class="mb-5">
                <label for="Ville" class="font-bold mb-1 text-gray-700 block"
                  >Ville</label
                >
                <input
                  type="Ville"
                  class="w-full px-4 py-3 border-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                  placeholder="Enter your Ville..."
                  v-model="local.Ville"
                />
              </div>
            </div>
            <!-- step 2 -->
            <transition>
              <div v-if="step === 2">
                <div class="mb-5">
                  <label
                    for="profession"
                    class="font-bold mb-1 text-gray-700 block"
                    >number de stade</label
                  >
                  <input
                    type="text"
                    class="w-full border-2 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="Combien de stade dans votre local.."
                    v-model="local.numberSTade"
                  />
                </div>
                <div class="mb-5">
                  <label
                    for="profession"
                    class="font-bold mb-1 text-gray-700 block"
                    >About me</label
                  >
                  <!-- <input
                    type="text"
                    class="w-full border-2 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="ecrir des description ..."
                    v-model="local.About"
                  /> -->
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    type="text"
                    class="w-full border-2 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                    placeholder="ecrir des description ..."
                    v-model="local.About"
                  >
                  </textarea>
                </div>
              </div>
            </transition>

            <transition> </transition>
          </div>
        </div>
      </Transition>

      <div class="py-5 bg-white" v-if="step != 'complete'">
        <div class="max-w-3xl mx-auto px-4">
          <div class="flex justify-between">
            <div class="w-1/2">
              <button
                v-if="step > 1"
                @click="step--"
                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
              >
                Previous
              </button>
            </div>

            <div class="w-1/2 text-right">
              <button
                v-if="step < 3"
                @click="step++"
                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
              >
                Next
              </button>

              <button
                @click="complette"
                v-if="step === 3"
                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
              >
                Complete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import * as fireStorage from "firebase/storage";
import { toFormData } from "../../utils/helpers";
import { cloudinaryConfig } from "../../utils/constants";
import axios from "axios";
export default {
  name: "Valid-ation",
  data() {
    return {
      uploadAuth: "",
      step: 1,
      image:
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuCURqcLlJS1813zzvBXNbjIHuJQgOsNOnKw&usqp=CAU",
      gender: "Male",
      local: {
        numberSTade: "",
        About: "",
        Photo: "",
        Ville: "",
        Address: "",
        idOrganisateur: localStorage.getItem("id"),
      },
    };
  },
  methods: {
    complette() {
      this.step = "complete";
      console.log(this.local);
      this.sendImage();
    },
    returnHome() {
      this.$router.push("/");
    },
    avatarChange(e) {
      this.local.Photo = e.target.files[0];
      let file = this.$refs.img.files[0];
      var reader = new FileReader();
      reader.onload = (e) => (this.image = e.target.result);
      reader.readAsDataURL(file);
    },
    async fetchSignature() {
      const res = await axios.get(`${this.$apiUrl}/Cloudinary/getSignature`);
      this.uploadAuth = res.data;
    },
    async sendImage() {
      const local = this.local;
      let cloudinaryData = {
        timestamp: this.uploadAuth.timestamp,
        signature: this.uploadAuth.signature,
        api_key: cloudinaryConfig.apiKey,
        file: this.local.Photo,
        folder: cloudinaryConfig.folder,
      };
      const formData = toFormData(cloudinaryData);
      const url = `https://api.cloudinary.com/v1_1/${cloudinaryConfig.cloudName}/image/upload`;
      const imageData = await axios.post(url, formData).then((res) => res.data);
      await axios.post(`${this.$apiUrl}/Organisateur/insertLocal`, {
        ...local,
        Photo: imageData.public_id,
      });
      axios.post(`${this.$apiUrl}/Organisateur/updatesuspended`, {
        id: this.local.idOrganisateur,
        Suspended: -1,
      });
    },
  },
  mounted() {
    console.log("Add-Post mounted");
    this.fetchSignature();
  },
};
</script>

<style lang="scss" scoped>
.pad {
  padding: 0 19px;
}
/* we will explain what these classes do next! */
// .v-enter-active,
// .v-leave-active {
//   transition: opacity 0.5s ease;
// }

// .v-enter-from,
// .v-leave-to {
//   opacity: 0;
// }

[x-cloak] {
  display: none;
}

[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

.form-checkbox,
.form-radio {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  color: currentColor;
  background-color: #fff;
  border-color: #e2e8f0;
  border-width: 1px;
  height: 1.4em;
  width: 1.4em;
}

.form-checkbox {
  border-radius: 0.25rem;
}

.form-radio {
  border-radius: 50%;
}

.form-checkbox:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

.form-radio:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
