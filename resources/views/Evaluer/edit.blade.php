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
                <a class="btn btn-primary" href="{{ route('Evaluer.index') }}"> Back</a>
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

    

    <form action="{{route('Evaluer.update',$Evaluer->evaluer_id)}}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="entreprise_evaluation" value="{{ $Evaluer->entreprise_evaluation }}" class="form-control" placeholder="Title">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Entreprise_id</strong>
                    <input type="text" name="entreprise_id" value="{{ $Evaluer->entreprise_id }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User_id</strong>
                    <input type="text" name="id" value="{{ $Evaluer->id }}" class="form-control" placeholder="Title">
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    </main>
@endsection
