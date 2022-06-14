<template>
  <!-- components Contact -->
  <div class="w-full">
    <div class="bg-gradient-to-b from-green-800 to-green-400 h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
      <div
        class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72"
        data-aos="fade-up"
        data-aos-anchor-placement="center-bottom"
        data-aos-duration="1500"
      >
        <p class="text-3xl font-bold leading-7 text-center">Contact me</p>
        <form @submit.prevent>
          <div class="md:flex items-center mt-12">
            <div class="w-full md:w-1/2 flex flex-col">
              <label class="font-semibold leading-none">Name</label>
              <input
                placeholder="Your Name"
                v-model="form.name"
                type="text"
                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-green-700 mt-4 bg-gray-100 border rounded border-gray-200"
              />
            </div>
            <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
              <label class="font-semibold leading-none">Phone</label>
              <input
                placeholder="Your Phone"
                type="number"
                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-green-700 mt-4 bg-gray-100 border rounded border-gray-200"
              />
            </div>
          </div>
          <div class="md:flex items-center mt-8">
            <div class="w-full flex flex-col">
              <label class="font-semibold leading-none">Email</label>
              <input
                v-model="form.email"
                placeholder="Your Email"
                type="Email"
                class="leading-none text-gray-900 p-3 focus:outline-none focus:border-green-700 mt-4 bg-gray-100 border rounded border-gray-200"
              />
            </div>
          </div>
          <div>
            <div class="w-full flex flex-col mt-8">
              <label class="font-semibold leading-none">Message</label>
              <textarea
                v-model="form.sujet"
                placeholder="Your Message"
                type="text"
                class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-green-700 mt-4 bg-gray-100 border rounded border-gray-200"
              ></textarea>
            </div>
          </div>
          <div
            @click="sendMessage"
            class="flex items-center justify-center w-full"
          >
            <button
              class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-green-700 rounded hover:bg-green-600 focus:ring-2 focus:ring-offset-2 focus:ring-green-700 focus:outline-none"
            >
              Send message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import swal from "sweetalert";
export default {
  name: "contact-y",
  data() {
    return {
      form: {
        name: "",
        email: "",
        sujet: "",
      },
    };
  },
  methods: {
    sendMessage() {
      console.log(this.form);
      axios
        .post(`${this.$apiUrl}/MailContact/sendEmail`, {
          name: this.form.name,
          email: this.form.email,
          sujet: this.form.sujet,
        })
        .then(() => {
          swal({
            title: "Success",
            text: "Your message has been sent",
            icon: "success",
            button: "OK",
          });
          this.form = {
            name: "",
            email: "",
            sujet: "",
          };
        });
    },
    togglemessage(index, ray) {
      if (ray == 1) {
        this.questio1[index].show = !this.questio1[index].show;
      } else {
        this.questio2[index].show = !this.questio2[index].show;
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
