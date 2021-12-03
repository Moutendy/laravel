<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/instaAlbum.css">
</head>

<body>
    <div class="navbar is-inline-flex is-transparent">
        <div class="navbar-brand">
          
        </div>
        <div class="navbar-menu">
            <div class="navbar-item">
                
            </div>
        </div>
        <div class="navbar-item is-flex-touch">
            <a class="navbar-item" href="/ajouterformation">
                <i class="material-icons">person_outline</i>
            </a>
        </div>
    </div>
    <div class="columns body-columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="card">
                <div class="header">
                    <div class="media">
                        <div class="media-left">
            
                        </div>
                        <div class="media-content">
                          
                        </div>
                    </div>
                </div>
                <div >
                <figure class="image is-16by9">
                <iframe class="has-ratio" width="640" height="360" src="/storage/{{$video->video}}" frameborder="0" allowfullscreen></iframe>
</figure>
                </div>
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div class="level-item has-text-centered">
                                <a href="">
                                    <i class="material-icons">favorite_border</i>
                                </a>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <a href="">
                                        <i class="material-icons">chat_bubble_outline</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                      
                        <a>{{$video->libelle}}  </a>.
                        <a href="#">{{$video->description}}</a>
                    
                        <br>
                        <time datetime="2018-1-1"></time>
                    </div>
                </div>
        </div>
    </div>

</body>
</html>