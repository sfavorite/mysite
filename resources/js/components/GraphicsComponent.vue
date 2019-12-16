<template>
    <div id='graphics' class="main right">
        <div class='section'>
            <h2>Graphics</h2>
            <hr />

            <canvas class='background'></canvas>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Graphics component mounted.')

            var particles = Particles.init({
                selector: '.background',
                color: '#DA0463',
                options: {
                	maxParticles: 80,
                },
                connectParticles: true
            });
        },
        data: function() {
            return {}
        }
}



</script>
