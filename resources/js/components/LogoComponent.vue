<template>
    <div class="logo">
        <a class="navbar-brand" :href="route">
            <img :height="tall" :src="logo" alt="">
        </a>
    </div>
</template>

<script>
export default {
    /*   props: [
          'route', 'logo', 'tall'
          ], */
    props: {
        route: {
            type: String
        },
        logo: {
            type: String
        },
        tall: {
            type: String,
            default: 100
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
