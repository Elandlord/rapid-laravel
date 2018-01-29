<template>
    <div>
        <section class="container">
            <div class="row all-row-centered">
                <div class="col-lg-12">
                    <h2 class="text-thin space-inside-down-sm">Onze <span class="text-bold">pakketten</span></h2>
                    <p class="text-color-accent-darken-md font-md"> Uw website of applicatie dient maximaal bereikbaar te zijn op het internet. Met ons flexibele hostingplatform heeft u een enorme rekenkracht tot uw beschikking die in een optimale beschikbaarheid van uw websites of applicaties resulteert.  </p>
                    <div>
                        <tabs cache-lifetime="10">
                            <tab name="Shared Hosting">
                                <div class="space-outside-down-md">
                                    <h3 class="text-color-accent text-bold space-outside-down-sm">Shared Hosting</h3>
                                    <p class="space-inside-sides-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra turpis mi, id tincidunt massa mollis ac. Ut nec velit nisl. Praesent rutrum porttitor sapien, ut lobortis libero facilisis vitae. Integer at massa pharetra ante molestie dignissim. 
                                        Mauris vel mollis odio. Nam dictum dui quis volutpat faucibus. Aenean ut posuere leo. <a href="" class="text-color-accent">Lees meer</a></p>
                                </div>
                                <hosting-item name="E-mail"></hosting-item>
                                <hosting-item name="Lite"></hosting-item>
                                <hosting-item name="Basic"></hosting-item>
                                <hosting-item name="Extra"></hosting-item>
                            </tab>
                            <tab name="VPS">
                                <div class="space-outside-down-md">
                                    <h3 class="text-color-accent text-bold space-outside-down-sm">VPS</h3>
                                    <p class="space-inside-sides-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra turpis mi, id tincidunt massa mollis ac. Ut nec velit nisl. Praesent rutrum porttitor sapien, ut lobortis libero facilisis vitae. Integer at massa pharetra ante molestie dignissim. 
                                        Mauris vel mollis odio. Nam dictum dui quis volutpat faucibus. Aenean ut posuere leo. <a href="" class="text-color-accent">Lees meer</a></p>
                                </div>
                                <hosting-item name="Basic"></hosting-item>
                                <hosting-item name="Extra"></hosting-item>
                                <hosting-item name="Mega"></hosting-item>
                                <hosting-item name="Ultra"></hosting-item>
                            </tab>
                            <tab name="Managed Hosting">
                                <div class="space-outside-down-md">
                                    <h3 class="text-color-accent text-bold space-outside-down-sm">Managed Hosting</h3>
                                    <p class="space-inside-sides-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra turpis mi, id tincidunt massa mollis ac. Ut nec velit nisl. Praesent rutrum porttitor sapien, ut lobortis libero facilisis vitae. Integer at massa pharetra ante molestie dignissim. 
                                        Mauris vel mollis odio. Nam dictum dui quis volutpat faucibus. Aenean ut posuere leo. <a href="" class="text-color-accent">Lees meer</a></p>
                                </div>
                                <hosting-item name="Test"></hosting-item>
                            </tab>
                        </tabs>
                    </div>
                </div>
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

        .tabs-component {
    margin: 4em 0;
    }

    .tabs-component-tabs {
    border: solid 1px #ddd;
    border-radius: 6px;
    margin-bottom: 5px;
    }

    @media (min-width: 700px) {
    .tabs-component-tabs {
        border: 0;
        align-items: stretch;
        display: flex;
        justify-content: flex-start;
        margin-bottom: -1px;
    }
    }

    .tabs-component-tab {
    color: #999;
    font-size: 14px;
    font-weight: 600;
    margin-right: 0;
    list-style: none;
    }

    .tabs-component-tab:not(:last-child) {
    border-bottom: dotted 1px #ddd;
    }

    .tabs-component-tab:hover {
        color: #FA6900;
    }

    .tabs-component:focus {
        color: #FA6900;
    }

    .tabs-component-tab.is-active {
        color: #FA6900;
    }

    .tabs-component-tab.is-disabled * {
    color: #cdcdcd;
    cursor: not-allowed !important;
    }

    @media (min-width: 700px) {
    .tabs-component-tab {
        background-color: #fff;
        border-radius: 3px 3px 0 0;
        margin-right: .5em;
        transform: translateY(2px);
        transition: transform .3s ease;
    }

    .tabs-component-tab.is-active {
        z-index: 2;
        transform: translateY(0);
        }
    }

    .tabs-component-tab-a {
    align-items: center;
    color: inherit;
    display: flex;
    padding: .75em 1em;
    text-decoration: none;
    }

    .tabs-component-panels {
    padding: 4em 0;
    }

    @media (min-width: 700px) {
    .tabs-component-panels {
        border-top-left-radius: 0;
        background-color: #fff;
        border: solid 1px #ddd;
        border-radius: 0 6px 6px 6px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .05);
        padding: 4em 2em;
    }
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