Revolution.Module.extend({
	NAME : "r9.main", // OBLIGATOIRE (reflète l'arborescence répertoire : /r9/main.js)

	initialize : function ($) {
		// appelé aussitôt la page chargée
		//console.log("module " + this.NAME);

		//_.bindAll(this, "myfunction", "runEqualHeight", "getHeightsForOffsets");

		//Example to call an external function
		//var UTILS = Revolution.get("r9._utils");
		//UTILS.equalheight($('.bk-mosaique .js-equal-height'));
	},

	onWindowLoad : function (e) {
		//
	},
	onWindowScroll : function (e) {
		//
	},
	onWindowResize : function (e) {
		//
	},

	customFunction : function () {
		//
	}
});