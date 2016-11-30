Revolution.Module.extend({
    NAME: "r9.nav", // OBLIGATOIRE (reflète l'arborescence répertoire : /r9/main.js)

    initialize: function ($) {
        // appelé aussitôt la page chargée
        //console.log("module " + this.NAME);

        _.bindAll(this, "closeNavMob", "showBtnExpendTouch");
        //
        this.initEnquireResetStyles();

        //events

        $('.js-toggle-mob-nav').on('click', this.toggleMobileMenu);

        $('.main-nav .li-level-1').on('mouseenter', this.navMouseEnter);
        $('.main-nav .li-level-1').on('mouseleave', this.navMouseLeave);

        $('.main-nav .lk-level-1 .btn-expend').on('click', this.toggleLevel2);
        $('.js-close-nav-mob').on('click', this.closeNavMob);

        if(Modernizr.touchevents) {
            this.showBtnExpendTouch();
        }

    },

    onWindowLoad: function (e) {
        
    },

    onWindowScroll: function (e) {

    },
    onWindowResize: function (e) {
        
    },




    navMouseEnter: function (e) {
        var UTILS = Revolution.get("r9._utils");
        $obj = $(e.currentTarget);
        if (UTILS.isMenuDesktop() && !Modernizr.touchevents) {
            $obj.addClass('active');
            if ($('.level-2-wrapper:visible').length) {
                $obj.find('.level-2-wrapper').addClass('open').stop().show();
            } else {
                $obj.find('.level-2-wrapper').addClass('open').stop().fadeIn();
            }
        }
    },
    navMouseLeave: function (e) {
        $obj.removeClass('active');
        var UTILS = Revolution.get("r9._utils");
        $obj = $(e.currentTarget);
        if (UTILS.isMenuDesktop() && !Modernizr.touchevents) {
            $obj.find('.level-2-wrapper').removeClass('open').stop().fadeOut(10);
        }
    },

    reinitMobileMenu: function () {
        $('body, header [style]').removeAttr('style');
        $('header .open').removeClass('open');
    },

    initEnquireResetStyles:function () {
        enquire.register("screen and (min-width:63.9375em)", { //1023px
            match : _.bind(function() {
                this.reinitMobileMenu();
            }, this),
            unmatch: _.bind(function() {
                this.reinitMobileMenu();
            }, this)
        });
    },

    toggleMobileMenu: function(e) {
        e.preventDefault();
        $obj = $(e.currentTarget);
        $mobileNav = $('.main-nav');

        if ($obj.hasClass('open')) {
            $obj.removeClass('open');
            $mobileNav.stop().fadeOut();
            $('body').css('overflow', '');
        } else {
            $obj.addClass('open');
            $mobileNav.stop().fadeIn();
            $('body').css('overflow', 'hidden');
        }
    },

    toggleLevel2: function(e) {
        e.preventDefault();
        $obj = $(e.currentTarget);
        $currentLi = $obj.closest('li');
        $currentLevel2 = $currentLi.find('.level-2-wrapper');
        $mobileNav = $('.main-nav');
        var UTILS = Revolution.get("r9._utils");

        if (UTILS.isMenuMobile()) { //MOBILE

            if ($currentLi.hasClass('open')) { // BACK TO LEVEL 1
                $currentLi.removeClass('open');
                $currentLevel2.stop().slideUp();
                $mobileNav.find('.li-level-1').not(':visible').stop().slideDown();
            } else { // GO TO LEVEL 2
                $currentLi.addClass('open');
                $currentLevel2.stop().slideDown();
                $mobileNav.find('.li-level-1').not('.open').stop().slideUp();
            }
           
        } else if (Modernizr.touchevents) { //DESKTOP & TOUCH

            if ($currentLevel2.hasClass('open')) { //close
                $currentLi.removeClass('active');
                $currentLi.find('.level-2-wrapper').removeClass('open').stop().fadeOut();
            } else {// open
                //close opened nav
                $mobileNav.find('.active').removeClass('active');
                $mobileNav.find('.open').removeClass('open');
                $mobileNav.find('.level-2-wrapper').stop().fadeOut();

                //open current
                $currentLi.addClass('active');
                $currentLi.find('.level-2-wrapper').addClass('open').stop().fadeIn();

            }
        }

    },

    closeNavMob : function (e) {
        var $navMob = $('.main-nav');
        $navMob.fadeOut(_.bind(function () {
            //reset opened menu 
            this.reinitMobileMenu();
        }, this));
    },
    showBtnExpendTouch : function() {
        $('.page-header-wrapper .main-nav .li-level-1 .btn-expend').show();
    }


});