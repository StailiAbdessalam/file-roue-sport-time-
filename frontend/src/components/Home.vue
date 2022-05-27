<template>
    <div class="flex flex-col justify-center items-center gap-20">
        <div class="flex flex-col items-center justify-center w-full mt-9 gap-5">
            <h1 class="font-bold md:text-5xl sm:text-xl text-center">A small business is only as good as <br> its tools.
            </h1>
            <p class="text-center sm:text-lg ">Welcome to the Sport Time website. Now is the time to book a time to play
                in the nearest stadium.</p>
            <div id="div_video" class="lg:w-[70%]   relative">
                <!-- <img id="Res_video" class="w-full h-full -z-30" src="../assets/img/Group37.png" alt=""> -->
                <video class="w-full rounded-2xl" src="../assets/vidiou/soccer-players.mp4" autoplay muted loop></video>
            </div>
        </div>
        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>
        <div id="Res_section1" class="flex justify-center gap-6 w-5/6">
            <div id="Res_motivation" class="flex flex-col w-1/3 gap-6 w-full">
                <div class="h-1/3 md:text-4xl text-center flex flex-col items-center justify-center">IT'S TIME TO PLAY
                    <span class="text-amber-600">SOCCER!</span>
                </div>
                <img class="Res_image" data-aos="zoom-in-down" data-aos-duration="2000" data-aos-once="true"
                    src="../assets/img/Slide2.jpg" alt="">
            </div>
            <div id="Res_motivation" class="flex flex-col w-1/4 gap-6   ">
                <img data-aos="zoom-in-down" data-aos-once="true" data-aos-duration="2000" class="Res_image"
                    src="../assets/img/slider1.jpg" alt="">
                <img data-aos="zoom-in-down" data-aos-once="true" data-aos-duration="2000" class="Res_image"
                    src="../assets/img/slider1.jpg" alt="">
            </div>
            <div id="Res_motivation" class="flex flex-col w-1/4 gap-6">
                <img data-aos="zoom-in-down" data-aos-once="true" data-aos-duration="2000"
                    src="../assets/img/slider1.jpg" alt="" class="Res_image">
                <p class="text-center">Location de terrain, abonnement, <br> championnat, Club House, <br> événement
                    d'entreprise <br>...
                </p>
            </div>
        </div>
        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>

        <div v-if="Stars" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000"
            id="feedback"
            class="flex flex-col gap-4 justify-center items-center bg-green-400  fixed right-4 bottom-5 bg-base-100 shadow-xl ">
            <Feedback class="relative" />
            <Icon @click="Stars = false" class="absolute top-1 right-2 cursor-pointer text  text-3xl z-10 "
                color="white" icon="bi:x-lg" />
            <textarea class="rounded p-3 border" name="" id="textAria" rows="3" cols="30"
                placeholder="send the feedback"></textarea>
            <button class="text-white w-full py-2 rounded bg-orange-400 ">Send</button>
        </div>


        <div class="bg-white w-full p-8 relative ">
            <h2 class="font-bold text-green-500 text-3xl my-5 text-center ">Services</h2>

            <div class=" services grid lg:grid-cols-3 md:grid-cols-2  mt-8  justify-center items-center gap-8 ">
                <!-- <div class="flex-1 flex gap-8 md:flex-row sm:flex-col"> -->
                    <div class="py-9 px-16 bg-green-400 text-secondary shadow-xl  ">
                        <img class="border-b-0.5 border-white pb-2 m-2 h-12 " src="../assets/img/construct.svg"
                            aria-hidden="true">
                        <span class="font-medium">Construction</span>
                    </div>
                    <div class="py-9 px-16 bg-black text-white  shadow-xl ">
                        <img class="border-b-4 border-gray-200 pb-2 m-2 h-12 " src="../assets/img/renovation.svg"
                            aria-hidden="true">
                        <span class="font-medium">Renovation</span>
                    </div>
                    <div class="py-9 px-16 bg-green-400 text-black shadow-xl ">
                        <img class="border-b-4 border-gray-200 pb-2 m-2 h-12 " src="../assets/img/consultation.svg"
                            aria-hidden="true">
                        <span class="font-medium">Consultation</span>
                    </div>

                <!-- </div>
                <div class="flex-1 flex gap-8 mt-8 md:flex-row sm:flex-col  "> -->
                    <div class="py-9 px-16 bg-black text-white  ">
                        <img class="border-b-4 border-gray-200 pb-2 m-2 h-12 " src="../assets/img/reservices.svg"
                            aria-hidden="true">
                        <span class="font-medium">Repaire Services</span>
                    </div>
                    <div class="py-9 px-16 bg-green-400 text-secondary shadow-xl  ">
                        <img class="border-b-4 border-gray-200 pb-2 m-2 h-12 " src="../assets/img/architech.svg"
                            aria-hidden="true">
                        <span class="text-secondary font-medium">Architecture</span>
                    </div>
                    <div class="py-9 px-16 bg-black text-white shadow-xl ">
                        <img class="border-b-4 border-gray-200 pb-2 m-2 h-12 " src="../assets/img/electric.svg"
                            aria-hidden="true">
                        <span class="font-medium">Electric</span>
                    </div>
                <!-- </div> -->
            </div>
        </div>


        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>

        <div id="about" class="relative  ">

            <div class="md:w-3/5 sm:w-full    my-14">
                <img style="width:80rem;height:40rem" class="object-cover" src="../assets/img/AZERTY.jpg">
            </div>
            <div
                class="absolute top-24 bg-green-500 sm:bg-opacity-50 sm:left-2/2 md:left-1/2 md:bg-opacity-100 md:w-2/5 sm:w-4/5 odd:h-3/5 text-white p-14  py-18 grid place-items-start gap-3">
                <h2 class="font-bold text-white text-3xl  text-center">About us</h2>
                <p class="text-left ">For more than 30 years we have been delivering world-class construction and we’ve
                    built many lasting relationships along the way. We’ve matured into an industry leader and trusted
                    resource for those seeking quality, innovation and reliability when building in the U.S.</p>
                <button type="button"
                    class="py-2 px-5  text-sm font-medium  focus:outline-none bg-white rounded-md hover:bg-gray-100 hover:text-primary   text-black">More
                    on Our History</button>
            </div>
        </div>

        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>
        <div id="section2" >
        <!-- <loading  /> -->
            <h1 class="text-center text-4xl">All kinds of sports are available in your nearest stadium</h1>
            <div class="flex w-full  justify-around items-center">
                <div id="Res1" class="w-1/4">
                    <img data-aos="fade-up" data-aos-once="true" data-aos-duration="2000"
                        class="w-full" src="../assets/img/Skateboarding.gif" alt="">
                </div>
                <div id="Res2" class="w-1/4">
                    <img data-aos="fade-up" data-aos-once="true"  data-aos-duration="2000"
                        class="w-full" src="../assets/img/Soccer.gif">
                </div>
                <div id="Res3" class="w-1/4">
                    <img data-aos="fade-up" data-aos-once="true"  data-aos-duration="2000"
                        class="w-full" src="../assets/img/Basketball.gif" alt="">
                </div>
            </div>
        </div>

        <div>
        </div>

        <div id="slide" class="w3-content w3-section" style="max-width:500px">
            <h1 class="text-center text-4xl">All kinds of sports are available in your nearest stadium</h1>
            <img class="mySlides w3-animate-fading" src="../assets/img/Soccer.gif" style="width:100%">
            <img class="mySlides w3-animate-fading" src="../assets/img/Basketball.gif" style="width:100%">
            <img class="mySlides w3-animate-fading" src="../assets/img/Skateboarding.gif" style="width:100%">
        </div>






    </div>
</template>

<script>
import {
    Icon
} from '@iconify/vue';
import Feedback from './Feedback.vue'
export default {
    name: 'Home-vieu',
    data() {
        return {
            Stars: false,
            myIndex: 0,
            i: 0,
        }
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
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            this.myIndex = myIndex;
            setTimeout(this.carousel, 5000);
        }
    },
    mounted() {
        this.carousel();
    },

}
</script>

<style lang="scss">
.services{
    margin-left: 8%;
    margin-right: 8%;
}
#feedback {
    padding: 3px;
    border-radius: 10px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, .05);
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
    content: '';
    padding: .9em .4em;
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
    box-shadow: 25px 25px 25px rgba(46, 46, 49, .8);
}

@media (max-width: 1083px) {
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
