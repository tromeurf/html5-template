/*Revolution.Module.extend({
	NAME : "r9.adminbar", // OBLIGATOIRE (reflète l'arborescence répertoire : /r9/adminbar.js)
	timerResize : null,

	initialize : function ($) {
		// appelé aussitôt la page chargée
		console.log("module " + this.NAME);
		console.log("adminbar");

		this.adminBtn();
	},

	adminBtn : function() {

		$("#wpadminbar, #admin-menu-wrapper").addClass('wp-admin-bar');

		var btn = "<input type='button' id='btn' value='' class='btn-admin-bar' />";
		$("body").append(btn);

		var $btn = $('.btn-admin-bar');
		var $admin =$(".wp-admin-bar");

		if($('#wpadminbar, #admin-menu-wrapper').length) {
			$btn.css("display", "block");
		}

		$(".btn-admin-bar").on("click", function() {
			if (!$(this).hasClass("is-open")) {
				
				$admin.fadeIn(function() {
					var heightHeader = $admin.height();
					$btn.addClass("is-open").css('top', heightHeader);
				});
			} else {
				$(this).removeClass("is-open").css('top', 0);
				$admin.fadeOut();
			}
		});
	}


});*/