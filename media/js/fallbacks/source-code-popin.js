$(document).ready(function () {
	var btnSource = '<button class="btn-show-source js-source-btn">SOURCE CODE</button>';

	

	$('.js-source-code').each(function (index, elem) {
		$(this).append(btnSource);
	});

	var htmlEntities = function (str) {
	    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
	}


	$('body').on('click', '.popin-source-close', function () {
		$(this).closest('.popin-source').stop().fadeOut();
	});


	$('body').on('click', '.js-source-btn', function () {
		var htmlSource = $(this).closest('.js-source-code').html().replace(btnSource, '');

		var htmlCopy = '<button class="popin-source-copy" data-clipboard-action="copy" data-clipboard-target="#copy-target">Copy</button><div class="copy-msg"></div>'
		var htmlClose = '<button class="popin-source-close">Close</button>'
		var htmlPopin = '<div class="popin-source" style="display:none;">'+
				'<div class="popin-source-content">'+
					'<pre class="highlight"><code class="language-markup" id="copy-target"></code></pre>'+
				'</div>'+htmlClose+
				''+htmlCopy
			'</div>';

		if (!$('.popin-source').length) {
			$('body').append(htmlPopin);
		}

		$('.popin-source code').html(htmlEntities(htmlSource));
		Prism.highlightElement($('.popin-source code')[0]);
		$('.popin-source').stop().fadeIn();

		//
		var clipboard = new Clipboard('.popin-source-copy');

		clipboard.on('success', function(e) {
		    console.log(e);
		    $('.copy-msg').html('<span class="text-success">Copied to clipboard</span>').fadeIn();
		    setTimeout(function () {
		    	$('.copy-msg').fadeOut();
		    },2000);
		});

		clipboard.on('error', function(e) {
		    console.log(e);
		    $('.copy-msg').html('<span class="text-error">Copy failed...</span>').fadeIn();
		    setTimeout(function () {
		    	$('.copy-msg').fadeOut();
		    },2000);
		});
	});
});