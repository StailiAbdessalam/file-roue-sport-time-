<template>
    <div class="mt-10  footer">
        <div id="non" class=" p-0 m-0 flex justify-between items-center h-16 md:px-20 sm:px-6  mt-4 ">
            <img class="w-36 sm:flex-none" src="../assets/img/LOGO.png" alt="">
            <div class="h-full flex items-center justify-between w-37   ">
                <ul class="flex">
                    <span class="iconify" v-for="(iteams, index) in menuItem" :key="index">
                        <li class="w-10">
                            <Icon class="text-2xl" :icon="iteams.icon" />
                        </li>
                    </span>
                </ul>
            </div>
        </div>
        <div class="w-full h-0 border-solid border border-amber-200  flex justify-center items-center">
        </div>
        <div class="flex justify-center items-center h-10">
            <p class="h-full text-center">© 2021 Flex. All By abdessalam.</p>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue';
export default {
    name: "foo-ter",
    components: {
        Icon
    },
    props: {
        menuItem: {
            type: Array,
            default: () => [
                {
                    name: "facebook",
                    link: "#",
                    icon: 'akar-icons:facebook-fill'
                },
                {
                    name: "instagrame",
                    link: "#",
                    icon: 'akar-icons:instagram-fill'
                },
                {
                    name: "Github",
                    link: "#",
                    icon: 'akar-icons:github-fill'
                },
                {
                    name: "linkedin",
                    link: "#",
                    icon: 'bi:linkedin'
                },
                {
                    name: "twitter",
                    link: "#",
                    icon: 'akar-icons:twitter-fill'
                },
            ]

        }
    }

}
</script>

<style lang="scss" scoped>

@media (max-width: 390px) {
    #non {
        display: none;
    }
}

</style>