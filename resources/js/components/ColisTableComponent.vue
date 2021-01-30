<template>

    <div class="container">
       <div class="d-flex flex-wrap" v-if="this.$store.state.tabColis!=null">
           <div class="table-responsive col-8">
               <table class="table table-striped">
                   <thead>
                   <tr>
                       <th>
                           Type de colis
                       </th>
                       <th>
                           Prix
                       </th>
                       <th>
                           Poids
                       </th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr v-for="c in this.$store.state.tabColis" >
                       <td>
                           {{c.typecolis.libelle}}
                           <input type="hidden" name="typecolis[]" :value="c.typecolis.id">
                       </td>
                       <td>{{c.typecolis.PrixKilo}}</td>
                       <td>{{c.poids}}</td>

                   </tr>
                   </tbody>
               </table>
           </div>
           <div class="ml-auto">
               <h3>
                   <div class="border rounded"><strong>Total :</strong> {{this.$store.state.total}}</div>
               </h3>
           </div>
       </div>
    </div>
</template>

<script>
    import store from "./store";

    export default {
        props:["colis"],
        data(){
            return {
                colisSt:null
            }
        },
        store: store,
        name: "ColisTableComponent",
        mounted() {
            //this.$store.commit("increment","moi");
            //console.log(this.$store.state.count)
        },
        watch:{

        }
    }
</script>

<style scoped>

</style>
