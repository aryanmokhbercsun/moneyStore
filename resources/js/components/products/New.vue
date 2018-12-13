<template>
    <div class="product-new">
        <form @submit.prevent="add">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>
                        <input type="text" class="form-control" v-model="product.title" placeholder="Product Name"/>
                    </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        <input type="text" class="form-control" v-model="product.description" placeholder="Product Description"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <router-link to="/products" class="btn">Cancel</router-link>
                    </td>
                    <td class="text-right">
                        <input type="submit" value="Create" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
        <div class="errors" v-if="errors">
            <ul>
                <li v-for="(fieldsError, fieldName) in  errors" :key="fieldName">
                    {{ fieldsError.join('\n') }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import validate from 'validate.js';

    export default {
        name: 'new',
        data() {
            return {
                product: {
                    title: '',
                    description: '',
                },
                errors: null
            };
        },
        computed: {
            currentUser() {
                return this.$store.getters.currentUser;
            }
        },
        methods: {
            add() {
                this.errors = null;
                const constraints = this.getConstraints();
                const errors = validate(this.$data.product, constraints);
                if(errors) {
                    this.errors = errors;
                    return;
                }
                axios.post('/api/products/new', this.$data.product)
                    .then((response) => {
                        this.$router.push('/products');
                    });
            },
            getConstraints() {
                return {
                    title: {
                        presence: true,
                        length: {
                            minimum: 3,
                            maximum: 30,
                            message: 'Must be between 3 and 30 characters'
                        }
                    },
                    description: {
                        presence: true,
                        length: {
                            maximum: 250,
                            message: 'Must be less than 250 characters'
                        }
                    },
                };
            },
        }
    }
</script>

<style>
.errors {
    background: lightcoral;
    border-radius:5px;
    padding: 21px 0 2px 0;
}
</style>