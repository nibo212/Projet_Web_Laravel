@extends ('layout')


@section('title')

<title>Entreprises - TTS@Cesi</title>

@endsection('title')

@section('content')
<main class="container">
        <br><br>
            <div class="container-flex">
                
                
        <fieldset><!--DEBUT ZONE DE RECHERCHE-->
            <legend>Recherche</legend><br>

            

        <div class="row">
            
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
  
         @include('partials.search')
        </div> 
            
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
        
        </div>
            
          </form>
        </fieldset><!--FIN ZONE DE RECHERCHE-->
            

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($data as $key => $value)
    @if ($value->entreprise_visible ===0 || 1)
    <div class="container-flex boxsearch">
            <div class="row boxcontent">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
            </div>
            
            
                <div class="col-lg-7 col-md-6 col-sm-5 col-xs-8">
                    <h5><a href="#"><strong>{{ $value->entreprise_nom }}</strong></a></h5>
                    <h6><a href="#">{{ $value->entreprise_secteur }}</a></h6>
                    <p class="descr"><td>{{ $value->localite_ville }}</td></p>
                    <p class="descr"><td>{{ $value->localite_cp }}</td></p>
                    <p class="descr"><td>{{ $value->entreprise_description }}</td></p>
                   
                </div>
                

                <div class="heart col-lg-2 col-md-2 col-sm-2 col-xs-4">
                    <a href="#"><i class="far fa-heart fa-3x "></i></a>

                    <button type="button" href="#" class="postule btn butt btn-primary">Je postule</button>
                    </div>
                    <div>
                    <form action="{{ route('Entreprise.destroy',$value->entreprise_id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('Entreprise.create') }}"> Create New Post</a>
                    <a class="btn btn-info" href="{{ route('Entreprise.show',$value->entreprise_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('Entreprise.edit',$value->entreprise_id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>

            </div>

        </div>
        </br>
        </br>
        @endif
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
