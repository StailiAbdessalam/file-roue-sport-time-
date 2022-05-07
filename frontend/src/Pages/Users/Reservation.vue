<template>
    <div>
        <Reservation />
    </div>
</template>

<script>
import Reservation from '../../components/Users/Reservation.vue';
export default {
    name: 'Reser-vation',
    components: {
        Reservation
    }
}
</script>

<style lang="scss" scoped>
.footer{
    position: absolute;
    bottom: 0;
}
</style>