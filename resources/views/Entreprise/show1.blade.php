@extends ('layout')


@section('title')

<title>Entreprises - TTS@Cesi</title>

@endsection('title')

@section('content')

<main class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Entreprise.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name Entreprise</strong>
                {{ $Entreprise->entreprise_nom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {{ $Entreprise->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise secteur</strong>
                {{ $Entreprise->entreprise_secteur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise nb stagiaires</strong>
                {{ $Entreprise->entreprise_nb_stagiaires }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise Description:</strong>
                {{ $Entreprise->entreprise_description }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise_visible</strong>
                {{ $Entreprise->entreprise_visible}}
            </div>
        </div>
    </div>

    </main>

    
@endsection
