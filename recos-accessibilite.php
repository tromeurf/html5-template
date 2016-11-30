<?php include 'inc/header.inc.php' ?>

			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->
			<div class="page-content-wrapper" role="main" id="page-recos">
				<div class="site-content">
					<h1>Recos d'accessibilité</h1>
					
					<div class="bk-info">
						<p>Ici, les règles et recommandations à respecter pour harmoniser nos façons de travailler.</p>
					</div>

					<!-- GENERAL -->
					<h2>GENERAL</h2>
					<section class="framed">
						<ul>
							<li>Vérifier son intégration sur Firefox avec le grossissement de texte à 200% (6 fois la touche CTRL +). Pour cela Aller dans Affichage > Zoom > Zoom texte seulement</li>
							<li>Vérifier son code au W3C</li>
						</ul>
					</section>
					<!-- /GENERAL -->

					<!-- HTML -->
					<h2>HTML</h2>
					<section class="framed">
						<ul>
							<li>attribut ALT sur les images</li>
							<li>attribut TITLE sur les liens non explicites (ex <a href="En savoir plus sur les recommandations d'accessibilité">En savoir plus</a>)</li>
							<li>Préférer des &lt;BUTTON&gt; pour tous les éléments qui déclenchent une action et qui ne sont pas des liens</li>
							<li>Pour tout lien que s'ouvre dans un nouvel onglet le signaler dans le title (ex <a href="#" target="_blank" title="Partager sur Twitter (nouvelle fenêtre)">Partager sur Twitter</a>)</li>
							
							<li>Encoder en héxadécimal les adresses mails dans l'attribut mailto pour que les robots ne puissent pas la lire. <a target="_blank;" href="http://encodertool.com/hexadecimal" title="Site pour encoder des adresses mail en hexadécimal">Site pour encoder</a></li>
							<li>Pour les formulaires, regrouper les champs par fieldset</li>
							<li>Mettre le lien du retour en haut de page à la fin du contenu principal</li>
							<li>Pour le sysytème d'onglet utiliser <a target="_blank;" href="http://jqueryui.com/tabs/">celui de Jquery UI</a></li>
						</ul>
					</section>
					<!-- /HTML -->

					<!-- CSS -->
					<h2>CSS / SCSS</h2>
					<section class="framed">
						<ul>
							<li>Préférer les divs avec du texte en position relatif (pour le grossissement du texte)</li>
							<li>Préférer au maximum une font plutôt que des balises IMG (une balise IMG reste toujours préférable par rapport p un background-image)</li>
							<li>S'il y a un background-image, ne pas oublier un background-color si l'image ne s'affiche pas</li>
							<li>Pour tout élément invisible, ne pas oublier d'ajouter "display: none;" pour que l'élément ne soit pas tabulable</li>
							<li>Ne pas fixer de HEIGHT en dur, préférer le MIN-HEIGHT</li>
							<li>Ne pas oublier le pseudo-élément :FOCUS lorsque le :HOVER est utilisé</li>
						</ul>
					</section>
					<!-- /CSS -->

					<!-- JS -->
					<h2>JS</h2>
					<section class="framed">
						<ul>
							<li>Utiliser la fonction EQUALHEIGHT adapté pour l'accessibilité</li>
							<li>Utiliser <a href="http://irama.org/pkg/keyboard-focus-0.3/">un plugin</a> pour détecter le focus à la navigation clavier</li>
							<li>Pour toutes animations au click, ne pas oublier de reproduire le même effet au focus</li>
							<li>Ne pas oublier de modifier le comportement des ARIA</li>
							<li>Pour calculer des hauteurs égales, utiliser la classe equalheight présente dans Revolution.js</li>
							<li>Pour les sliders utiliser la classe de bxslider présente dans Revolution.js !!!!! ATTENTION jquery.bxslider.js est modifié, il faut changer la div.bx-pager-item en LI !!!!!</li>
						</ul>
					</section>
					<!-- /JS -->


					<!-- Balise Spécifique -->
					<h2>Balise Spécifique</h2>
					<section class="framed">
						<pre class="highlight language-markup"><code>
&lt;header role="banner"&gt;
&lt;nav role="navigation"&gt;
&lt;main role="main"&gt;
&lt;aside role="complementary"&gt;
&lt;footer role="contentinfo"&gt;
&lt;form role="search" method="post"&gt;

</code></pre>
					</section>
					<!-- /Balise Spécifique -->

					<!-- Balise ARIA -->
					<h2>Balise ARIA</h2>
					<section class="framed">
						<pre class="highlight language-markup"><code>
&lt;button aria-expanded="false" aria-controls="content-2"&gt;
	&lt;img src="" alt=""&gt;
&lt;/button&gt;
&lt;div id="content-2"&gt;
---
&lt;/div&gt;

</code></pre>			<ul>
							<li>ARIA-EXPANDED correspond à des éléments qui interagissent avec d'autres éléments dans le site (click, focus, ...)</li>
							<li>ARIA-CONTROLS doit avoir l'ID de l'élément avec lequel il interagit</li>
							<li>ARIA-LIVE (aria-live="polite") correspond à un élément qui sera mis à jour tout seul (cours de la bourse, nombre de caractères restant dans un textarea, ...)</li>
							<li>ARIA-HIDDEN (aria-hidden="true") pour qu'un élément ne soit pas tabulable (préférer le display: none; quand c'est possible)</li>
						</ul>
					</section>
					<!-- /Balise ARIA -->

					<!-- DEVELOPPEMENT -->
					<h2>DEVELOPPEMENT</h2>
					<section class="framed">
						<ul>
							<li>Message d'erreur sous forme de liste</li>
							<li>Dans les formulaires, supprimer les labele invisibles</li>
							<li>IFRAME youtube</li>
							<li>Rajouter un role="alert" sur les divs message error</li>
							<li>Remplir les ALT et TITLE</li>
							<li>Ajouter aria-required="true" sur les champs obligatoires</li>
						</ul>
					</section>
					<!-- /DEVELOPPEMENT -->					

				</div>
			</div>
			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->

			<!-- Only for this charte.php file -->
			<link rel="stylesheet" href="http://prismjs.com/themes/prism.css">
			<script type="text/javascript" src="http://prismjs.com/prism.js"></script>
			<!-- /Only for this charte.php file -->
			
<?php include 'inc/footer.inc.php' ?>