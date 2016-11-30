<?php
$base_url = "";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="fr" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Site template</title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1" id="viewport-meta" />
		<link rel="icon" href="<?php echo $base_url; ?>favicon.ico" />

		<!-- /////// -->
		<!--   CSS   -->
		<!-- /////// -->
		<!-- My CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>media/css/app.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>media/css/print.css" media="print" />
		<!-- //////// -->
		<!--   /CSS   -->
		<!-- //////// -->

		<!-- /////// -->
		<!-- SCRIPTS -->
		<!-- /////// -->

		<!--[if lte IE 9]>
			<script type="text/javascript" src="<?php echo $base_url; ?>media/js/fallbacks/html5shiv-printshiv.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php echo $base_url; ?>media/js/fallbacks/jquery-1.11.1.min.js">\x3C/script>');</script>
		<!-- /////// -->
		<!-- SCRIPTS -->
		<!-- /////// -->
	</head>
	<body>
		<div class="global-wrapper">
		
			<!--[if lt IE 8]>
				<div class="browsehappy">
					<div class="site-content">
						<p>Vous utilisez un <strong>ancien</strong> navigateur. Ce site risque de ne pas s'afficher correctement. <a href="http://browsehappy.com/">Mettez à jour votre navigateur</a> pour améliorer votre expérience.</p>
					</div>
				</div>
			<![endif]-->
			
			<!-- //////// -->
			<!--   HEAD   -->
			<!-- //////// -->
			<ul class="skip-links">
				<li><a href="#anchor-content">Aller au contenu</a></li>
			</ul>
			<header role="banner" class="page-header-wrapper">
				<div class="site-content">
					--HEADER--
					
					<button class="btn-nav-mob js-toggle-mob-nav" type="button">
						<div>MENU</div>
					</button>

					<nav class="main-nav" role="navigation">
						
						<div class="head-nav-mob">
							<button class="js-close-nav-mob btn-close-nav-mob icon-close-button">CLOSE<span class="out">Close</span></button>
						</div>

						<div class="ul-wrapper">
							<ul>
								<li class="li-level-1">
									<div class="lk-level-1">
										<a href="http://google.fr">Niveau 1.1</a>
										<button class="btn-expend">voir le sous-menu</button>
									</div>
									<div class="level-2-wrapper">
										<ul class="list-links">
											<li><a href="#">Spécialités médicales</a></li>
											<li><a href="#">Spécialités chirurgicales</a></li>
											<li><a href="#">Centre de cancérologie</a></li>
											<li><a href="#">Femme / Enfant</a></li>
											<li><a href="#">Plateau médico-technique</a></li>
											<li><a href="#">Urgences</a></li>
											<li><a href="#">Autour du soin</a></li>
										</ul>
									</div>
								</li>
								<!-- -->
								<li class="li-level-1">
									<div class="lk-level-1">
										<a href="http://google.fr">Niveau 1.2</a>
										<button class="btn-expend">voir le sous-menu</button>
									</div>
									<div class="level-2-wrapper">
										<ul class="list-links">
											<li><a href="#">Informations pratiques</a></li>
											<li><a href="#">Service en ligne</a></li>
											<li><a href="#">Documents téléchargeables</a></li>
											<li><a href="#">Pour votre confort</a></li>
										</ul>
									</div>
								</li>
								<!-- -->
								<li class="li-level-1">
									<div class="lk-level-1">
										<a href="http://google.fr">Niveau 1.3</a>
										<button class="btn-expend">voir le sous-menu</button>
									</div>
									<div class="level-2-wrapper">
										<ul class="list-links">
											<li><a href="#">Spécialités médicales</a></li>
											<li><a href="#">Spécialités chirurgicales</a></li>
											<li><a href="#">Centre de cancérologie</a></li>
											<li><a href="#">Femme / Enfant</a></li>
											<li><a href="#">Plateau médico-technique</a></li>
										</ul>
									</div>
								</li>
								<!-- -->
								<li class="li-level-1">
									<div class="lk-level-1">
										<a href="http://google.fr">Niveau 1.4</a>
										<button class="btn-expend">voir le sous-menu</button>
									</div>
									<div class="level-2-wrapper">
										<ul class="list-links">
											<li><a href="#">Spécialités médicales</a></li>
											<li><a href="#">Spécialités chirurgicales</a></li>
										</ul>
									</div>
								</li>
								<!-- -->
								<li class="li-level-1">
									<div class="lk-level-1">
										<a href="http://google.fr">Niveau 1.5</a>
										<button class="btn-expend">voir le sous-menu</button>
									</div>
									<div class="level-2-wrapper">
										<ul class="list-links">
											<li><a href="#">Spécialités médicales</a></li>
											<li><a href="#">Spécialités chirurgicales</a></li>
											<li><a href="#">Centre de cancérologie</a></li>
										</ul>
									</div>
								</li>
								<!-- -->
							</ul>
						</div>
					</nav>

				</div>
			</header>
			<!-- ///////// -->
			<!--   /HEAD   -->
			<!-- ///////// -->
