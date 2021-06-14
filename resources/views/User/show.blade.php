

@extends ('layout')


@section('title')

<title>Page stage - TTS@Cesi</title>

@endsection('title')


@section('content')

    <main class="container-fluid"> <br><br>

    
        <div class="row">
            <div class="container-fluid annonce col-md-8 col-sm-6">
             

            

                <h3>{{ $User->name}} </h3>
                
                <p>{{ $User->email }}</p>

                <strong>Mot de passe:</strong> {{ $User->password }} <br>
                    <!-- <strong>Compétences :</strong> {Liste compétences}<br> -->
                    <strong>Centre :</strong> {{ $User->user_centre }} <br>
                    <strong>Role :</strong> {{ $User->user_role }} (en jours ouvrés) <br>
                    <strong>ID de la promo :</strong> {{ $User->promo_id }}<br>
              
            </div>

            

            <div class="container-fluid annonce col-md-4 col-sm-6">
                <img src="{{asset('/assets/images/logoplaceholderplace.jpg')}}" alt="entreprise" style="width:100%">
            
            </div>
        </div>
            <br>
    </main>

@endsection('content')

