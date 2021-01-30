@extends("layouts/app")

@section("content")
    <div class="pt-4">
        <div class="container border rounded">
            <div class="text-center mt-4">
                <h2>TRANSPORTER UN COLIS</h2>
            </div>
            <form action="{{route("annonce.store")}}" method="post">
                @csrf
                <div class="row my-5">
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Adresse de depart
                            </span>
                        </label>
                        <input name="adressedepart" type="search" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Adresse d'arrivée
                            </span>
                        </label>
                        <input name="adressearrive" type="search" class="form-control">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Date de depart
                            </span>
                        </label>
                        <input name="datedepart" type="date" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Date d'arrivée
                            </span>
                        </label>
                        <input name="datearrive" type="date" class="form-control">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">Téléphone du transporteur</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <select name="" id="" class="form-control">
                                    <option value="">+221</option>
                                    <option value="">+224</option>
                                </select>
                            </span>
                            <input name="teltransporteur" type="tel" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="">
                           <span class="font-weight-bold">
                                Téléphone du recepteur
                           </span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <select name="" id="" class="form-control custom-select">
                                    <option value="">+221</option>
                                    <option value="">+224</option>
                                </select>
                            </span>
                            <input name="telrecepteur" type="tel" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                               Justificatif
                            </span>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choisir un fichier</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>

                    <div class="col-6 d-flex flex-column justify-content-end">
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Preparer un colis
                            </button>
                            <example-component typecolis={{$typecolis}}></example-component>
                        </div>
                    </div>
                </div>

                <colis-table-component></colis-table-component>

                <div class="d-flex mb-5">
                    <button type="submit" class="btn btn-success mr-5">
                        Enregistrer
                    </button>
                    <button type="reset" class="btn btn-danger">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
<script>
    import ColisTableComponent from "../../js/components/ColisTableComponent";
    export default {
        components: {ColisTableComponent}
    }
</script>
