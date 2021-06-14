@extends('layout')

@section('title')

<title>Stages - TTS@Cesi</title>

@endsection('title')




@section('content')
<main class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Offre.index') }}"> Back</a>
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

    <form action="{{ route('Offre.update',$Offre->offre_id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre promotion</strong>
                    <input type="text" name="offre_promotion" value="{{ $Offre->offre_promotion }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre duree</strong>
                    <input type="text" name="offre_duree" value="{{ $Offre->offre_duree }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre_remuneration</strong>
                    <input type="text" name="offre_remuneration" value="{{ $Offre->offre_remuneration }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre date</strong>
                    <input type="text" name="offre_date" value="{{ $Offre->offre_date }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre places</strong>
                    <input type="text" name="offre_place" value="{{ $Offre->offre_place }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>offre titre</strong>
                    <input type="text" name="offre_titre" value="{{ $Offre->offre_titre }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="offre_description"  placeholder="Detail">{{ $Offre->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</br>
</br>
</br>

</main> 

@endsection
