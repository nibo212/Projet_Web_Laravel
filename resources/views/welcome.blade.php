@extends ('layout')


@section('title')

<title>Bienvenue - TTS@Cesi</title>

@endsection('title')

@section('content')
<br>
<div class="container-fluid" style="width:80%">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
  <img class="d-block w-100" src="assets/images/CESI_Corporate_Ecole_Ingenieurs.png" alt="Cesi Homepage">
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="assets/images/company%20office.jpg" alt="Office">
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="assets/images/Abroad.jpg" alt="Abroad">
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="assets/images/Pro%20office.jpg" alt="Office">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Précédent</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Suivant</span>
</a>
</div>
    </div><br><br>
    <div class="container-fluid">
    <div class="row">
        <div class="container-fluid col-md-6" style="padding:0px">
        <div class="buttonbox">
            <a href="offres/stages">Je recherche un stage</a>
            </div>
           <div class="buttonbox">
            <a href="offres/apprentissage">Je recherche un apprentissage</a>
            </div>
        </div>
        <div class="container-fluid col-md-6" style="padding:0px">
            <div class="buttonbox">
            <a href="contact/entreprise">Je propose un poste</a>
            </div>
            <div class="buttonbox">
            <a href="contact/aide">Je souhaite de l'aide</a>
            </div>
        </div>
        </div>
    </div>
    

    @endsection