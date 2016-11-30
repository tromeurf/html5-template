<?php include 'inc/header.inc.php' ?>

			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->
			<div id="anchor-content"></div>
			<main class="page-content-wrapper" role="main" id="page-recos">
				<div class="site-content">
					<h1>Règles d'or et recos front</h1>
					
					<div class="bk-info">
						<p>Ici, les règles et recommandations à respecter pour harmoniser nos façons de travailler.</p>
					</div>

					<!-- GENERAL -->
					<h2>GENERAL</h2>
					<section class="framed">
						<ul>
							<li>Où qu'il soit le code doit donner l'impression d'avoir été écrit par une seule personne.</li>
							<li>Le code doit être descriptif, bien commenté et accessible par d'autres.</li>
							<li>Indentation HTML, CSS, JS : <strong>1 tabulation (4 espaces)</strong>.<br><br></li>
						</ul>
					</section>
					<!-- /GENERAL -->

					<!-- PROCESS -->
					<h2>PROCESS</h2>
					<section class="framed">
						<p>Pour la <strong>compilation Sass</strong>, la <strong>minification</strong>, la <strong>concaténation javascript</strong>, l'<strong>optimisation des images</strong> et le <strong>livereload</strong> nous utilisons <strong>Grunt</strong>.<br>
						En prerequis, certains modules nodejs doivent être installés</p>
						<p>Pour installer les modules node : lancer la commande "<strong><code>npm install</code></strong>" dans le répertoire concerné.</p>
						<ul>
							<li>Pour watcher un site, lancer la commande "<strong><code>grunt watch</code></strong>"</li>
							<li>Pour minifier les sources d'un site, lancer la commande "<strong><code>grunt</code></strong>"</li>
							<li>La config des modules node se trouve dans le fichier package.json</li>
							<li>La config de sass se trouve dans le fichier config.rb</li>
							<li>La config des actions grunt se trouve dans le fichier Gruntfile.js</li>
						</ul>

					</section>
					<!-- /PROCESS -->

					<!-- HTML -->
					<h2>HTML</h2>
					<section class="framed">
						<ul>
							<li>Le code doit être descriptif, bien commenté et accessible par d'autres.</li>
							<li>On est en HTML5 donc <strong>pas de balises auto-fermantes</strong> (meta, img, br, hr, input, ... <code><s>&lt;br /&gt;</s> --> &lt;br&gt;</code>).
							</li>
							<li>
								Ordre des attributs : <br>
								- id<br>
								- class<br>
								- data-*<br>
								- for / type / href / src / alt...
							</li>
							<li>Vérifier régulièrement la <strong>compatibilité W3C</strong> des pages intégrées.</li>
							<li><strong>Tester ses pages sous tous les navigateurs</strong> tout au long de l’intégration.</li>
							<li>Commentaires : 
<pre class="highlight language-markup"><code>&lt;!-- //////////// --&gt;
&lt;!--   CONTENT   --&gt;
&lt;!-- //////////// --&gt;
&lt;div class="page-content"&gt;
	&lt;!-- Carrousels --&gt;
	&lt;h2&gt;Carrousels&lt;/h2&gt;
	&lt;section class="framed"&gt;
		&lt;p&gt;Description...&lt;/p&gt;
		...
	&lt;/section&gt;
	&lt;!-- /Carrousels --&gt;

	&lt;!-- Other block/component --&gt;
	&lt;h2&gt;Other block / component&lt;/h2&gt;
	&lt;section class="framed"&gt;
		&lt;p&gt;Description...&lt;/p&gt;
		...
	&lt;/section&gt;
	&lt;!-- /Other block/component --&gt;
&lt;/div&gt;
&lt;!-- //////////// --&gt;
&lt;!--   /CONTENT   --&gt;
&lt;!-- //////////// --&gt;</code></pre></li>
						</ul>
					</section>
					<!-- /HTML -->

					<!-- CSS -->
					<h2>CSS / SCSS</h2>
					<section class="framed">
						<ul>
							<li>Les .css des plugins doivent être placés dans le dossier |--media/css/vendors/</li>
							<li>
								Recos générales :<br>
								- Eviter de cibler les balises mais plutôt les id / class seulement (<s><code>div.error</code></s> --> <code>.error</code>)<br>
								- Eviter les !important; tant que possible
							</li>
							<li>Syntaxe : <br>
								- Le nom des classes et id doivent être en minuscule et séparés par des tirets (ex : <code>class="my-class"</code>)
								- Lors d'une déclaration avec plusieurs sélecteurs, placer chaque sélecteur sur une ligne.<br>
								- 1 ligne pour chaque propriété css<br>
								- 1 espace après les , et :<br>
								- 1 espace avant les {<br>
								- Préférer les syntaxes raccourcies seulement pour définir toutes les propriétés
							</li>
							<li>
								Ordre des propriétés :<br>
								- Box (display, position, float, width, height, margin, padding)<br>
								- bordures<br>
								- background<br>
								- Texte<br>
								- autre...
							</li>
							<li>Organisation des fichier sass : <br>
								<strong>[sass]</strong><br>
								|--<strong>app</strong> - C’est le fichier qui va générer le fichier app.css, il inclut les autres fichiers “_fichier.scss”<br>
								|--<strong>_vars</strong> - Il définit les variables de base et inclut les fichiers compass nécessaires<br>
								|--<strong>_mixins</strong> - On y inclut les mixins dont on a besoin<br>
								|--<strong>_fonts</strong> - On y inclut les différents appels aux webfonts<br>
								|--<strong>_normalize</strong> - C’est le fichier qui normalise les propriétés css de la même façon pour tous les navigateurs<br>
								|--<strong>_layout</strong> - On y définit les styles de la structure générale (en général header, footer)<br>
								|--<strong>_chart</strong> - On y définit toutes les valeurs des élément html de base (h, p, ul, ol, li, ...), ainsi que de tous les composants html récurrents (tout ce qu’il y aura dans charte.php).
								Pour les projets conséquents, il est recommandé de créér un dossier “components” puis un fichier .scss pour chaque composant et de les importer dans le fichier charte (ex: @import “buttons”; @import “forms”; @import “sliders”;... )<br>
								|--<strong>_pages</strong> - On y définit tous les styles particuliers aux différentes pages de notre site<br>
								|--<strong>print</strong> - C’est le fichier qui va générer le fichier print.css<br>
								|--<strong>[components]</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>_buttons</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>_forms</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>...</strong><br>
								|--<strong>[vendors]</strong> - Toutes les css des plugins utilisés doivent être placées dans ce dossier, en ayant bien pris soin de renommer le fichier avec un <strong>_</strong> devant et en changeant l'extension en <strong>.scss</strong>. Les images des plugins doivent être placées dans le dossier images > vendors.<br>
								&nbsp;&nbsp;&nbsp;|--<strong>_jquery.bxslider.scss</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>_jquery.fancybox.scss</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>...</strong><br>
							</li>
							<li>Eviter l'héritage/ l'indetation excessive dans les fichiers .scss. En général, <strong>il est recommandé 3 niveaux d'indentation et / ou 50 lignes max</strong></li>
							<li>Variabiliser tant que possible<br>
								- les couleurs<br>
								- les nombres récurents<br>
								- Les noms de variable doivent être basés sur ce qu'ils représentent (pas de valeur dans la variable. ex: <code><s>$font-size-50</s> --> $title-xl-font-size</code>)
							</li>
							<li>Nous utilisons compass afin de nous simplifier la vie avec certaines propriétés et fallback. Ci-dessous quelques exemples<br>
								- <code>@include inline-block;</code><br>
								- <code>@include rgba-background(rgba(255,255,255,0.75));</code><br>
								<strong>Utiliser des mixins pour toutes les propriétés css3 !</strong><br>
								- <code>@include border-radius (10px);</code><br>
								- <code>@include box-shadow(rgba($black, 0.3) 0px 0px 10px);</code><br>
								cf <a href="http://compass-style.org/reference/compass/css3" target="blank" title="Nouvelle fenêtre">documentation compass</a><br>
								<strong>Ci dessous, quelques extends ou mixins perso que nous avons défini dans le fichier _mixins.scss</strong><br>
								- <code>@include clearfix;</code><br>
								- <code>@extend .clearfix;</code><br>
								- <code>@include background-retina($file, $type, $size, $position, $repeat, $attachment);</code><br>
								- <code>@include breakpoint ($max, $min);</code></li>
							<li>Commentaires : 
<pre class="highlight language-css"><code>/*==============================*/
/*Compass & custom imports*/
/*==============================*/

// See http://compass-style.org
@import "compass";
@import "compass/support";
@import "compass/typography/vertical_rhythm";
@import "compass/css3";
@import "compass/css3/border-radius";
@import "compass/css3/box-sizing";
@import "compass/css3/transition";
@import "compass/css3/inline-block";
@import "compass/css3/opacity";
@import "rgbapng";


/*==============================*/
/*Grids (using Gridle - http://gridle.org/)*/
/*==============================*/
$gutter-w: 20px; // px or %

@import "gridle/gridle";

@include gridle_setup((
	context : 12,
	gutter-width : $gutter-w
));</code></pre></li>
						</ul>
					</section>
					<!-- /CSS -->

					<!-- JS -->
					<h2>JS</h2>
					<section class="framed">
						<ul>
							<li>Organisation des fichier js : <br>
								<strong>[js]</strong><br>
								|--<strong>[fallbacks]</strong> - Ici se trouvent tous les fichiers appelés indépendamment de scripts.min.js<br>
								&nbsp;&nbsp;&nbsp;|--<strong>jquery-1.11.1.min.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>modernizr_media-match_respond.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>TweenMax.min.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>IE9.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>...</strong><br>
								|--<strong>[vendors]</strong> - Ici se trouvent tous les fichiers de plugins<br>
								&nbsp;&nbsp;&nbsp;|--<strong>jquery.placeholder-enhanced.min.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>jquery.r9-cookies.min.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>revolution-0.4.3.min.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>...</strong><br>
								|--<strong>[r9]</strong> - Ici se trouvent tous nos scripts, décomposés en modules (par fonctionnalité)<br>
								&nbsp;&nbsp;&nbsp;|--<strong>main.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>carousels.js</strong><br>
								&nbsp;&nbsp;&nbsp;|--<strong>...</strong><br>
								|--<strong>scripts.min.js</strong> - Ne pas y toucher : ce fichier est le résultat de la concaténation de tous les js présents dans les dossiers vendors et r9 (Regrouper tous les scripts dans un seul fichier est une pratique recommandée pour limiter le nombre d'appels au serveur et gagner en temps de chargement)<br>&nbsp;
							</li>
							<li>L'appel au fichier scripts.min.js doit être fait en fin de page, juste avant la fermeture de <code>&lt;/body&gt;</code>.</li>
							<li>Toujours vérifier qu’on utilise la <strong>dernière version Github et faire attention à la compatibilité</strong> lorsque l’on choisit un plugin/framework</li>
							<li>Le nom des classes doit être écrit avec des majuscules à chaque mot (ex : <code>MaClasseToto</code>)</li>
							<li>Le nom des fonctions / méthodes doit être en camelCase (ex : <code>functionLongName</code>)</li>
							<li>Le nom des variables doit être écrit avec des _ entre chaque mot (ex : <code>variable_long_name</code>)</li>
							<li>Les variables concernant les selecteurs doivent commencer par $ (ex : <code>$my_target = $('.block.xs')</code>)</li>
							<li>Les classes qui servent uniquement au js doivent être préfixées avec js- (ex : <code>class="block js-equalheight"</code>)</li>
							<li>Commentaires : 
<pre class="highlight language-javascript"><code>/*==============================*/
/*Pannels*/
/*==============================*/
var $body = $('body');
var $pannels = $('.pannels');

var closeOtherPannels = function () {
	$pannels.find('.pannel-titles .active').removeClass('active');
	$('.wrap-content:visible').slideUp();
}

// Open - close Wishlist
$('.js-showWishlist').on('click', function(event) {
	event.preventDefault();
	var $panels_content = $('.pannels-content');
	var $target = $pannels.find('.content-wishlist');
	var href = $(this).attr('href');

	if (!$(this).hasClass('active')) { // Open & switch pannels
		resizePannel();
		if (!$target.is(':visible')) {
			closeOtherPannels();
			if ($target.html() == '') { // if target empty, ajax load
				$panels_content.find('.pannel-loader').show();
				$target.load( href, function() {
					$target.slideDown();
					$panels_content.find('.pannel-loader').hide();
				});
			} else {
				$target.slideDown();
			}
			
		}
		$(this).addClass('active');
		if (!$panels_content.hasClass('open')) { // Open pannel
			$panels_content.addClass('open');
		}
		$body.css('overflow', 'hidden');
	} else { // Close pannel
		$(this).removeClass('active');
		$panels_content.removeClass('open');
		$body.css('overflow', 'auto');
	}
});</code></pre>
							</li>
						</ul>
					</section>
					<!-- /JS -->

					<!-- IMAGES -->
					<h2>IMAGES</h2>
					<section class="framed">
						<ul>
							<li>Pour les pictos, utiliser soit une webfont (cf <a href="https://icomoon.io/app/" target="blank" title="Nouvelle fenêtre">icomoon</a>), soit des SVG (si IE9+), soit des sprites</li>
							<li>Optimiser le poid des images. Recos :<br>
								- Pour les images avec de la transparence --> PNG24
								- Pour les images de type photo ou avec des dégradés --> JPG sup (60%) 
								- Pour les images avec des applats de couleurs --> GIF, PNG 8 ou SVG (si IE9+)
								- Pour les grandes images, ne pas hésiter à utiliser <a href="https://kraken.io/web-interface" target="blank" title="Nouvelle fenêtre">Kraken.io</a>
							</li>
						</ul>
					</section>
					<!-- /IMAGES -->

					<!-- ACCESSIBILITE -->
					<h2>ACCESSIBILITE</h2>
					<section class="framed">
						<p>Pour l'accessibilité, voir les recos d'<a href="http://accede-web.com/fr/" target="blank" title="Nouvelle fenêtre">AcceDe Web</a> : <a href="http://wiki.accede-web.com/notices/html-css" target="blank" title="Nouvelle fenêtre">Pour les intégrateurs / développeurs</a></p>
						<ul>
							<li>Les rôles Aria fréquemment utilisés :<br>
								- header <code>role="banner"</code><br>
								- nav <code>role="navigation"</code><br>
								- corps <code>role="main"</code><br>
								- aside <code>role="complementary"</code><br>
								- footer <code>role="contentinfo"</code><br>
							</li>
						</ul>
					</section>
					<!-- /ACCESSIBILITE -->

					<hr>
					<hr class="bk-type">

					<!-- OPTIMISATIONS -->
					<h2>TESTS & OPTIMISATIONS</h2>
					<section class="framed">
						<p>Afin de vérifier la qualité de votre code, ne pas hésiter à utiliser les outils ci-dessous</p>
						<ul>
							<li>Normes W3C : <a href="http://validator.w3.org/" target="_blank">validator.w3.org</a></li>
							<li>Qualité générale du code + recos SEO + recos accessibilité : <a href="https://addons.mozilla.org/fr/firefox/addon/opquast-desktop/" target="_blank">opquast-desktop</a></li>
							<li>Optimisations d'ordre général : <a href="https://developers.google.com/speed/pagespeed/insights_extensions" target="_blank">pageSpeed Insights</a></li>
						</ul>
					</section>
					<!-- /OPTIMISATIONS -->

				</div>
			</main>
			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->


			<!-- Only for this charte.php file -->
			<link rel="stylesheet" type="text/css" href="http://prismjs.com/themes/prism.css">
			<script type="text/javascript" src="http://prismjs.com/prism.js"></script>
			<!-- /Only for this charte.php file -->
			
<?php include 'inc/footer.inc.php' ?>