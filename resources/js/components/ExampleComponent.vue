<template>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-light" style="background-color: rgb(255,80,80)">
                    <h5 class="modal-title" id="exampleModalLabel">Preparer le colis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between">
                        <div class="mr-2">
                            <label>Type colis</label>
                            <select v-model="typecolisS" class="form-control col-" v-on:change="prixkilo=typecolisS.PrixKilo">
                                <option v-bind:value="tpc" v-for="tpc in JSON.parse(typecolis)" >
                                    {{tpc.libelle}}
                                </option>
                            </select>
                        </div>
                        <div class="">
                            <label for="">Prix par kilos</label>
                            <input type="text" v-model="prixkilo" class="form-control col-6" size="" value="100" disabled>
                        </div>
                        <div class="">
                            <label for="">Poids</label>
                            <input type="number" v-model="poids" class="form-control col-6">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" v-on:click="remplir()">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import store from "./store";

    export default {
        props:["typecolis"],
        data(){
            return{
                "typecolisS":"",
                "prixkilo":"",
                "poids":""
            }
        },
        mounted() {

        },
        store:store,
        methods:{
            remplir(){
                let colis={"typecolis":this.typecolisS,"prixkilo":this.prixkilo,"poids":this.poids};
                this.$store.commit("addColis",colis);
                let montant=colis.prixkilo*colis.poids;
                this.$store.commit("updateTotal",montant);
            }
        }
    }
</script>
