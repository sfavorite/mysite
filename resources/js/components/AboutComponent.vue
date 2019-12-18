<template>
    <div id='about' class="main text-left">
        <h2>About</h2><br />
        <div class='mb-5'>
            <h4>Interests</h4>
            <hr />
            <h4>I enjoy: working with Pytorch, sklearn, Nextcloud, and pfSense</h4>
            <h4>Building web-sites using: Laravel, Falcon</h4>
        </div>
        <div class='mb-5'>
            <h4>This site</h4>
            <hr />
            <p class='lead'>I built this site using Laravel for the backend with Vuejs and Vue-router on the front-end.</p>

            <div class='text-left'>


            <ul>
                <li><a href="https://laravel.com/" target='_blank'>Laravel</a></li>
                <li><a href="https://vuejs.org/" target='_blank'>Vuejs</a></li>
                <li><a href="https://router.vuejs.org/" target='_blank'>Vue Router</a></li>
            <!--    <li><a href="https://ubuntu.com/" target='_blank'>Ubuntu</a></li>-->
            </ul>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('About component mounted.')
        },
        data: function() {
            return {}
        }
}



</script>
