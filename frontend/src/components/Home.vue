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
            <img class="" src="../assets/img/Slide2.jpg" alt="">
        </div>
        <div class="flex flex-col w-1/4 gap-6   ">
            <img class="" src="../assets/img/slider1.jpg" alt="">
            <img class="" src="../assets/img/slider1.jpg" alt="">
        </div>
        <div class="flex flex-col w-1/4 gap-6">
            <img src="../assets/img/slider1.jpg" alt="">
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
                <img class="w-full" src="../assets/img/Skateboarding.gif" alt="">
            </div>
            <div class="w-1/4">
                <img class="w-full" src="../assets/img/Soccer.gif" alt="">
            </div>
            <div class="w-1/4">
                <img class="w-full" src="../assets/img/Basketball.gif" alt="">
            </div>

        </div>
    </div>
    <div class="w-4/6 h-0 border-solid border border-amber-400  flex justify-center items-center">
    </div>
    <div id="feedback" class="flex flex-col gap-4 justify-center items-center w-3/6 ">
        <h1 class="flex ">Partager your <span class="text-yellow-600 px-2">Feedback! 🙃 </span> </h1>
        <!-- start de feedback -->
        <div class="rating-css">
            <div class="star-icon">
                <input type="radio" name="rating1" id="rating1">
                <label for="rating1" class="fa fa-star"></label>
                <input type="radio" name="rating1" id="rating2">
                <label for="rating2" class="fa fa-star"></label>
                <input type="radio" name="rating1" id="rating3">
                <label for="rating3" class="fa fa-star"></label>
                <input type="radio" name="rating1" id="rating4">
                <label for="rating4" class="fa fa-star"></label>
                <input type="radio" name="rating1" id="rating5">
                <label for="rating5" class="fa fa-star"></label>
            </div>
        </div>
        <textarea class="rounded p-3 border" name="" id="textAria" rows="5" placeholder="send the feedback"></textarea>
        <button class="text-white w-52 py-2 rounded bg-emerald-400">Send</button>

    </div>
    <div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Home-vieu',
}
</script>

<style lang="scss">
.emoji-toggle {
    position: relative;
    width: 60px;
    .well {
        display: block;
        background: #eee;
        height: 20px;
        border-radius: 10px;
        cursor: pointer;
    }

    .toggle {
        opacity: 0;
        border: 0;
        outline: none;
        height: 100%;
        width: 100%;
        background: transparent;
        position: absolute;
        cursor: pointer;
        z-index: 100;

        ~.emoji:before {
            content: "\01F431";
            position: absolute;
            left: 0;
            top: -15px;
            font-size: 40px;
            transition: 0.2s;
        }

        &:checked {
            ~.emoji:before {
                left: 100%;
                margin-left: -1em;
            }
        }

        ~label {
            white-space: nowrap;

            &:before {
                position: absolute;
                right: 100%;
                margin-right: 5px;
                top: 0;
            }

            &:after {
                position: absolute;
                left: 100%;
                margin-left: 5px;
                top: 0;
            }
        }
    }
}

@mixin emojiType($leftEmoji, $rightEmoji, $leftLabel, $rightLabel) {
    .toggle {
        ~.emoji:before {
            content: $leftEmoji;
        }

        &:checked {
            ~.emoji:before {
                content: $rightEmoji;
            }
        }

        ~label {
            &:before {
                content: $leftLabel;
            }

            &:after {
                content: $rightLabel;
            }
        }
    }
}

.emoji-happy {
    @include emojiType("\01F604", "\01F620", "", ""
    );
}

#feedback {
    box-shadow: 0 10px 10px -5px;
    padding: 10px;
}

.rating-css div {
    color: #ffe400;
}

.rating-css input {
    display: none;
}

.rating-css input+label {
    font-size: 30px;
    text-shadow: 1px 1px 0 #ffe400;
    cursor: pointer;
}

.rating-css input:checked+label~label {
    color: #838383;
}

.rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
}
</style>
