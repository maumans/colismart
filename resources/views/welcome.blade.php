@extends("layouts/app")

@section("css")
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section("content")

    <body style="background:url({{asset("img/welcomeBg.jpg")}}) no-repeat;background-size: auto; ">
        <div id="welcomeDivPrincipale">
           <div class="text-light d-md-flex py-5 container">
               <div class="flex-grow-1 mr-5" id="mau">
                   <img src="{{asset("img/welcomeLivreur.png")}}" class="w-75" alt="">
               </div>
               <div class="flex-grow-1">
                   <div class="mb-4">
                       <h1 class="smart">
                           Envoi de colis de façon Smart
                           <div style="height: 4px;width: 50%;background-color: white;margin-bottom: 10px"></div>
                           <div style="height: 4px;width: 45%;background-color: white; margin-bottom: 10px"></div>
                           <div style="height: 4px;width: 40%;background-color: white; margin-bottom: 10px"></div>
                           <div style="height: 4px;width: 35%;background-color: white; margin-bottom: 10px"></div>
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
    </body>

@endsection
