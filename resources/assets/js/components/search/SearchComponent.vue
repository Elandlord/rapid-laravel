<template>
   <div class="search-wrapper">
        <input v-model="searchValue" @blur="retract($event)" @click="expand()" :class="{ expanded: expanded }" type="text" 
                class="border-curved 
                    space-inside-sides-sm border-none 
                    space-inside-xs search-bar 
                    outline-none
                    transition-normal" 
        :placeholder="placeholderText">
        <transition name="fade">
            <span v-if="searchIconVisible" style="position: absolute; right: 8px; top: 7px;"><i class="material-icons" style='font-size: 20px;'>search</i></span>
        </transition>
    </div>
</template>
<style>
    .search-wrapper {
        position: relative;
    }
    .search-bar {
        width: 150px;
        position: relative;
        top: 4px;
    }
    
    .search-results {
        left: 0px;
        position: absolute;
    }
    .expanded {
        width: 300px;
    }
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
                expanded: false,
                searchValue: '',
                placeholderText: '',
                searchIconVisible: true,
           }
       },
       beforeMount() {
       },
       mounted() {
       },
       methods: {
          expand() {
              this.expanded = true;
              this.searchIconVisible = false;
              setTimeout(() => {
                this.placeholderText = "Zoeken...";
              }, 300)
          },
          retract(event) {
              this.placeholderText = "";
              this.searchIconVisible = true;
              if(event.relatedTarget !== null && event.relatedTarget.attributes[0] !== undefined &&  event.relatedTarget.attributes[0].nodeValue === 'notCloseable'){
                event.preventDefault();
              }else{
                this.expanded = false;
              }
          }
       }
   }   
</script>