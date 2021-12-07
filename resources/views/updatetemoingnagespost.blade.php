<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form - Free Bulma template</title>
	<link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
	<!-- Bulma Version 0.9.0-->
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
</head>

<body>
	<!-- START NAV -->
	<nav class="navbar">
		<div class="container">
			<div class="navbar-brand">
				
				<span class="navbar-burger burger" data-target="navbarMenu">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
			<div class="navbar-menu">
            <div class="navbar-item">
                
            </div>
        </div>
        <div class="navbar-item is-flex-touch">
            <a class="navbar-item" href="/ajoutertemoignage">
                <i class="material-icons">person_outline</i>
            </a>
        </div>
    </div>
		</div>
	</nav>
	<!-- END NAV -->    
	<section class="hero is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="columns is-8 is-variable ">
					<div class="column is-two-thirds has-text-left">
						<h1 class="title is-1">Modification du Temoignage</h1>
						<p class="is-size-4">Aller sur mes Reseaux.<br/></p>
			
						<div class="social-media">
	
  </style
							<a href="https://facebook.com" target="_blank" class="button is-light is-large"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href="https://instagram.com" target="_blank" class="button is-light is-large"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://twitter.com" target="_blank" class="button is-light is-large"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div>
					</div>
                 
					<div class="column is-one-third has-text-left">
                    <form method="post" action="/updatetemoingnagespost" enctype="multipart/form-data">
                    {{ csrf_field() }}
					
					<div class="field">
							<label class="label">Code</label>
							<div class="control">
								<input class="input is-small" type="text"  name="code" value="{{$temoignage->code}}">
							</div>
						</div>
						<div class="field">
							<label class="label">Video</label>
							<div class="control">
								<input class="input is-small" type="file"  name="video">
							</div>
						</div>
						<div class="field">
							<label class="label">Image</label>
							<div class="control">
								<input class="input is-small" type="file"  name="image">
							</div>
						</div>
						<div class="field">
							<label class="label">Message</label>
							<div class="control">
                            <input class="input is-small"  type="text" name="description" value="{{$temoignage->description}}">
							</div>
						</div>
						<div class="control">
							<button type="submit" class="button is-block is-primary is-fullwidth is-small">Send Message</button>
						</div>
</form>
					</div>

				</div>
			</div>
		</div>
	</section>

</body>

</html>