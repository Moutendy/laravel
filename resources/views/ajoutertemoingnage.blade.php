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
			<div id="navbarMenu" class="navbar-menu">
				<div class="navbar-end">
					<h1 class="title is-4"><a class="navbar-item is-active" href="/">Home</a><h1>
					
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
						<h1 class="title is-1">Temoignage</h1>
						<p class="is-size-4">Jaouter votre temoingnage ne toutes liberter.<br/></p>
			
						<div class="social-media">
                        <h1 class="title is-6">Suivez nous sur :</h1>
							<a href="https://facebook.com" target="_blank" class="button is-light is-large"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href="https://instagram.com" target="_blank" class="button is-light is-large"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="https://twitter.com" target="_blank" class="button is-light is-large"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</div>
					</div>
                 
					<div class="column is-one-third has-text-left">
                    <form method="post" action="/envoitemoignage" enctype="multipart/form-data">
                    {{ csrf_field() }}
						<div class="field">
							<label class="label">Name</label>
							<div class="control">
								<input class="input is-medium" type="text" name="code">
							</div>
						</div>
						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input class="input is-medium" type="text"  name="lien">
							</div>
						</div>
						<div class="field">
							<label class="label">Message</label>
							<div class="control">
								<textarea class="textarea is-medium" name="description"></textarea>
							</div>
						</div>
						<div class="control">
							<button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Send Message</button>
						</div>
</form>
					</div>

				</div>
			</div>
		</div>
	</section>

</body>

</html>