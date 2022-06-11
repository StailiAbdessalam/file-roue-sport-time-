<template>
    <div class="test">
<paiyment/>
    </div>
</template>

<script>
import paiyment from "../../components/Users/paiyment.vue"
    export default {
        name: "paiy-ment",
        components: {
            paiyment
        },
        
    }
</script>

<style lang="scss" scoped>
.test{
    width: 60%;
    margin: 0 auto;
    @media (max-width: 668px) {
        width: 100%;
    }
    @media (max-width: 998px) {
        width: 80%;
    }

}
</style>