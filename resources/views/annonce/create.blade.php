@extends("layouts/app")

@section("content")
    <div class="pt-4">
        <div class="container border rounded">
            <div class="text-center mt-4">
                <h2>TRANSPORTER UN COLIS</h2>
            </div>
            <form action="">
                <div class="row my-5">
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Date de depart
                            </span>
                        </label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">
                            <span class="font-weight-bold">
                                Date d'arrivée
                            </span>
                        </label>
                        <input type="date" class="form-control">
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
                            <input type="tel" class="form-control">
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
                            <input type="tel" class="form-control">
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
                                                   <label for="">Type colis</label>
                                                   <select class="form-control col-" name="" id="">
                                                       @foreach($typecolis as $typecolis)
                                                           <option value="{{$typecolis->id}}">{{$typecolis->libelle}}</option>
                                                       @endforeach
                                                   </select>
                                               </div>
                                               <div class="">
                                                   <label for="">Prix par kilos</label>
                                                   <input type="text" class="form-control col-6" size="" value="{{100}}" disabled>
                                               </div>
                                               <div class="">
                                                   <label for="">Poids</label>
                                                   <input type="number" class="form-control col-6">
                                               </div>
                                           </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="button" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
