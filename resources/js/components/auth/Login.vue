<template>
     <div class="login row justify-content-center">
         <div class="col-md-4">
             <div class="card">
                 <div class="card-header">LOGIN</div>
                 <div class="card-body">
                     <form @submit.prevent="authenticate">
                         <div class="form-group-row">
                             <label for="email">EMAIL:</label>
                             <input type="email" v-model="form.email" class="form-control" placeholder="Email Address">
                         </div>
                         <div class="form-group-row">
                             <label for="password">PASSWORD:</label>
                             <input type="password" v-model="form.password" class="form-control" placeholder="Password">
                         </div>
                          <div class="form-group-row">
                             <input type="submit" value="LOGIN">
                         </div>
                         <div class="form-group-row" v-if="authError">
                             <p class="error"></p>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
</template>

<script>
    import {login} from '../../helpers/auth';

    export default {
        name: "login",
        data() {
            return {
                form: {
                    email: '',
                    password: '',
                },
                error: null,
            };
        },
        methods: {
            authenticate() {
                this.$store.dispatch('login',this.form);

                login(this.$data.form)
                    .then((res) =>{
                        this.$store.commit("loginSuccess", res);
                        this.$router.push({path: '/'});
                    })
                    .catch((error) => {
                        this.$store.commit("loginFailed", {error});
                    })
            }
        },
        computed: {
            authError(){
                return this.$store.getters.authError;
            }
        },
    }
</script>

<style lang="">
    
</style>