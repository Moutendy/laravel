<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css">
  </head>

  <body>
  {{$video->id}}
  {{$video->libelle}}
  {{$video->description}}
  <figure class="image is-16by9">
 <iframe class="has-ratio" width="640" height="360" src="/storage/{{$video->video}}" frameborder="0" allowfullscreen></iframe>
 </figure>
</body>
</html>