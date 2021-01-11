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
    </body>

@endsection
