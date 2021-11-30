<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Free Bulma template</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css">
  </head>

  <body>
    <section class="container">
      <div class="columns is-multiline">
        <div class="column is-8 is-offset-2 register">
          <div class="columns">
            <div class="column left">
              <h2 class="title is-3">La liste des livres</h2>
              <h3 class="subtitle colored is-4">vous pouvz ajouter nos livre en ligne.</h3>
              <p>
              <ul>
    @foreach($livre as $livres)
    <li>{{$livres['libelle']}}</li>
    <li>{{$livres->code}}</li>
    <li>{{$livres->description}}</li>
    <li>{{$livres->lien}}</li>
  
    <li><a href="/livreaffiche/5">suprimer</a></li>
    @endforeach
</ul>
              </p>
            </div>
            <div class="column right has-text-centered">
              <h1 class="title is-4">Ajouter un livre</h1>
              <p class="description">Ajouter les information du livre </p>

              <form method="post" action="/livre">
             
            {{ csrf_field() }}

                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="code" placeholder="code" value="{{$livres->code}}">
                    @if($errors->has('code'))
                    <p class="subtitle colored is-4">{{$errors->first('code')}}</p>
                    @endif
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="libelle" placeholder="libelle">
                    @if($errors->has('libelle'))
                    <p class="subtitle colored is-4">{{$errors->first('libelle')}}</p>
                    @endif
                  </div>
                </div>
                
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="description" placeholder="description">
                    @if($errors->has('description'))
                    <p class="subtitle colored is-4">{{$errors->first('description')}}</p>
                    @endif
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="lien" placeholder="lien">
                    @if($errors->has('lien'))
                    <p class="subtitle colored is-4">{{$errors->first('lien')}}</p>
                    @endif
                  </div>
                </div>
                <button class="button is-block is-primary is-fullwidth is-medium">Submit</button>
                <br />
                <small><em>.</em></small>
              </form>
            </div>
          </div>
        </div>
        <div class="column is-8 is-offset-2">
          <br>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <span class="icon">
                  <i class="fab fa-twitter"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-facebook"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-instagram"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="level-right">
              <small class="level-item" style="color: var(--textLight)">
                &copy; Super Cool Website. All Rights Reserved.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <style>
    :root {
      --brandColor: hsl(166, 67%, 51%);
      --background: rgb(247, 247, 247);
      --textDark: hsla(0, 0%, 0%, 0.66);
      --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
      background: var(--background);
      height: 100vh;
      color: var(--textDark);
    }

    .field:not(:last-child) {
      margin-bottom: 1rem;
    }

    .register {
      margin-top: 10rem;
      background: white;
      border-radius: 10px;
    }

    .left,
    .right {
      padding: 4.5rem;
    }

    .left {
      border-right: 5px solid var(--background);
    }

    .left .title {
      font-weight: 800;
      letter-spacing: -2px;
    }

    .left .colored {
      color: var(--brandColor);
      font-weight: 500;
      margin-top: 1rem !important;
      letter-spacing: -1px;
    }

    .left p {
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right .title {
      font-weight: 800;
      letter-spacing: -1px;
    }

    .right .description {
      margin-top: 1rem;
      margin-bottom: 1rem !important;
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right small {
      color: var(--textLight);
    }

    input {
      font-size: 1rem;
    }

    input:focus {
      border-color: var(--brandColor) !important;
      box-shadow: 0 0 0 1px var(--brandColor) !important;
    }

    .fab,
    .fas {
      color: var(--textLight);
      margin-right: 1rem;
    }

  </style>

</html>