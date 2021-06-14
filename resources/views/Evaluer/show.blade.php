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
                <a class="btn btn-primary" href="{{ route('Evaluer.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name Entreprise</strong>
                {{ $Evaluer->entreprise_id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID USER</strong>
                {{ $Evaluer->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise description</strong>
                {{ $Evaluer->entreprise_evaluation }}
            </div>
        </div>
       

    </main>

    
@endsection
