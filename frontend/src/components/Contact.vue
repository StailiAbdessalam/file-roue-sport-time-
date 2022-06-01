<template>
  <section
    class="py-20 px-4 lg:px-16 overflow-hidden relative z-10 flex justify-center items-center w-full"
    data-aos="fade-up"
    id="contact"
  >
    <div class="container flex-col justify-center items-center">
      <div class="mb-5 flex items-center max-w-md">
        <h2
          class="text-slate-900 text-yellow-400  text-3xl font-bold"
        >
          Contact Me
        </h2>
      </div>
      <div
        class="flex flex-col lg:flex-row lg:items-center text-slate-900  lg:justify-between -mx-4"
      >
        <div
          class="w-full lg:w-1/2 xl:w-6/12 px-4"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <div class="mb-12 lg:mb-0">
            <p
              class="text-base md:text-2xl sm:text-sm font-extrabold text-body-color leading-relaxed stand__out__text mb-9 mx-5"
            >
              Lorem ipsum dolor. Nulla porttitor accumsan tincidunt. Lorem ipsum
              dolor. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor.
              Nulla porttitor accumsan tincidunt.
            </p>
          </div>
        </div>
        <div
          class="w-full lg:w-1/2 xl:w-5/12 px-4"
          data-aos="fade-up"
          data-aos-delay="500"
          data-aos-duration="2000"
        >
          <div
            class="bg-gray-100  relative rounded-lg p-8 sm:p-12 shadow-lg"
          >
            <form @submit.prevent>
              <div class="mb-6">
                <input
                  type="text"
                  placeholder="Your Name"
                  v-model="form.name"
                  class="w-full rounded p-3 text-gray-800   border-gray-500  outline-none focus-visible:shadow-none focus:border-primary"
                  name="full_name"
                  id="full_name"
                />
              </div>
              <div class="mb-6">
                <input
                  type="email"
                  v-model="form.email"
                  placeholder="Your Email"
                  class="w-full rounded p-3 text-gray-800   border-gray-500  outline-none focus-visible:shadow-none focus:border-primary"
                  name="email"
                  id="email"
                />
              </div>
              <div class="mb-6">
                <input
                  inputMode="numeric"
                  v-model="form.Password"
                  placeholder="Your Password email"
                  class="w-full rounded p-3 text-gray-800  border-gray-500  outline-none focus-visible:shadow-none focus:border-primary"
                  name="phone_number"
                  id="phone_number"
                />
              </div>
              <div class="mb-6">
                <textarea
                  rows="6"
                  v-model="form.sujet"
                  placeholder="Your Message"
                  class="w-full rounded p-3 text-gray-800  border-gray-500  outline-none focus-visible:shadow-none focus:border-primary"
                  name="message"
                  id="message"
                ></textarea>
              </div>
              <div>
                <button
                  type="submit"
                  @click="sendMessage"
                  class="w-full text-gray-100 hover:text-gray-700 bg-yellow-400 rounded border border-primary  p-3 transition ease-in-out duration-500 hover:bg-yellow-300"
                >
                  Send Message
                </button>
              </div>
            </form>
            <div>
              <span class="absolute -top-10 -right-9 z-[-1]">
                <svg
                  width="100"
                  height="100"
                  viewBox="0 0 100 100"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                    fill="#FACC15"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";

export default {
  name: "contact-y",
  data() {
    return {
      form: {
        name: "",
        email: "",
        sujet: "",
        Password: "",
      },
    };
  },
  methods: {
    sendMessage() {
      axios.post(`${this.$apiUrl}/MailContact/sendEmail`, this.form);
      console.log(this.form);
    },
  },
};
</script>

<style lang="scss" scoped></style>
