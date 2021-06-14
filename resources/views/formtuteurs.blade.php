@extends('layout')

@section('title')

<title>Edition des tuteurs -TTS@Cesi</title>

@endsection('title')

@section('content')

<main class="container">
    <br><br>
    
    <legend>Ajouter un tuteur</legend>
    <form action="#" method="get">
        <div class="row">
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="nomt" aria-describedby="nomt" placeholder="Nom">
            </div>
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="prenomt" aria-describedby="prenomt" placeholder="Prénom">
            </div>
            
            <div class="form-group col-md-2 col-5">
                <select id="centre" name="centre" class="form-control">
                    <option value="default">Centre</option>
                    <option value="A2">Strasbourg</option>
                    <option value="A3">Aix</option>
                    <option value="A4">Arras</option>
                    <option value="A5">Nancy</option>
                </select> <!--Variable session-->
            </div>
            
            <div class="form-group col-md-3 col-5">
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
            
            <div class="form-group col-md-1 col-2">
                <button type="submit"><i class="fas fa-plus"></i></button>
            </div>
            
        </div>
    </form><br><br>
    
    <legend>Rechercher un tuteur</legend>
    <form action="#" method="get">
        <div class="row">
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="nomt" aria-describedby="nomt" placeholder="Nom">
            </div>
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="prenomt" aria-describedby="prenomt" placeholder="Prénom">
            </div>
            
            <div class="form-group col-md-2 col-5">
                <select id="centre" name="centre" class="form-control">
                    <option value="default">Centre</option>
                    <option value="A2">Strasbourg</option>
                    <option value="A3">Aix</option>
                    <option value="A4">Arras</option>
                    <option value="A5">Nancy</option>
                </select> <!--Variable session-->
            </div>
            
            <div class="form-group col-md-3 col-5">
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
            
            <div class="form-group col-md-1 col-2">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            
        </div>
    </form>
        
        <br><br>
        
        <legend>Liste des tuteurs</legend>
    <form action="#" method="post">
        <div class="row">
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="nomt" aria-describedby="nomt" placeholder="Nom">
            </div>
            <div class="form-group col-md-3 col-6">
              <input type="text" class="form-control" id="prenomt" aria-describedby="prenomt" placeholder="Prénom">
            </div>
            
            <div class="form-group col-md-2 col-4">
                <select id="centre" name="centre" class="form-control">
                    <option value="default">Centre</option>
                    <option value="A2">Strasbourg</option>
                    <option value="A3">Aix</option>
                    <option value="A4">Arras</option>
                    <option value="A5">Nancy</option>
                </select> <!--Variable session-->
            </div>
            
            <div class="form-group col-md-3 col-5">
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
            
            <div class="form-group col-md-1 col-3">
                <button type="submit"><i class="fas fa-edit"></i></button>
                <button type="reset"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>
        </form>
</main>

@endsection('content')