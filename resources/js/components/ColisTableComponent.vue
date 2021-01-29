<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>
                        Prix
                    </th>
                    <th>
                        Quantité
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-if="colis!=null" v-for="c in colis">
                    <td>{{c}}</td>
                    <td>{{c}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:["colis"],
        data(){
            return {
                colisSt:null
            }
        },
        name: "ColisTableComponent",
    }
</script>

<style scoped>

</style>
