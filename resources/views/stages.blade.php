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

        <form action="#" method="get">


        <div class="row">

            <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <input type="kw" class="form-control" id="femail" aria-describedby="hkw" placeholder="Mots-clé">
            </div> <!--API-->

            <div class="form-group col-lg-3 col-md-4 col-sm-6">
              <input type="text" class="form-control" id="fcp" placeholder="Code postal">
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6">
                <select id="ville" name="ville" class="form-control">
                    <option value="default">Ville (API)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> <!--Variable session-->
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6">
                <select id="promo" name="promo" class="form-control">
                    <option value="default">Promotion</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                </select> <!--Variable session-->
            </div> <!--Cookie-->

            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                <select id="duree" name="duree" class="form-control">
                    <option value="default">Durée</option>
                    <option value="3">3 mois</option>
                    <option value="4">4 mois</option>
                    <option value="5">5 mois</option>
                    <option value="6">6 mois</option>
                </select> <!--Variable session-->
            </div>

            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <select id="remun" name="remun" class="form-control">
                    <option value="default">Base de rémunération</option>
                    <option value="1">{0 à Q1}</option>
                    <option value="2">{Q1 à Médiane}</option>
                    <option value="3">{Médiane à Q3}</option>
                    <option value="4">{Q3 et +}</option>
                </select> 
            </div> <!--Variable session-->

                <div class="form-group col-lg-4 col-md-6 col-sm-6">
                <select id="triage" name="triage" class="form-control">
                    <option value="default">Trier par</option>
                    <option value="1">Date ASC</option>
                    <option value="2">Date DESC</option>
                    <option value="3">Salaire ASC</option>
                    <option value="4">Salaire DESC</option>
                </select> 
            </div> <!--Cookie-->

            <div class="form-group col-lg-4 col-md-6 col-sm-6">
                <select id="nbpg" name="nbpg" class="form-control">
                    <option value="default">Nombre par page</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                    <option value="3">50</option>
                    <option value="4">100</option>
                </select> 
            </div> <!--Cookie-->

            <div class="form-group col-lg-4 col-md-4 col-sm-6">
            <input type="checkbox" id="prog" name="vehicle1" value="Bike">
            <label for="dev">Programmation</label><br>

            <input type="checkbox" id="web" name="vehicle1" value="Bike">
            <label for="web">Développement Web</label><br> 

            <input type="checkbox" id="reseau" name="vehicle1" value="Bike">
            <label for="reseau">Réseau</label><br>
            </div>


            <div class="form-group col-lg-2 col-md-3 col-sm-3 col-xs-6">
            <input type="checkbox" id="C" name="vehicle1" value="Bike">
            <label for="C">C/C++/C#</label><br>

            <input type="checkbox" id="py" name="vehicle1" value="Bike">
            <label for="py">Python</label><br> 

            <input type="checkbox" id="ruby" name="vehicle1" value="Bike">
            <label for="ruby">Ruby</label><br>

            <input type="checkbox" id="net" name="vehicle1" value="Bike">
            <label for="net">.NET</label><br>
            </div> <!--Apparait uniquement si dev est trigger-->


            <div class="form-group col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <input type="checkbox" id="java" name="vehicle1" value="Bike">
            <label for="java">Java</label><br>

            <input type="checkbox" id="go" name="vehicle1" value="Bike">
            <label for="go">Go</label><br> 

            <input type="checkbox" id="r" name="vehicle1" value="Bike">
            <label for="r">R</label><br>

            <input type="checkbox" id="sh" name="vehicle1" value="Bike">
            <label for="sh">Shell</label><br>
            </div> <!--Apparait uniquement si dev est trigger-->


            <div class="form-group col-lg-4 col-md-3 col-sm-6">
            <input type="checkbox" id="front" name="vehicle1" value="Bike">
            <label for="front">Front-End</label><br>

            <input type="checkbox" id="back" name="vehicle1" value="Bike">
            <label for="back">Back-end</label><br> 

            <input type="checkbox" id="full" name="vehicle1" value="Bike">
            <label for="full">Full-Stack</label><br>
            </div>



            <div class="form-group col-lg-12 col-md-12 col-sm-6"><br>
            <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Rechercher</button>
            </div>

        </div>

          </form>
        </fieldset><!--FIN ZONE DE RECHERCHE-->



            <br>    <br>  


            <div class="container-flex boxsearch">
                <div class="row boxcontent">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-12">
                    <img src="../assets/images/logoplaceholderplace.jpg" alt="logo" class="boximg">
                </div>

                    <div class="col-lg-7 col-md-6 col-sm-5 col-8">
                        <h5><a href="#"><strong>Offre - Type</strong></a></h5>
                        <h6><a href="#">Entreprise</a></h6>
                        <p class="descr">Description rapide</p>
                    </div>

                    <div class="heart col-lg-2 col-md-2 col-sm-2 col-4">
                        <a href="#"><i class="far fa-heart fa-2x"></i></a>
                        <button type="button" href="#" class="postule btn butt btn-primary">Je postule</button>
                    </div>

                </div>
            </div>

            <br><br><br><br>
        </div>
    </main>

    @endsection