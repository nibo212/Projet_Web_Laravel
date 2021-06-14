@extends ('layout')


@section('title')

<title>Connexion - TTS@Cesi</title>

@endsection('title')


<!-- Vue non utilisée, à utiliser comme exemple puis supprimer-->
@section('content')

<article class="connexion">
        <br><br><br><br><br><br>
            <div class="container">
        <fieldset>
            <legend>Authentification</legend>
            <br>
        <form action="#" method="post">
            <div class="form-group">
              <label for="femail">Addresse mail</label>
              <input type="email" class="form-control" id="femail" aria-describedby="emailHelp" placeholder="Entrez votre mail">
              <small id="emailHelp" class="form-text text-muted">Utilisez votre e-mail viacesi</small>
            </div>

            <div class="form-group">
              <label for="fpw">Mot de passe</label>
              <input type="password" class="form-control" id="fpw" placeholder="Mot de passe">
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
        </fieldset>
                <br><br><br><br><br><br>
            </div>
</article>

@endsection
