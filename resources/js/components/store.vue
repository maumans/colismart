<template>

</template>

<script>
    import Vue from 'vue'
    import Vuex from 'vuex'
    Vue.use(Vuex);

    export default new Vuex.Store({
        state: {
            total:0,
            tabColis:[],
        },
        mutations: {
            addColis(state,colis) {
                state.tabColis.unshift(colis);
            },
            updateTotal(state,montant){
                state.total=state.total+montant
            }
        }
    })
</script>

<style scoped>

</style>
