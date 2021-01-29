@extends("layouts/app")

@section("content")

    <body style="background:url({{asset("img/welcomeBg.jpg")}}) no-repeat;background-size: auto; ">
        <div id="welcomeDivPrincipale">
           <div class="container py-5">
               <div class="text-light row">
                   <div class="col-6">
                       <img src="{{asset("img/welcomeLivreur.png")}}" class="w-100" alt="">
                   </div>
                   <div class="col-6">
                       <div class="mb-4">
                           <h1 class="smart">
                               Envoi de colis de façon Smart
                               <div class="row">
                                   <div class="col-5 col-md-2">
                                        <div class="rounded-circle" style="height: 50px;width: 50px;border: 5px solid white">
                                            <div class="rounded-circle m-auto" style="height: 30px;width: 30px;border: 5px solid white">
                                                <div class="rounded-circle m-auto" style="height: 15px;width: 15px;border: 5px solid white">

                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-7 col-md-10">
                                       <div style="height: 4px;width: 100%;background-color: white;margin-bottom: 10px"></div>
                                       <div style="height: 4px;width: 80%;background-color: white; margin-bottom: 10px"></div>
                                       <div style="height: 4px;width: 60%;background-color: white; margin-bottom: 10px"></div>
                                       <div style="height: 4px;width: 40%;background-color: white; margin-bottom: 10px"></div>
                                   </div>
                               </div>
                           </h1>

                       </div>
                       <div>
                           <form action="" class="form-group welcome-form">
                               <h3>
                                   <div>
                                       Je veux envoyer un colis de
                                   </div>
                                   <div>
                                       <input type="text">
                                       à
                                       <input type="text">
                                   </div>
                                   <div>
                                       à partir du
                                       <input type="text">
                                   </div>
                               </h3>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <div>
            <div class="mt-5">
                <div class="d-flex justify-content-center mb-5">
                   <div style="border-bottom: 5px solid rgb(255,80,80)">
                       <h4 class="p-2 my-auto">
                           Quel est votre besoin ?
                       </h4>
                   </div>
                </div>
                <div class="my-5" style="height: 300px;background-color: black">
                    <div class="d-flex justify-content-around align-items-center h-100 text-light container">
                        <div class="text-center">
                            <div class="font-weight-bold">
                                <h5>
                                    JE VEUX ENVOYER
                                </h5>
                            </div>
                            <div class="my-3">
                                Envoyez vos colis à bon marché partout dans le monde à travers des particuliers de confiance
                            </div>
                            <div class="text-center fa-lg">
                                <button class="btn font-weight-bold" style="background-color: rgb(255, 80, 80);color: white">
                                    <i class="far fa-paper-plane mr-2"></i>
                                    ENVOYER
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <div>
                                <h5>JE VEUX TRANSPORTER</h5>
                            </div>
                            <div class="my-3">
                                Amortissez vos frais de voyage en transportant des colis pour des particuliers de confiance.
                            </div>
                            <div class="text-center fa-lg">
                                <button class="btn font-weight-bold" style="background-color: rgb(255, 80, 80);color: white">
                                    <i class="fas fa-dolly mr-2"></i>
                                    TRANSPORTER
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="my-5 py-3" style="background-color: black">
               <div class="d-flex justify-content-around align-items-center h-100 text-light container">
                   <div class="text-center">
                       <div class="font-weight-bold">
                           <h5>
                               SOCIAL
                           </h5>
                       </div>
                       <div class="my-3">
                           Renforce nos liens sociaux et solidaires entre Africains et met notre principe de partage en avant.
                       </div>
                       <div class="text-center">
                           <i class="fa fa-handshake fa-6x"></i>
                       </div>
                   </div>
                   <div class="text-center">
                       <div class="font-weight-bold">
                           <h5>
                               ECONOMIQUE
                           </h5>
                       </div>
                       <div class="my-3">
                           Envoyez vos colis partout dans le monde en moins de 24H et 30 fois moins cher que les prix du marché.                        </div>
                       <div class="text-center">
                           <i class="fas fa-hand-holding-usd fa-6x"></i>
                       </div>
                   </div>
                   <div class="text-center">
                       <div class="font-weight-bold">
                           <h5>
                               SECURITE
                           </h5>
                       </div>
                       <div class="my-3">
                           Pour renforcer la confiance, nous vérifions de manière systèmatique tous les profils.                        </div>
                       <div class="text-center">
                           <i class="fas fa-shield-alt fa-6x"></i>
                       </div>
                   </div>
               </div>
           </div>
               <div >
           </div>
        </div>
    </body>

@endsection
