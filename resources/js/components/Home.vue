<template>
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Home</div>

                    <div class="card-body">
                        <h2>{{ welcome }}</h2>
                        <h1>Go to Products</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
      name: 'home',
      computed: {
            welcome() {
                return this.$store.getters.welcome;
            }
        }
  }
</script>