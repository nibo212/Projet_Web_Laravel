@extends('layout')

@section('title')

<title>Candidatures</title>

@endsection('title')

@section('content')

<main class='container-fluid'>
<br>  <br>
    <div class="container">

    <legend><i class="far fa-envelope"></i> Candidatures</legend>
    <legend><i></i> Voici les entreprises pour lesquelles vous avez postulé:</legend>
    <br>

    @foreach ($offres=auth()->user()->offres as $key)

    <div class="row">

    <div class="col-md-4 col-sm-6 boxsearch">
        <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
        <h5><strong>{{ $key->entreprise->entreprise_nom }} - {{ $key->entreprise->entreprise_description }}</strong></h5>
        <h6>{{ $key->entreprise->email }} </h6>
        <a  href="{{ route('Entreprise.show',$key->entreprise_id) }}" class="postule btn butt btn-primary">Voir plus</a>
        <a  href="{{ url('/OffreE/destroy/'.$key->entreprise_id )}}">Annuler la candidature</a>
    </div>
    
    </div>
    @endforeach
    <br><br>
    
    <legend><i class="fas fa-heart"></i> Wish-list</legend>
    <legend><i></i> Voici les offres que vous avez ajouté à votre Wish-list:</legend>
    <br>

    @foreach ($offres=auth()->user()->offres as $key)

    <div class="row">

    <div class="col-md-4 col-sm-6 boxsearch">
        <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
        <h5><strong>{{ $key->offre_titre }} - {{ $key->offre_description }}</strong></h5>
        <h6>{{ $key->entreprise->entreprise_nom }} </h6>
        <a  href="{{ route('Offre.show',$key->offre_id) }}" class="postule btn butt btn-primary">Voir plus</a>
    </div>
    
    </div>
    @endforeach
    </div>

</main>

@endsection('content')
