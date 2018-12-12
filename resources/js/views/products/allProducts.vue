<template>
    <div>
    <p>allproducts</p>
    <button :click="setProducts()">Get Products</button>
    </div>
</template>

<script>
    import { mapActions, mapGetters } from 'vuex';
    export default{
        name: 'all-products',
        data(){
            return{

            }
        },
        computed:{
            ...mapGetters([
                'getProducts',
            ]),
        },
        methods:{
            ...mapActions([
                'setProducts',
            ]),
            seeProducts(){
                this.$store.dispatch("setProducts", 1); 
            }
        },
    }


</script>
