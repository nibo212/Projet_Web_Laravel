@extends('layout')

@section('title')

<title>Stages - TTS@Cesi</title>

@endsection('title')


@section('content')

<main class="container">
        <br><br>
            <div class="container-flex">


        <fieldset><!--DEBUT ZONE DE RECHERCHE-->
            <legend>Recherche</legend><br>

        
        <div class="row">

            <div class="form-group col-lg-12 col-md-12 col-sm-12">

              @include('partials.searchoffre')
            </div> <!--API-->

            <div class="form-group col-lg-3 col-md-4 col-sm-6">
              <input type="text" class="form-control" id="fcp" placeholder="Code postal">
            </div>
            
            <div class="form-group col-lg-3 col-md-4 col-sm-6">
            
                <select id="Ville" name="Ville" class="form-control">
                    <option value="">Ville </option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select> 
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6">
                <select id="promo" name="promo" class="form-control">
                    <option value="default">Promotion</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                </select> <!--Variable session-->
            </div> <!--Cookie-->

            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                <select id="duree" name="duree" class="form-control">
                    <option value="default">Durée</option>
                    <option value="3">3 mois</option>
                    <option value="4">4 mois</option>
                    <option value="5">5 mois</option>
                    <option value="6">6 mois</option>
                </select> <!--Variable session-->
            </div>

            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <select id="remun" name="remun" class="form-control">
                    <option value="default">Base de rémunération</option>
                    <option value="1">{0 à Q1}</option>
                    <option value="2">{Q1 à Médiane}</option>
                    <option value="3">{Médiane à Q3}</option>
                    <option value="4">{Q3 et +}</option>
                </select>
            </div> <!--Variable session-->

                <div class="form-group col-lg-4 col-md-6 col-sm-6">
                <select id="triage" name="triage" class="form-control">
                    <option value="default">Trier par</option>
                    <option value="1">Date ASC</option>
                    <option value="2">Date DESC</option>
                    <option value="3">Salaire ASC</option>
                    <option value="4">Salaire DESC</option>
                </select>
            </div> <!--Cookie-->

            <div class="form-group col-lg-4 col-md-6 col-sm-6">
                <select id="nbpg" name="nbpg" class="form-control">
                    <option value="default">Nombre par page</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                    <option value="3">50</option>
                    <option value="4">100</option>
                </select>
            </div> <!--Cookie-->

            <div class="form-group col-lg-4 col-md-4 col-sm-6">
            <input type="checkbox" id="prog" name="vehicle1" value="Bike">
            <label for="dev">Programmation</label><br>

            <input type="checkbox" id="web" name="vehicle1" value="Bike">
            <label for="web">Développement Web</label><br>

            <input type="checkbox" id="reseau" name="vehicle1" value="Bike">
            <label for="reseau">Réseau</label><br>
            </div>


            <div class="form-group col-lg-2 col-md-3 col-sm-3 col-xs-6">
            <input type="checkbox" id="C" name="vehicle1" value="Bike">
            <label for="C">C/C++/C#</label><br>

            <input type="checkbox" id="py" name="vehicle1" value="Bike">
            <label for="py">Python</label><br>

            <input type="checkbox" id="ruby" name="vehicle1" value="Bike">
            <label for="ruby">Ruby</label><br>

            <input type="checkbox" id="net" name="vehicle1" value="Bike">
            <label for="net">.NET</label><br>
            </div> <!--Apparait uniquement si dev est trigger-->


            <div class="form-group col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <input type="checkbox" id="java" name="vehicle1" value="Bike">
            <label for="java">Java</label><br>

            <input type="checkbox" id="go" name="vehicle1" value="Bike">
            <label for="go">Go</label><br>

            <input type="checkbox" id="r" name="vehicle1" value="Bike">
            <label for="r">R</label><br>

            <input type="checkbox" id="sh" name="vehicle1" value="Bike">
            <label for="sh">Shell</label><br>
            </div> <!--Apparait uniquement si dev est trigger-->


            <div class="form-group col-lg-4 col-md-3 col-sm-6">
            <input type="checkbox" id="front" name="vehicle1" value="Bike">
            <label for="front">Front-End</label><br>

            <input type="checkbox" id="back" name="vehicle1" value="Bike">
            <label for="back">Back-end</label><br>

            <input type="checkbox" id="full" name="vehicle1" value="Bike">
            <label for="full">Full-Stack</label><br>
            </div>



            <div class="form-group col-lg-12 col-md-12 col-sm-6"><br>
            <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Rechercher</button>
            </div>
            
            @can('CréerOffre')
            <div class="form-group col-lg-12 col-md-12 col-sm-6">
                <a class="btn btn-primary col-lg-12 col-md-12 col-sm-12" href="{{ route('Offre.create') }}"> Create New Post</a>
            </div>
            @endcan

        </div>

          </form>
        </fieldset><!--FIN ZONE DE RECHERCHE-->



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    @foreach ($data as $key => $value)
    <div class="container-flex boxsearch">
    
            <div class="row boxcontent">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
            </div>


                <div class="col-lg-7 col-md-6 col-sm-5 col-xs-8">
                    <h5><a href="{{ route('Offre.show',$value->offre_id) }}"><strong>{{ $value->offre_titre }}</strong></a></h5>
                    <h6><a href="#">{{ $value->entreprise->entreprise_nom }}</a></h6>
                    <p class="descr"><td>{{ $value->offre_description }}</td></p>
                    <p class="descr"><td>{{ $value->offre_date }}</td></p>
                </div>


                <!-- <div class="heart col-lg-2 col-md-2 col-sm-2 col-xs-4"> -->
                    
                    
                    <div>
                    <form action="{{ route('Offre.destroy',$value->entreprise_id) }}" method="POST">
                    <!-- <a class="btn btn-success" href="{{ route('Offre.create') }}"> Create New Post</a> -->
                    <!-- <a class="btn btn-info" href="{{ route('Offre.show',$value->offre_id) }}">Show</a> -->
                    <a class="btn btn-primary" href="{{ route('Offre.edit',$value->offre_id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                    </div>
            </div>

        </div>
        </br>
        </br>
        @endforeach
        </br>
        </br>
        </br>
        {!! $data->links() !!}
    </main>
    <script type="text/javascript">

const cp=document.getElementById("fcp");

cp.addEventListener('input',function(){
	if(cp.value.length==5){
		 var html="";
		 var xhr = new XMLHttpRequest();
		 xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/"+cp.value, true);
		 xhr.onload = function()
		 {
			 if( xhr.status == 200 )
				 {
				 	let array=JSON.parse(xhr.responseText);
				 	array.forEach(function(item){
				 		html+="<option value='"+item.nomCommune+"'>"+item.nomCommune+"</option>";
				 	});

				 }
				 else{}
				 document.getElementById("Ville").innerHTML=html;
		};
		xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
	}
	else if (cp.value.length<5){
		document.getElementById("Ville").innerHTML="";
	}
});


    </script>
@endsection 

