<template>
    <div>
        <div class="btn-wrapper">
            <router-link to="/products/new" class="btn btn-primary btn-sm">New</router-link>
        </div>
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Seller</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <template v-if="!products.length">
                    <tr>
                        <td colspan="4" class="text-center">No Products Available</td>
                    </tr>
                </template>
                <template v-else>
                    <tr v-for="product in products" :key="product.id">
                        <td>{{ product.title }}</td>
                        <td>{{ product.username }}</td>
                        <td>{{ product.description }}</td>
                        <td>
                            <router-link :to="`/products/${product.id}`">View</router-link>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: 'list',
        mounted() {
            this.$store.dispatch('getProducts');
        },
        computed: {
            products() {
                return this.$store.getters.products;
            }
        }
    }
</script>

<style scoped>
.btn-wrapper {
    text-align: right;
    margin-bottom: 20px;
}
</style>