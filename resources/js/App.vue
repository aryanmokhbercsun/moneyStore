<template>
    <div>
        <sidebar> </sidebar>
        <main class="contentWrapper">
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
    import sidebar from './components/global/sidebar';

    export default {
        components: {
            sidebar,
        },
    }



</script>

