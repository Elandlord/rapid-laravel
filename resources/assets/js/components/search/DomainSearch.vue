<template>
    <div class="bg-light inline-block space-inside-sides-md space-inside-sm space-outside-up-lg border-curved shadow-xs shadow-md-hover transition-normal">
        <div class="inline-block space-inside-left-md space-outside-down-sm"><h3>www.</h3></div>

        <div class="inline-block cursor">
            <input class="rq-form-element domain-search outline-none inline-block space-inside-left-sm space-inside-right-xl space-inside-xs border-none border-secondary border-curved text-color-main pointer" type="text" placeholder="jouwdomein.nl" required/>
            <i></i>
        </div>
    
        <button @click="checkDomain()" class="outline-none bg-accent bg-accent-hover-darken-xs transition-normal border-curved border-none space-inside-xs space-inside-sides-sm space-outside-sides-sm" style="position: relative; top: 4px; ">
            <i class="material-icons text-color-light">search</i>
        </button>
    </div>
</template>
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
      opacity: 0
    }

    .cursor {
	position: relative;
    }
    .cursor	i {
        position: absolute;
        width: 1px;
        height: 60%;
        background-color: gray;
        left: 11px;
        top: 20%;
        animation-name: blink;
        animation-duration: 800ms;
        animation-iteration-count: infinite;
        opacity: 1;
    }

    .cursor input:focus + i {
        display: none;
    }

    @keyframes blink {
        from { opacity: 1; }
        to { opacity: 0; }
    }
</style>
<script>
   export default {
       data() {
           return {

           }
       },

       methods: {
           checkDomain() {
               Notifier.success("Domein is beschikbaar");
           }
       }
   }   
</script>