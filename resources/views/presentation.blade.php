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
              <h2 class="subtitle colored is-10">liste des presentations.</h2>
              <table class="table table is-striped is-small">
  <thead>
    <tr>
      <th><abbr title="libelle">libelle</abbr></th>
      <th><abbr title="code">code</abbr></th>
      <th><abbr title="description">description</abbr></th>
      <th><abbr title="lien">lien</abbr></th>
    </tr>
  </thead>
  <tfoot> 
<tfoot>
</table>
            </div>
      
            <div class="column right has-text-centered">
              <h1 class="title is-4">Ajouter une Presentation</h1>
              <p class="description">nouvelle Presentation</p>
              <form form method="post" action="/envoipresentation">
              {{ csrf_field() }}
                <div class="field">
                  <div class="control">
                    <input class="input is-small" type="text" name="code" placeholder="code">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="input is-small" type="text" name="libelle" placeholder="libelle">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-small" type="text" name="description" placeholder="description">
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-small" type="text" name="lien" placeholder="lien">
                  </div>
                </div>
                <button class="button is-block is-primary is-fullwidth is-small">Submit</button>
                <br />
                <small><em>Lorem ipsum dolor sit amet consectetur.</em></small>
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