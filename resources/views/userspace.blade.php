@extends ('layout')


@section('title')

<title>Espace Utilisateur - TTS@Cesi</title>

@endsection('title')


@section('content')

<main class="container-fluid"> <br><br><br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-6">
                <h4>Bonjour {name}</h4>
                <br>
                <p class="para">
                    {nb_annonce} annonces sont en ligne, dont {nb_stage} de propositions de stage et {nb_alternance} d'alternance.<br><br>Que souhaitez vous faire aujourd'hui ?
                </p>
            </div>
            
            <div class="col-md-5 col-sm-6">
                <div class="row">
                    <div class="col-6 espacebutton">
                        <br>
                        <a href="#">
                        <i class="fas fa-briefcase fa-4x"></i>
                        <p></p>
                        <p class="para">Offres d'emploi</p>
                        </a>
                    </div>
                    <div class="col-6 espacebutton">
                        <br>
                        <a href="#">
                        <i class="far fa-building fa-4x"></i>
                        <p></p>
                        <p class="para">Entreprises</p>
                        </a>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-6 espacebutton">
                        <br>
                        <a href="/userspace/candidatures">
                        <i class="fas fa-paperclip fa-4x"></i>
                        <p></p>
                        <p class="para">Candidatures</p>
                        </a>
                    </div>
                    <div class="col-6 espacebutton">
                        <br>
                        <a href='#'>
                        <i class="fas fa-paste fa-4x"></i>
                        <p></p>
                        <p class="para">Vos informations personnelles</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            
        </div>
        <br>
    </main>

@endsection('content')
