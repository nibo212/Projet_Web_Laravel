@extends ('layout')


@section('title')

<title>Page stage - TTS@Cesi</title>

@endsection('title')


@section('content')

    <main class="container-fluid"> <br><br>
        <div class="row">
            <div class="container-fluid annonce col-md-8 col-sm-6">
                <h3>{Intitulé du poste} - {Entreprise}</h3>
                <p></p>
                <p class="para"> {Texte annonce}
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.<br>Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. <br> Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet</p>
                <br>
            </div>
        
            <div class="container-fluid annonce col-md-4 col-sm-6">
                <img src="{{asset('/assets/images/logoplaceholderplace.jpg')}}" alt="entreprise" style="width:100%">
                <p></p>
                <p class="para">
                    <strong>Ville :</strong> {Localité} <br>
                    <strong>Compétences :</strong> {Liste compétences}<br>
                    <strong>Promotions concernées :</strong> {Promo} <br>
                    <strong>Durée :</strong> {Durée} <br>
                    <strong>Base de rémunération :</strong> {Moula} <br>
                    <strong>Date de l'offre :</strong> {Date} <br>
                    <strong>Note générale de l'entreprise :</strong> {Note} <br>
                </p>
                <img src="{{asset('/assets/images/Stats.png')}}" href="#" alt="Statistiques de l'entreprise" class='stats'>
                <p></p>
                <button type="button" href="#" class="container-fluid postule btn btn-primary">Je postule</button>
            </div>
        
        </div>
            <br>
    </main>

@endsection('content')