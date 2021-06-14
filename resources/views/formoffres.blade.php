@extends('layout')

@section('title')

<title>Edition des offres - TTS@Cesi</title>

@endsection('title')

@section('content')

<main class="container">
    <br><br>
    
    <legend>Edition des offres</legend>
    <form action="#" method="get">
        <div class="row">
            <div class="form-group col-md-6 col-12">
              <input type="text" class="form-control" id="nomo" aria-describedby="nomo" placeholder="Nom de l'offre">
            </div>
            
            <div class="form-group col-md-6 col-12">
              <input type="text" class="form-control" id="Entreprise" aria-describedby="Entreprise" placeholder="Entreprise">
            </div>
            
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="cp" aria-describedby="cp" placeholder="Code Postal">
            </div>
            
            <div class="form-group col-md-3 col-6">
                <select id="centre" name="centre" class="form-control">
                    <option value="default">Ville</option>
                    <option value="1">Strasbourg</option>
                    <option value="2">Aix</option>
                    <option value="3">Arras</option>
                    <option value="4">Nancy</option>
                </select> <!--Variable session-->
            </div>
            
            <div class="form-group col-md-3 col-6">
              <input type="date" class="form-control" id="date">
            </div>
            
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="lenght" aria-describedby="lenght" placeholder="Durée du stage">
            </div>
            
            <div class="form-group col-md-12 col-12">
              <input type="text" class="form-control" id="comp" aria-describedby="comp" placeholder="Compétences">
            </div>
            
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="remun" aria-describedby="remun" placeholder="Rémunération">
            </div>
            
            <div class="form-group col-md-3 col-6">
                <div class="row">
                <div class="col-3">
                    <input type="checkbox" id="promot" name="promot" value="2">
                    <label for="promot">A2</label>
                </div>
            
                <div class="col-3">
                    <input type="checkbox" id="promot" name="promot" value="3">
                    <label for="promot">A3</label>
                </div>
                
                <div class="col-3">
                    <input type="checkbox" id="promot" name="promot" value="4">
                    <label for="promot">A4</label>
                </div>
                
                <div class="col-3">
                    <input type="checkbox" id="promot" name="promot" value="5">
                    <label for="promot">A5</label>
                </div>
                </div>
            </div>
            
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="nbplaces" aria-describedby="nbplaces" placeholder="Nombre de places">
            </div>
            
            <div class="col-md-3 col-6">
                <div class="row fa-2x">
            <div class="form-group col-3">
                <button type="submit"><i class="fas fa-plus"></i></button>
            </div>
            
            <div class="form-group col-3">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            
            <div class="form-group col-3">
                <button type="submit"><i class="fas fa-edit"></i></button>
            </div>
            
            <div class="form-group col-3">
                <button type="submit"><i class="fas fa-trash"></i></button>
            </div>
            </div>
            </div>
            
        </div>
    </form><br><br>
</main>

@endsection('content')