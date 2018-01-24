<template>
    <div>
        <section class="container space-inside-sm animated fadeInDown wow">
            <div class="row all-row-centered">
                <div class="col-lg-12 space-inside-down-lg">
                    <h2 class="text-thin space-inside-down-sm">Onze <span class="text-bold">pakketten</span></h2>
                    <p class="text-color-accent-darken-md font-md"> Een kleine greep uit onze pakketten </p>
                </div>
                <hosting-item></hosting-item>
                <hosting-item></hosting-item>
                <hosting-item></hosting-item>
            </div>
        </section>
    </div>
</template>
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
      opacity: 0
    }
</style>
<script>
   export default {
       data() {
           return {

           }
       }
   }   
</script>