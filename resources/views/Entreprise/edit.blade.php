@extends ('layout')


@section('title')

<title>Entreprises - TTS@Cesi</title>

@endsection('title')

@section('content'))
<main class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Entreprise.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    

    <form action="{{route('Entreprise.update',$Entreprise->entreprise_id)}}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name</strong>
                    <input type="text" name="name" value="{{ $Entreprise->entreprise_nom }}" class="form-control" placeholder="Title">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email</strong>
                    <input type="text" name="email" value="{{ $Entreprise->email }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>entreprise secteur</strong>
                    <input type="text" name="entreprise_secteur" value="{{ $Entreprise->entreprise_secteur }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nombre stagiares</strong>
                    <input type="text" name="entreprise_nb_stagiaires" value="{{ $Entreprise->entreprise_nb_stagiaires }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>entreprise description</strong>
                    <input type="text" name="entreprise_description" value="{{ $Entreprise->entreprise_description }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>entreprise visible</strong>
                    <input type="text" name="entreprise_visible" value="{{ $Entreprise->entreprise_visible }}" class="form-control" placeholder="Title">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    </main>
@endsection
