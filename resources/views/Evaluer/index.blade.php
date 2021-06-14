@extends ('layout')


@section('title')

<title>Entreprises - TTS@Cesi</title>

@endsection('title')

@section('content')
<main class="container">
        <br><br>
            
            
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
                    <h5><a href="#"><strong>{{ $value->entreprise_id}}</strong></a></h5>
                    <h6><a href="#">{{ $value->id }}</a></h6>
                    <p class="descr"><td>{{ $value->entreprise_evaluation }}</td></p>
                   
                </div>
                

                <div class="heart col-lg-2 col-md-2 col-sm-2 col-xs-4">
                    <a href="#"><i class="far fa-heart fa-3x "></i></a>

                    <button type="button" href="#" class="postule btn butt btn-primary">Je postule</button>
                    </div>
                    <div>
                    <form action="{{ route('Evaluer.destroy',$value->evaluer_id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('Evaluer.create') }}"> Create New Post</a>
                    <a class="btn btn-info" href="{{ route('Evaluer.show',$value->evaluer_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('Evaluer.edit',$value->evaluer_id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                
            </div>
            
        </div>
        </br>
        </br>
        @endforeach
        </br>
        </br>
        </br>
        {!! $data->links() !!}

    </main>
@endsection
