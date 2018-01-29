<template>
    <div>
        <section class="container space-inside-sm">
            <div class="row all-row-centered">
                <div class="col-lg-12 space-inside-down-lg">
                    <h2 class="text-thin space-inside-down-sm">Onze <span class="text-bold">domeinen</span></h2>
                    <p class="text-color-accent-darken-md font-md"> Behalve het verbinden van een domeinnaam aan een website, bestaat ook de mogelijkheid uw domeinnaam te reserveren zonder dat u actief van de domeinnaam gebruik maakt. </p>
                </div>
            </div>
        </section>
        <div class="bg-light">
            <section class="container space-inside-sm scroll-container">
                <div class="row all-row-centered">
                    <div class="col-lg-12 space-inside-down-lg scroll-domain">
                        <p v-for="(item, index) in list" :key="index" class="space-inside-sm pointer" @click="selectDomain(item)">
                            <span v-text="item" class="font-md space-outside-sides-sm "></span> voor <span class="bg-main space-inside-xs space-inside-sides-sm text-color-light">&euro; 6,75 p/ jaar</span>
                        </p>
                        <infinite-loading @infinite="infiniteHandler"></infinite-loading>
                    </div>
                </div>
            </section>
        </div>
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
   import InfiniteLoading from 'vue-infinite-loading';

    export default {
    data() {
        return {
        list: [],
        };
    },
    methods: {
        infiniteHandler($state) {
            setTimeout(() => {
                const temp = [];
                for (let i = this.list.length + 1; i <= this.list.length + 10; i++) {
                    temp.push(".nl");
                }
                this.list = this.list.concat(temp);
                $state.loaded();
            }, 1000);
        },

        selectDomain(item) {
            alert();
        }
    },
    
    components: {
            InfiniteLoading,
        },
    };  
</script>