@extends('layout')

@section('title')

<title>Stages - TTS@Cesi</title>

@endsection('title')


@section('content')

<main class="container">

        <br><br>
            <div class="container-flex">


        <fieldset><!--DEBUT ZONE DE RECHERCHE-->
            <legend>Recherche</legend><br>

        
        <div class="row">

            <div class="form-group col-lg-12 col-md-12 col-sm-12">

              @include('partials.searchoffre')
            </div> <!--API-->
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('User.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
        @foreach ($data as $key => $value)
        <div class="container-flex boxsearch">
    
            <div class="row boxcontent">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
                </div>


                <div class="col-lg-7 col-md-6 col-sm-5 col-xs-8">
                    <h5><a href="{{ route('User.show',$value->id) }}"><strong>{{ $value->offre_titre }}</strong></a></h5>
                    <h6><a href="#">Nom: {{ $value->name }}</a></h6>
                    <p class="descr"><td>email: {{ $value->email }}</td></p>
                    <p class="descr"><td>mot de passe: {{ $value->password }}</td></p>
                    <p class="descr"><td>Centre: {{ $value->user_centre }}</td></p>
                    <p class="descr"><td>ID de la promo: {{ $value->promo_id }}</td></p>
                    
                </div>


                <!-- <div class="heart col-lg-2 col-md-2 col-sm-2 col-xs-4"> -->
                    
                    
                    <div>
                    <form action="{{ route('User.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('User.show',$value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('User.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                   
                    </div>
                </div>
            </div>

        </div>
        </br>
        </br>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
