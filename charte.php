<?php include 'inc/header.inc.php' ?>

			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->
			<div id="anchor-content"></div>
			<main class="page-content-wrapper" role="main" id="page-chart">
				<div class="site-content">
					<h1>Charte d'intégration</h1>
					
					<div class="bk-info">
						<p>Ceci est la charte d'intégration.<br>
						Elle sert de référence pour les intégrateurs. <br>
						Ici, on y trouve tous les éléments de type h1, h2, h3, h4, p, ul, ol, blockquote, blocs wysiwyg, blocs pushes, blocs vidéo, blocs, etc...</p>
						<p>Bien penser en composants html MODULABLES, de manière à pouvoir déplacer un élément, une classe, un bloc d'une page à une autre sans problème.</p>
						<p>Aucun #Id dans ce fichier charte !!!</p>
					</div>
					

					<!-- Colors -->
					<h2 class="title-section">Colors</h2>
					<section class="framed">
						<h3>Default colors :</h3>
						<ul>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: white;"></span>$white: white</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: black"></span>$black: black</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: #EFEFEF"></span>$lightgrey: #EFEFEF</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: grey"></span>$grey: grey</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: #333"></span>$darkgrey: #333</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: orange"></span>$color-active: orange</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: #900"></span>$color-error: #900</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: green"></span>$color-success: green</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: #FAE692"></span>$color-info: #FAE692</li>
							<li><span class="square-color" style="display: inline-block; width: 25px; height: 25px; border: 1px solid black; margin-right: 10px; background-color: orange"></span>$color-alert: orange</li>
						</ul>
						<h3>Theme colors :</h3>
						<ul>
							<li></li>
						</ul>
						
					</section>
					<!-- /Colors -->

					<!-- Typo -->
					<h2 class="title-section">Typography</h2>
					<section class="framed">
						<h3>Fonts</h3>
						<ul class="lined framed grey">
							<li>
								<strong>Default font</strong><br>
								ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
								abcdefghijklmnopqrstuvwxyz - éèàîïâ...<br>
								0123456789
							</li>
							<li style="font-family: Arial, Helvetica, sans-serif;">
								<strong>Arial, Helvetica, sans-serif</strong><br>
								ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
								abcdefghijklmnopqrstuvwxyz - éèàîïâ...<br>
								0123456789
							</li>
						</ul>

						<hr>
						<h3>Headings</h3>
						<div class="framed grey">
							<h1>Titre 1</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
							<h2>Titre 2</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
							<h3>Titre 3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
							<h4>Titre 4</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
							<h5>Titre 5</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
							<h6>Titre 6</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maxime, pariatur blanditiis. Illum tenetur, delectus, corporis dolore totam sed harum odio maiores deleniti, eius veritatis blanditiis similique nam, molestiae quae.</p>
						</div>

						<hr>
						<h3>Block</h3>

						<div class="framed grey">
							<code>&lt;p&gt;</code>
							<p>Paragraphe Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil minus eveniet eligendi consequatur at, <a href="#">link link link link</a>, delectus. Hic fuga quas molestias dolor <i>i element</i>, inventore provident recusandae.</p>
							
							<code>&lt;ul&gt;</code>
							<ul>
								<li>Item 1 Lorem</li>
								<li>Item 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ab repellat voluptatum? Impedit, </li>
								<li>Item 3 adipisicing elit. Officiis ab repellat voluptatum? Impedit</li>
								<li>Item 4</li>
							</ul>

							<code>&lt;ol&gt;</code>
							<ol>
								<li>Item 1 Lorem</li>
								<li>Item 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ab repellat voluptatum? Impedit, </li>
								<li>Item 3 adipisicing elit. Officiis ab repellat voluptatum? Impedit</li>
								<li>Item 4</li>
							</ol>
						</div>

						<hr>
						<h3>Inline</h3>

						<ul class="lined framed grey">
							<li><code>&lt;a&gt;</code> - <a href="#">This is a text link</a></li>
							<li><code>&lt;strong&gt;</code> - <strong>Strong is used to indicate strong importance</strong></li>
							<li><code>&lt;em&gt;</code> - <em>This text has added emphasis</em></li>
							<li><code>&lt;b&gt;</code> - The <b>b element</b> is stylistically different text from normal text, without any special importance</li>
							<li><code>&lt;i&gt;</code> - The <i>i element is text that is set off from the normal text</i></li>
							<li><code>&lt;u&gt;</code> - The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</li>
							<li><code>&lt;del&gt; &amp; &lt;ins&gt;</code> -  This text is <del>deleted</del> and <ins>This text is inserted</ins></li>
							<li><code>&lt;s&gt;</code> - <s>This text has a strikethrough</s></li>
							<li><code>&lt;sup&gt;</code> - Superscript<sup>®</sup></li>
							<li><code>&lt;sub&gt;</code> - Subscript for things like H<sub>2</sub>O</li>
							<li><code>&lt;abbr&gt;</code> - Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></li>
							<li><code>&lt;kbd&gt;</code> - Keybord input: <kbd>Cmd</kbd></li>
							<li><code>&lt;q&gt;</code> - <q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></li>
							<li><code>&lt;cite&gt;</code> - <cite>This is a citation</cite></li>
							<li><code>&lt;dfn&gt;</code> - The <dfn>dfn element</dfn> indicates a definition.</li>
							<li><code>&lt;mark&gt;</code> - The <mark>mark element</mark> indicates a highlight</li>
							<li><code>&lt;var&gt;</code> - The <var>var element</var> defines a variable</li>
							<li>
								<code>&lt;address&gt;</code>
								<br>
								<address>
								  Address Name<br>
								  1234 Main St.<br>
								  Anywhere, US 12345
								</address>
							</li>
							<li>
								<code>&lt;tel&gt;</code> - <a class="tel" href="tel:+18008519530">1-800-851-9530</a>
							</li>
							<li>
								<code>&lt;time&gt;</code> - <time class="post-date" datetime="2013-05-22">01 Dec 2014</time>
							</li>
							<li>
								<code>&lt;blockquote&gt;</code>
								<blockquote>
								  One small step for man, one giant leap for mankind.
								</blockquote>
							</li>
							<li><span class="text-info"><code>.text-info</code> - This text is informative</span></li>
							<li><span class="text-error"><code>.text-error</code> - This text is an error</span></li>
							<li><span class="text-success"><code>.text-success</code> - This text is a success</span></li>
						</ul>


					</section>
					<!-- /Typo -->

					<!-- Icons -->
					<h2 class="title-section">Icons</h2>
					<section class="framed">
						<p>Ici une iframe des icons icomoon</p>
						<iframe src="https://icomoon.io/" style="width: 100%; height: 500px; border: 1px solid black;"></iframe>
					</section>
					<!-- /Icons -->
					

					<!-- Buttons -->
					<h2 class="title-section">Buttons</h2>
					<section class="framed">
						<h3>Styles :</h3>
						<p><a href="#" class="btn">.btn</a></p>
						<p>...</p>
					</section>
					<!-- /Buttons -->

					<!-- image -->
					<h2 class="title-section">Responsive Images</h2>
					<section class="framed">
						<h3>Picturefill</h3>
						<div class="bk-info">If IE9 and less support needed, uncomment code in js/vendors/picturefill.min.js (and use code below to ensure full IE9 support)</div>

						<div class="js-source-code">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source srcset="https://scottjehl.github.io/picturefill/examples/images/large.jpg, https://scottjehl.github.io/picturefill/examples/images/extralarge.jpg 2x" media="(min-width: 800px)">
								<!--[if IE 9]></video><![endif]-->
								<img srcset="https://scottjehl.github.io/picturefill/examples/images/small.jpg, https://scottjehl.github.io/picturefill/examples/images/medium.jpg 2x" src="#" alt="is picturefill.min.js uncommented ?">
							</picture>
						</div>
					</section>


					<!-- Grids -->
					<h2 class="title-section">Grids</h2>
					<section class="framed">
						<p>Pour le système de grille, nous utilisons <a href="http://gridle.org/" target="_blank">http://gridle.org/</a></p>
						
						<h3>En utilisant des mixins</h3>

						<pre class="highlight"><code class="language-css">
.row-3 {
	@include gridle_container();
	.col {
		@include gridle(4);
		@include gridle(12,  mobile );
	}
}						
						</code></pre>

						<div class="row-3">
							<div class="framed col">Col1</div>
							<div class="framed col">Col2</div>
							<div class="framed col">Col3</div>
						</div>

						<h3>En utilisant des classes dans le DOM</h3>
						<p>Voir la doc de <a href="http://gridle.org/" target="_blank">gridle</a></p>
						
						<div style="outline: 1px solid green">
							<div class="js-source-code">
								<div class="container">
									<div class="framed grid-12" id="header">
										I'm the header, 12 columns width
									</div>
									<div class="framed grid-4 grid-mobile-12">
										I'm the content, 4 columns width, but 12 on mobile
									</div>
									<div class="framed grid-4 grid-mobile-12">
										I'm the content, 4 columns width, but 12 on mobile
									</div>
									<div class="framed grid-4 grid-mobile-12">
										I'm the sidebar, 4 columns width, but 12 on mobile
									</div>
								</div>
							</div>
							
							<div class="js-source-code">
								<div class="container">
									<div class="grid-2 grid-standard-3 grid-tablet-6 grid-mobile-12">
										<div class="col-content framed grey">grid-2 grid-standard-3 grid-tablet-6 grid-mobile-12</div>
									</div>
									<div class="grid-3 grid-standard-3 grid-tablet-6 grid-mobile-12">
										<div class="col-content framed grey">grid-3 grid-standard-3 grid-tablet-6 grid-mobile-12</div>
									</div>
									<div class="grid-3 grid-standard-3 grid-tablet-6 grid-mobile-12">
										<div class="col-content framed grey">grid-3 grid-standard-3 grid-tablet-6 grid-mobile-12</div>
									</div>
									<div class="grid-4 grid-standard-3 grid-tablet-6 grid-mobile-12">
										<div class="col-content framed grey">grid-4 grid-standard-3 grid-tablet-6 grid-mobile-12</div>
									</div>
								</div>
							</div>
							
							<p>Avec une classe .collapsed sur le container</p>
							<div class="js-source-code">
								<div class="container collapsed">
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
									<div class="grid-2 grid-mobile-12">
										<div class="col-content framed grey">Col</div>
									</div>
								</div>
							</div>

							<p>Avec une classe .inline-b sur le container pour que les éléments soient en inline-block (IE8+)</p>
							<div class="js-source-code">
								<div class="container inline-b">
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 2 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
								</div>
							</div>

							<p>Avec des classes .inline-b.center sur le container</p>
							<div class="js-source-code">
								<div class="container inline-b center">
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the content, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
									<div class="grid-3 grid-mobile-12">
										<div class="col-content framed grey">I'm the sidebar, 3 columns width, but 12 on mobile</div>
									</div>
								</div>
							</div>
						</div>


					</section>
					<!-- /Grids -->

					<!-- Forms -->
					<h2 class="title-section">Forms</h2>
					<section class="framed">
						<h3>Description...</h3>
						<div class="framed grey">
							<fieldset>
								<legend>Fieldset n°1</legend>
								<p>
									<label for="text">Input type text</label>
									<!--<input type="text" id="text" name="text" x-autocompletetype="name-full" placeholder="Name" required>-->
									<input type="text" id="text" name="text" placeholder="Name" required>
								</p>
								<p>
									<label for="email">Input type Email</label>
									<!--<input type="email" id="email" name="email" x-autocompletetype="email" placeholder="Email Address" required>-->
									<input type="email" id="email" name="email" placeholder="Email Address" required>
								</p>
								<p>
									<label for="phone-number" class="required">Input type tel</label>
									<!--<input type="tel" id="phone-number" name="phone-number" placeholder="XXX-XXX-XXXX" x-autocompletetype="phone-full" required>-->
									<input type="tel" id="phone-number" name="phone-number" placeholder="XXX-XXX-XXXX" required>
								</p>
								<p>
									<label for="date">Input type Date</label>
									<input type="date" id="date" name="date" required>
								</p>
								<p>
						        	<label for="url" class="required">Input type url:</label>
						        	<input type="url" id="url" name="url" placeholder="http://website.com">
								</p>
								<p>
									<label for="pswd">Input type password</label>
									<input type="password" id="pswd" name="pswd" placeholder="password" required>
								</p>
								<p>
									<label for="pswd">Input with submit</label><br>
									<span class="input-with-button">
										<input type="text" id="pswd" name="pswd" placeholder="password" required>
										<button type="submit">OK</button>
									</span>
								</p>
								<p>
									<label for="textarea" class="visually-hidden">Textarea:</label>
									<textarea id="textarea" name="message" placeholder="Message" required></textarea>
								</p>
								<p>
									<label for="select" class="visually-hidden">Select:</label>
									<!--<select id="select" name="select" x-autocompletetype="state" required>-->
									<select id="select" name="select" required>
										<option value="">Please Select ...</option>
										<option value="AL">option1</option>
										<option value="AK">option2</option>
										<option value="AZ">option3</option>
									</select>
								</p>
								<p>
									<label for="civ">Custom select</label>
									<span class="styled-select"><select name="civ" id="civ">
										<option value="1">Monsieur</option>
										<option value="2">Madame</option>
									</select></span>
								</p>
								<p>
									<label for="uploadImage1">Ajouter une photo</label>
									<input id="uploadImage1" class="imgAjaxUpload" type="file" name="photo">
								</p>
							</fieldset>
							
							<fieldset>
								<legend>Fieldset n°2</legend>
								<p>
					         		<input type="checkbox" class="switch" id="switch-this" name="switch-this" checked>
					         		<label for="switch-this">I choose this</label>
								</p>
								<p>
					         		<input type="checkbox" class="switch" id="switch-that" name="switch-that">
					         		<label for="switch-that">I choose that</label>
								</p>
								<p>
					         		<input type="radio" class="radio" id="radio-this" name="sex" value="male">
					         		<label for="radio-this">Male</label>
								</p>
								<p>
					         		<input type="radio" class="radio" id="radio-that" name="sex" value="female">
					         		<label for="radio-that">Female</label>
								</p>

								<p class="btn-wrapper">
									<button type="reset" name="reset" value="reset">Reset</button>
									<button type="submit" name="submit" value="Submit">Submit</button>
								</p>
							</fieldset>
							

						</div>
					</section>
					<!-- /Forms -->

					<!-- Bloc example -->
					<h2 class="title-section">Bloc example</h2>
					<section class="framed">
						<h3>With source code popin</h3>
						<div class="js-source-code">
							<div class="bloc-example framed grey">
								Ceci est mon bloc
							</div>
						</div>
						<div class="js-source-code">
							<div class="bloc-example framed grey">
								<p>Ceci est mon deuxième bloc</p>
								<ul>
									<li>lorem</li>
									<li>Ipsum</li>
									<li>Dolor</li>
								</ul>
							</div>
						</div>
					</section>
					<!-- /Bloc example -->

					<!-- Carrousels -->
					<h2 class="title-section">Carrousels</h2>
					<section class="framed">
						<h3>Description...</h3>
						...
					</section>
					<!-- /Carrousels -->

					<!-- Other block/component -->
					<h2 class="title-section">Other block / component</h2>
					<section class="framed">
						<h3>Description...</h3>
						...
					</section>
					<!-- /Other block/component -->

				</div>
			</main>
			<!-- //////////// -->
			<!--   /CONTENT   -->
			<!-- //////////// -->


			<!-- Only for this charte.php file -->
			<link rel="stylesheet" property="stylesheet" type="text/css" href="http://prismjs.com/themes/prism.css">
			<script type="text/javascript" src="<?php echo $base_url; ?>media/js/fallbacks/prism.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>
			<script type="text/javascript">
				Prism.plugins.NormalizeWhitespace.setDefaults({
				'remove-trailing': true,
				'remove-indent': true,
				'left-trim': true,
				'right-trim': true,
				/*'break-lines': 80,
				'indent': 2,
				'remove-initial-line-feed': false,
				'tabs-to-spaces': 4,
				'spaces-to-tabs': 4*/
			});
			</script>
			<link rel="stylesheet" property="stylesheet" type="text/css" href="<?php echo $base_url; ?>media/css/source-code-popin.css">
			<link rel="stylesheet" property="stylesheet" type="text/css" href="<?php echo $base_url; ?>media/css/page-chart.css">
			<script type="text/javascript" src="<?php echo $base_url; ?>media/js/fallbacks/source-code-popin.js"></script>
			<script type="text/javascript" src="<?php echo $base_url; ?>media/js/fallbacks/page-chart.js"></script>
			<!-- /Only for this charte.php file -->
			
<?php include 'inc/footer.inc.php' ?>