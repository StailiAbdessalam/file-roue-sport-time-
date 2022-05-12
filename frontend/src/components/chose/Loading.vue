<template>
    <div class="landscape -z-30 .body"></div>
    <div class="filter"></div>
    <canvas id="canvas"></canvas>
</template>

<script  >
export default {
    name: 'Loading-t',
}
</script>

<style  scoped>
.body {
    margin: 0;
    overflow: hidden;
    width: 100%;
    height: 100%;
    cursor: none;
    background: black;
    background: linear-gradient(to bottom, #000000 0%, #5788fe 100%);
    z-index: -1234678;
}

.filter {
    width: 100%;
    height: 90%;
    position: absolute;
    top: 10%;
    left: 0;
    background: #fe5757;
    animation: colorChange 30s ease-in-out infinite;
    animation-fill-mode: both;
    mix-blend-mode: overlay;
    z-index: -1234678;
}

@keyframes colorChange {

    0%,
    20% {
        opacity: 0;
        background-color: rgb(255, 255, 255);

    }

    100% {
        opacity: .9;
        background-color: rgba(128, 222, 134, 0.763);
    }

   
}

.landscape {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100%;
    height: 90%;
    background-image: url(https://openclipart.org/image/2400px/svg_to_png/250847/Trees-Landscape-Silhouette.png);
    background-size: 1000px 250px;
    background-repeat: repeat-x;
    background-position: center bottom;
    background-attachment: fixed;
}
</style>