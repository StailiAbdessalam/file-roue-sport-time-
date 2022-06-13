<template>
  <div class="flex flex-col justify-center items-center gap-4 md:gap-20">
    <!-- section to vidiou (heros) -->
    <section class="bg-white w-screen bg-fixed">
      <div
        class="flex flex-col px-7 py-10 mx-auto w-full justify-center items-center space-y-6 h-screen lg:py-16 lg:flex-row lg:items-center"
      >
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center">
          <div class="lg:max-w-lg">
            <h1
              class="text-3xl font-bold tracking-wide text-gray-800 lg:text-5xl"
            >
              bienvenue dans sport time
            </h1>

            <div class="mt-8 space-y-5">
              <p class="flex items-center -mx-2 text-gray-700">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-6 h-6 mx-2 text-green-500"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>

                <span class="mx-2"
                  >reserver votre milleur stade a distance</span
                >
              </p>

              <p class="flex items-center -mx-2 text-gray-700">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-6 h-6 mx-2 text-green-500"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>

                <span class="mx-2">nous sommes disponible 24/7. </span>
              </p>

              <p class="flex items-center -mx-2 text-gray-700">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-6 h-6 mx-2 text-green-500"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>

                <span class="mx-2"
                  >tu choisi votre stade avec une simpliciter de reservation
                </span>
              </p>
            </div>
            <div
              class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm focus-within:border-green-400 focus-within:ring focus-within:ring-green-300 dark:focus-within:border-green-400 focus-within:ring-opacity-40"
            >
              <form class="flex flex-col lg:flex-row">
                <input
                  type="email"
                  placeholder="Enter your email address"
                  class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none focus:outline-none focus:placeholder-transparent focus:ring-0"
                />

                <button
                  type="button"
                  class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-400 focus:outline-none focus:bg-green-400"
                >
                  Rejoignez-nous
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
          <video
            class="vidiouraduieus w-full rounded-2xl"
            src="../assets/vidiou/soccer-players.mp4"
            autoplay
            muted
            loop
          ></video>
        </div>
      </div>
    </section>
    <!-- line -->
    <div
      class="w-4/6 h-0 border-solid border border-amber-400 flex justify-center items-center"
    ></div>
    <!-- its time to play -->
    <div id="Res_section1" class="flex justify-center gap-6 w-5/6">
      <div id="Res_motivation" class="flex flex-col w-1/3 gap-6 w-full">
        <div
          class="h-1/3 md:text-4xl text-center flex flex-col items-center justify-center"
        >
          IT'S TIME TO PLAY
          <span class="text-amber-600">SOCCER!</span>
        </div>
        <img
          class="Res_image h-2/3"
          data-aos="zoom-in-down"
          data-aos-duration="900"
          data-aos-once="true"
          src="../assets/img/aminterrain.jpg"
          alt=""
        />
      </div>
      <div id="Res_motivation" class="flex flex-col justify-around w-1/4 gap-6">
        <img
          data-aos="zoom-in-down"
          data-aos-once="true"
          data-aos-duration="900"
          class="Res_image h-1/3"
          src="https://images.unsplash.com/photo-1588957904067-068e32376edc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
        />
        <img
          data-aos="zoom-in-down"
          data-aos-once="true"
          data-aos-duration="900"
          class="Res_image h-1/3"
          src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1607&q=80"
          alt=""
        />
        <img
          data-aos="zoom-in-down"
          data-aos-once="true"
          data-aos-duration="900"
          class="Res_image h-1/3"
          src="https://images.unsplash.com/photo-1543678854-db854c02a894?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
          alt=""
        />
      </div>
      <div id="Res_motivation" class="Res_motivation flex flex-col w-1/4 gap-6">
        <img
          data-aos="zoom-in-down"
          data-aos-once="true"
          data-aos-duration="900"
          src="../assets/img/imad.jpg"
          alt=""
          class="Res_image"
        />
        <p class="text-center text-xl">
          « Sport Time » Ce site est permit à l'utilisateur <br />
          de réserver le sol d'un stade pour divertir ça <br />
          dur journée avec ses amis et sa famille, on plus ce site web il
          organise les calculs financiers et administratifs en relation avec les
          stades de proximité et les clients.
        </p>
      </div>
    </div>
    <div
      class="w-4/6 h-0 border-solid border border-amber-400 flex justify-center items-center"
    ></div>
    <!-- your feedback -->
    <div
      v-if="Stars"
      data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="900"
      data-aos-delay="1000"
      id="feedback"
      class="flex flex-col gap-4 justify-center items-center bg-green-400 fixed right-4 bottom-5 bg-base-100 shadow-xl"
    >
      <Feedback class="relative zindx" />
      <Icon
        @click="Stars = false"
        class="absolute top-1 right-2 cursor-pointer text text-3xl fermer"
        color="white"
        icon="bi:x-lg"
      />
      <textarea
        class="rounded p-3 border"
        name=""
        id="textAria"
        rows="3"
        cols="30"
        placeholder="send the feedback"
      ></textarea>
      <button class="text-white w-full py-2 rounded bg-orange-400">Send</button>
    </div>
    <!-- about us -->
    <div id="about" class="relative">
      <div id="abou" class="md:w-3/5 sm:w-full my-14">
        <img
          style="width: 80rem; height: 40rem"
          class="object-cover"
          src="https://images.unsplash.com/photo-1591103877275-f62e20079e47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
        />
      </div>
      <div
        id="description"
        class="absolute top-24 bg-green-500 sm:bg-opacity-50 sm:left-2/2 md:left-1/2 md:bg-opacity-100 md:w-2/5 sm:w-4/5 odd:h-3/5 text-white p-14 py-18 grid place-items-start gap-3"
      >
        <h2 class="font-bold text-white text-3xl text-center">About us</h2>
        <p class="text-left">
          En tant que jeune sportif qui aime pratiquer tous les sports, moi et
          beaucoup de mes amis avons eu du mal à trouver un terrain de proximité
          disponible aux mêmes heures déterminantes pour pratiquer tous les
          sports que nous voulons, j'ai donc décidé de créer cette plateforme
          qui s'appelle sport time .
        </p>
        <button
          type="button"
          class="py-2 px-5 text-sm font-medium focus:outline-none bg-white rounded-md hover:bg-gray-100 hover:text-primary text-black"
        >
          More on Our History
        </button>
      </div>
    </div>
    <!-- line -->
    <div
      class="w-4/6 h-0 border-solid border border-amber-400 flex justify-center items-center"
    ></div>
    <!-- All kinds -->
    <div id="section2">
      <h1 class="text-center text-4xl">
        Toutes sortes de sports sont disponibles dans votre stade le plus proche
      </h1>
      <div class="flex w-full justify-around items-center">
        <div id="Res1" class="w-1/4">
          <img
            data-aos="fade-up"
            data-aos-once="true"
            data-aos-duration="2000"
            class="w-full"
            src="../assets/img/Skateboarding.gif"
            alt=""
          />
        </div>
        <div id="Res2" class="w-1/4">
          <img
            data-aos="fade-up"
            data-aos-once="true"
            data-aos-duration="2000"
            class="w-full"
            src="../assets/img/Soccer.gif"
          />
        </div>
        <div id="Res3" class="w-1/4">
          <img
            data-aos="fade-up"
            data-aos-once="true"
            data-aos-duration="2000"
            class="w-full"
            src="../assets/img/Basketball.gif"
            alt=""
          />
        </div>
      </div>
    </div>
    <!-- responsive de All kinds -->
    <div id="slide" class="w3-content w3-section" style="max-width: 500px">
      <h1 class="text-center text-4xl">
        All kinds of sports are available in your nearest stadium
      </h1>
      <img
        class="mySlides w3-animate-fading"
        src="../assets/img/Soccer.gif"
        style="width: 100%"
      />
      <img
        class="mySlides w3-animate-fading"
        src="../assets/img/Basketball.gif"
        style="width: 100%"
      />
      <img
        class="mySlides w3-animate-fading"
        src="../assets/img/Skateboarding.gif"
        style="width: 100%"
      />
    </div>
  </div>
</template>

<script>
import { Icon } from "@iconify/vue";
import Feedback from "./Feedback.vue";
export default {
  name: "Home-vieu",
  data() {
    return {
      Stars: false,
      myIndex: 0,
      i: 0,
    };
  },
  components: {
    Feedback,
    Icon,
  },
  methods: {
    carousel() {
      var myIndex = this.myIndex;
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1;
      }
      x[myIndex - 1].style.display = "block";
      this.myIndex = myIndex;
      setTimeout(this.carousel, 5000);
    },
  },
  mounted() {
    this.carousel();
  },
};
</script>

<style lang="scss">
.zindx {
  z-index: 100;
}
@media (max-width: 420px) {
  .vidiouraduieus {
    border-radius: 0%;
  }
  .serve {
    padding: 0%;
    overflow-y: scroll;
  }
  #abou {
    margin-top: 0px;
    margin-bottom: 0px;
  }
  #description {
    width: 87%;
  }
}
@media (max-width: 766px) {
  .services {
    margin-left: 0px;
    margin-right: 0px;
    padding-left: 11px;
    padding-right: 11px;
    width: 100%;
    overflow-y: scroll;
    display: flex;
  }
}
@media (min-width: 767px) {
  .services {
    justify-content: center;
    margin-left: 8%;
    margin-right: 8%;
  }
}
#feedback {
  z-index: 100;
  padding: 3px;
  border-radius: 10px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
}
.fermer {
  z-index: 200;
}

@keyframes tipsy {
  0% {
    transform: translateX(-50%) translateY(-50%) rotate(0deg);
  }

  100% {
    transform: translateX(-50%) translateY(-50%) rotate(360deg);
  }
}

#title {
  color: black;
  text-shadow: 0 20px 25px #2e2e31, 0 40px 60px #2e2e31;
  // font-size: 80px;
  font-weight: bold;
  text-decoration: none;

  margin: 0;

  transform: translateX(-50%) translateY(-50%);
}

#title:before,
#title:after {
  content: "";
  padding: 0.9em 0.4em;
  position: absolute;
  left: 50%;
  width: 100%;
  top: 50%;

  border: 15px solid red;
  transform: translateX(-50%) translateY(-50%) rotate(0deg);
  animation: 10s infinite alternate ease-in-out tipsy;
}

#title:before {
  border-color: #d9524a #d9524a rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  z-index: -1;
}

#title:after {
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #d9524a #d9524a;
  box-shadow: 25px 25px 25px rgba(46, 46, 49, 0.8);
}

@media (max-width: 1083px) {
  .Res_motivation {
    display: none;
  }
  #Res_section1 {
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #Res_motivation {
    width: 100%;
  }

  .Res_image {
    width: 100%;
  }

  #Res_video {
    width: 600px;
    height: 400px;
  }

  #div_video {
    display: flex;
    justify-content: center;
    align-items: center;
  }
}

@media (max-width: 909px) {
  #Res1 {
    display: none;
  }

  #Res3,
  #Res2 {
    width: 48%;
  }
}

@media (max-width: 559px) {
  #section2 {
    display: none;
  }

  #Res_video {
    width: 400px;
    height: 300px;
  }
}

@media (min-width: 559px) {
  #slide {
    display: none;
  }
}
</style>
