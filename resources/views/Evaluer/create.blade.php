@extends ('layout')


@section('title')

<title>Entreprises - TTS@Cesi</title>

@endsection('title')

@section('content')

<main class="container">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
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

<form action="{{ route('Evaluer.store') }}" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>entreprise evaluation </strong>
                <input type="text" name="entreprise_evaluation" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom entreprise</strong>
                <input type="text" name="entreprise_id" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID USER</strong>
                <input type="text" name="id" class="form-control" placeholder="">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

</main>
@endsection
