<template>
    <div class="flex flex-col justify-center items-center gap-20">
        <div class="flex flex-col items-center justify-center w-full mt-20 gap-5">
            <h1 class="font-bold md:text-5xl sm:text-xl text-center">A small business is only as good as <br> its tools.
            </h1>
            <p class="text-center sm:text-lg ">We’re different. Flex is the only saas business platform that lets you
                run your business on one platform, seamlessly across all digital channels.</p>
            <div class="w-1/2 relative">
                <img class="w-full h-full" src="../assets/img/Group37.png" alt="">
            </div>
        </div>
        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>
        <div class="flex justify-center gap-6 w-3/4">
            <div class="flex flex-col w-1/3 gap-6">
                <div class="h-1/3 md:text-4xl text-center flex flex-col items-center justify-center">IT'S TIME TO PLAY
                    <span class="text-amber-600">SOCCER!</span>
                </div>
                <img data-aos="zoom-in-down" class="" src="../assets/img/Slide2.jpg" alt="" data-aos-duration="500">
            </div>
            <div class="flex flex-col w-1/4 gap-6   ">
                <img data-aos="zoom-in-down" class="" src="../assets/img/slider1.jpg" alt="" data-aos-duration="500">
                <img data-aos="zoom-in-down" class="" src="../assets/img/slider1.jpg" alt="" data-aos-duration="500">
            </div>
            <div class="flex flex-col w-1/4 gap-6">
                <img data-aos="zoom-in-down" src="../assets/img/slider1.jpg" alt="" data-aos-duration="500">
                <p class="text-center">Location de terrain, abonnement, <br> championnat, Club House, <br> événement
                    d'entreprise <br>...
                </p>
            </div>
        </div>
        <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
        </div>
        <div>
            <h1 class="text-center text-4xl">hi evry one hh inak inak </h1>
            <div class="flex w-full  justify-around items-center">
                <div class="w-1/4">
                    <img data-aos="fade-up" class="w-full" src="../assets/img/Skateboarding.gif" alt=""
                        data-aos-duration="1500">
                </div>
                <div class="w-1/4">
                    <img data-aos="fade-up" class="w-full" src="../assets/img/Soccer.gif"  data-aos-duration="1500">
                </div>
                <div data-aos="fade-up" class="w-1/4">
                    <img class="w-full" src="../assets/img/Basketball.gif"  data-aos-duration="1500">
                </div>
            </div>
        </div>
        <div v-if="Stars" id="feedback"
            class=" flex flex-col gap-4 justify-center items-center bg-green-400  fixed right-4 bottom-5 bg-base-100 shadow-xl ">
            <Feedback class="relative" />
            <Icon @click="Stars = false" class="absolute top-1 right-2 cursor-pointer text  text-3xl z-10 "
                color="white" icon="bi:x-lg" />
            <textarea class="rounded p-3 border" name="" id="textAria" rows="3" cols="30"
                placeholder="send the feedback"></textarea>
            <button class="text-white w-full py-2 rounded bg-orange-400 ">Send</button>
        </div>
        <div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue';
import Feedback from './Feedback.vue'
export default {
    name: 'Home-vieu',
    data() {
        return {
            Stars: true
        }
    },
    components: {
        Feedback,
        Icon
    },
}
</script>

<style lang="scss">
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
</style>
