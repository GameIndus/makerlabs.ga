<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MakerLabs | Plateforme collaborative de création de jeux vidéo en ligne</title>

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name = "viewport" content="width=device-width,initial-scale = 1, user-scalable = no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" href="/logo/ios-v1.png" />
	<link rel="icon" type="image/png" href="/logo/ios-v1.png" />


	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/slideshow.css">

	<script type="text/javascript" src="/js/modernizr.js"></script>
</head>
<body>
	<header <?php if(!$header): echo 'class="not_index"'; endif; ?>>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<a href="/home" title="MakerLabs"><div id="logo"></div></a>
				</div>
				<div class="col-md-4 col-md-offset-3">
					<div id="menu">
						<a href="/home" title="Accueil"><button type="button" class="btn btn-link">Accueil</button></a>
						<a href="/blog" title="Blog"><button type="button" class="btn btn-link">Blog</button></a>
						<a href="/connexion" title="Connexion"><button type="button" class="btn btn-link">Connexion</button></a>
						<a href="/inscription" title="Inscription" class="blue"><button type="button" class="btn btn-primary">Inscription</button></a>
					</div>
				</div>
			</div>
			<div class="slideshow" id="slideshow">
				<ol class="slides">
					<li class="current">
						<div class="description">
							<h2>Créez votre jeu vidéo</h2>
							<p>MakerLabs est un éditeur de jeux vidéo collaboratif, gratuit et en ligne ! <br><a href="/inscription" title="Essayez-le dès maintenant.">-> Essayez-le dès maintenant.</a></p>
						</div>
						<div class="tiltview col">
							<a href="/home"><img src="http://placehold.it/600x338"/></a>
							<a href="/home"><img src="http://placehold.it/600x338"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Des jeux vidéo natifs</h2>
							<p>Les jeux vidéo crées grâce à MakerLabs seront compatibles Windows, Mac, Linux, mobiles et tablettes... !</p>
						</div>
						<div class="tiltview row">
							<a href="/home"><img src="http://placehold.it/300x470"/></a>
							<a href="/home"><img src="http://placehold.it/300x470"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Tilted Items</h2>
							<p>The perspective view is achieved by adding a perspective value to the slide list item and tilting a division that contains the two screenshots.</p>
						</div>
						<div class="tiltview col">
							<a href="http://minimalmonkey.com/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/5_screen.jpg"/></a>
							<a href="http://www.herschelsupply.com/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/6_screen.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Column or Row</h2>
							<p>The items in the tilted container are either laid out in a column or in a row. For some directions we need to adjust the animation delays for the items, since we don't want the items to overlap each other when they move in or out.</p>
						</div>
						<div class="tiltview row">
							<a href="http://grovemade.com/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/1_mobile.jpg"/></a>
							<a href="https://tsovet.com/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/2_mobile.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Responsiveness</h2>
							<p>For smaller screens, the items on the right hand side will become less opaque and serve as decoration only. The focus will be on the description which will occupy all the width.</p>
						</div>
						<div class="tiltview col">
							<a href="http://pexcil.com/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/3_screen.jpg"/></a>
							<a href="http://foodsense.is/"><img src="http://tympanus.net/Tutorials/TiltedContentSlideshow/img/4_screen.jpg"/></a>
						</div>
					</li>
					<li>
						<div class="description">
							<h2>Un magasin complet</h2>
							<p>Vous avez à votre disposition un magasin d'assets complet pour vos jeux comprenant sons, sprites, models 3D...</p>
						</div>
						<div class="tiltview row">
							<a href="/home"><img src="imgs/slideshow-5_0.png"/></a>
							<a href="/home"><img src="http://placehold.it/300x470"/></a>
						</div>
					</li>
				</ol>
			</div><!-- /slideshow -->
		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo $content_for_layout; ?>
				</div>
			</div>
		</div>
	</main>
	<footer>
		
	</footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/js/classie.js"></script>
	<script type="text/javascript" src="/js/slideshow.js"></script>
	<script type="text/javascript">
		new TiltSlider( document.getElementById( 'slideshow' ) );
	</script>
</body>
</html>