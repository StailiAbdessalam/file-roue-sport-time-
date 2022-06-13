<template>
  <section class="sm:py-16 md:py-20 lg:py-24 pb-28">
    <div class="max-w-full px-8 lg:px-16">
      <h2
        class="mb-2 text-2xl font-bold text-center text-green-600 md:text-3xl lg:text-4xl"
      >
        Questions fréquemment posées
      </h2>

      <div class="relative flex flex-col mt-8 mt-16 lg:flex-row">
        <!-- Question Gauche -->
        <div class="relative w-full space-y-3 lg:space-y-5 lg:w-1/2 lg:pr-4">
          <div
            v-for="(qesti, index) in questio1"
            :key="index"
            class="relative px-6 py-2 overflow-hidden text-white bg-green-600 rounded-lg select-none"
          >
            <h4
              @click="togglemessage(index, 1)"
              class="flex items-center justify-between py-4 text-base font-medium text-green-100 cursor-pointer sm:text-lg hover:text-white"
            >
              <span>{{ qesti.question }}</span>
              <svg
                class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                :class="{ '-rotate-180': qesti.show }"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                ></path>
              </svg>
            </h4>
            <p
              v-if="qesti.show"
              class="px-1 pt-0 mt-1 text-green-200 sm:text-lg py-7"
            >
              {{ qesti.Response }}
            </p>
          </div>
        </div>
        <!-- Question Droite -->
        <div
          class="relative w-full mt-3 space-y-3 lg:mt-0 lg:space-y-5 lg:w-1/2 lg:pl-4"
        >
          <div
            v-for="(quest, index) in questio2"
            :key="index"
            class="relative px-6 py-2 overflow-hidden text-white bg-green-600 rounded-lg select-none"
          >
            <h4
              @click="togglemessage(index, 2)"
              class="flex items-center justify-between py-4 text-base font-medium text-green-100 cursor-pointer sm:text-lg hover:text-white"
            >
              <span>{{ quest.question }}</span>
              <svg
                class="w-4 h-4 mr-1 transition-all duration-200 ease-out transform rotate-0"
                :class="{ '-rotate-180': quest.show }"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                ></path>
              </svg>
            </h4>
            <p
              v-if="quest.show"
              class="px-1 pt-0 mt-1 text-green-200 sm:text-lg py-7"
            >
              {{ quest.Response }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "F-AQ",
  data() {
    return {
      questio1: [
        {
          question: "Where do I go to upgrade my account?",
          Response:
            "You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site",
          show: false,
        },
        {
          question: "How do I use Tails in my project?",
          Response:
            "Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.",
          show: false,
        },
        {
          question: "How long will I have access to Tails?",
          Response:
            "You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.",
          show: false,
        },
        {
          question: "What is the license on the pages?",
          Response:
            "You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.",
          show: false,
        },
      ],
      questio2: [
        {
          question: "Where do I go to upgrade my account?",
          Response:
            "You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site",
          show: false,
        },
        {
          question: "How do I use Tails in my project?",
          Response:
            "Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.",
          show: false,
        },
        {
          question: "How long will I have access to Tails?",
          Response:
            "You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.",
          show: false,
        },
        {
          question: "What is the license on the pages?",
          Response:
            "You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.",
          show: false,
        },
      ],
    };
  },
  methods: {
    togglemessage(index, type) {
      if (type === 1) {
        this.questio1[index].show = !this.questio1[index].show;
      } else {
        this.questio2[index].show = !this.questio2[index].show;
      }
    },
  },
};
</script>

<style lang="scss" scoped></style>
