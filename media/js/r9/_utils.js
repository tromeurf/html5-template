Revolution.Module.extend({
    NAME: "r9._utils", // OBLIGATOIRE (reflète l'arborescence répertoire : /r9/main.js)
    $menuMobile: $('.btn-nav-mob'),

    initialize: function ($) {
        // appelé aussitôt la page chargée
        //console.log("module " + this.NAME);

        _.bindAll(this, "equalheight", "runEqualHeight", "getHeightsForOffsets");

        this.runEqualHeight();

        //events
        $('body').on('click', 'a[href^="#"]:not([href="#"])', this.smoothScroll);

        $('body').on('blur', '.js-temp-focus', this.blurTempFocus);

        this.coverLike();

    },

    onWindowLoad: function (e) {
        //console.log("all assets loaded", e);
        this.runEqualHeight();

        this.coverLike();
    },

    onWindowScroll: function (e) {

    },
    onWindowResize: function (e) {
        this.runEqualHeight();
        
        this.coverLike();
    },

    equalheight_OLD: function ($target, callback) {

        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0,
            nbEl = $target.length;

        $target.each(function (index, value) {
            $el = $(this);
            $el.css({'height': 'auto', 'min-height': ''});
            topPostion = $el.offset().top;

            if (currentRowStart != topPostion) {
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].css('min-height', currentTallest/*+1*/); // +1 to fix mystic IE bug...
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.outerHeight();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.outerHeight()) ? ($el.outerHeight()) : (currentTallest);
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].css('min-height', currentTallest/*+1*/); // +1 to fix mystic IE bug...
            }
            if (callback && index == nbEl - 1) {
                callback();
            }

        });
    },

    /**
     * This function is used to gather the outerHeights of child elements and push them by offset.
     * @param $target
     * @returns {Array}
     */
    getHeightsForOffsets: function ($target) {
        var offsetTop,
            outerHeight,
            widgetTallest = [];

        // For each child of $target :
        $target.each(function (key, value) {
            offsetTop = Math.round($(value).offset().top);
            outerHeight = $(value).outerHeight();

            // First time.
            if (widgetTallest[offsetTop] === undefined) {
                widgetTallest[offsetTop] = outerHeight;
            }

            // If we found a taller element.
            if (widgetTallest[offsetTop] !== undefined
                && widgetTallest[offsetTop] < outerHeight) {
                widgetTallest[offsetTop] = outerHeight;
            }
        });

        return widgetTallest;
    },

    equalheight: function ($target, callback) {
        var widgetTallest = [],
            offsetTop,
            outerHeight,
            $hiddenParents;

        // We display temporarily the hidden parents.
        $hiddenParents = $target.parents().filter(':hidden');
        $hiddenParents.each(function (index, elem) {
            if ($(elem).outerWidth() !== 0) {
                
                var styleElem = $(elem).attr('style');
                if (styleElem != undefined && styleElem.indexOf('display') > -1) { //if element is hidden by js
                    $(elem).css({'display': 'block'}).attr({'data-invisible-parent':'true', 'data-hidden-by-js':'true'});
                    //console.log('CACHE EN JS : ', $(elem));
                } else {
                    $(elem).css({'display': 'block'}).attr({'data-invisible-parent':'true', 'data-hidden-by-js':'false'});
                    //console.log('CACHE EN CSS : ', $(elem));
                }
            }
        });

        $target.css({'height': 'auto', 'min-height': ''});

        // For each child we modifiy the height according to the information we have for current offset.
        $target.each(_.bind(function (key, value) {

            offsetTop = Math.round($(value).offset().top);
            outerHeight = $(value).outerHeight();

            // Refresh offsets/heights before processing the next element.
            widgetTallest = this.getHeightsForOffsets($target);

            // If we have a superior size for the same offset our element has, then we change it's height.
            if (widgetTallest[offsetTop] >= outerHeight) {
                //console.log('Changing %d from %d to %d', offsetTop, outerHeight, widgetTallest[offsetTop]);
                $(value).css({
                    height: 'auto',
                    'min-height': widgetTallest[offsetTop] + 'px',
                });
            }
        }, this));

        // Hidden elements in the page are now made hidden again.

        $hiddenParents.each(function (index, elem) {
            if ($(elem).attr('data-hidden-by-js') == 'true') { //if element is hidden by js
                $(elem).css({'display': 'none'}).removeAttr('data-invisible-parent').removeAttr('data-hidden-by-js');
            } else {
                $(elem).css({'display': ''}).removeAttr('data-invisible-parent').removeAttr('data-hidden-by-js');
            }
        });

        //Callback
        if (callback) {
            callback();
        }

    },

    runEqualHeight: function () {
        var THIS = this;
        THIS.equalheight($('.js-equal-height'));
        //THIS.equalheight($('.bk-mosaique .js-equal-height'));
    },

    isMenuMobile: function () {
        THIS = this;
        if (THIS.$menuMobile.is(':visible')) {
            return true;
        } else {
            return false;
        }
    },
    isMenuDesktop: function () {
        THIS = this;
        if (THIS.$menuMobile.is(':visible')) {
            return false;
        } else {
            return true;
        }
    },


    smoothScroll: function (e) {
        $obj = $(e.currentTarget);
        // on scroll jusqu'à l'ancre
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            //var adjust = $(".page-header-wrapper").height() + 50;
            var adjust = 0;
            // console.log('Onglet ? '+$obj.hasClass('ui-tabs-anchor'));
            // console.log('adjust : '+ adjust);
            // console.log('target.offset().top :'+target.offset().top);
            if (target.length && target.offset().top != 0) {
                $('html,body').animate({
                    scrollTop: target.offset().top - adjust
                }, 1000);
                //target.attr("tabindex", "0");
                //target.focus();
                // target.blur(function () {
                //     $(this).removeAttr("tabindex");
                // });
                return false;
            }
        }
    },

    giveTempFocusTo: function($target) {
        $target.addClass('js-temp-focus').attr('tabindex','-1').focus();
    },
    blurTempFocus: function (e) {
        $obj = $(e.currentTarget);
        $obj.removeClass('js-temp-focus').removeClass('anchor-new-content').removeAttr('tabindex');
    },

    coverLike : function (callback) {

        var nbCover = $('.cover').length;
        $('.cover').each(function(index, element) {
            $this = $(element);
            $this.css('max-width', 'inherit');
            $this.closest('.cover-parent').css('overflow', 'hidden');


            var largeurInitVisu = ($(this).attr('width')) ? $this.attr('width') : $this.data('w');
            var hauteurInitVisu = ($(this).attr('height')) ? $this.attr('height') : $this.data('h');

            var ratioVisu = largeurInitVisu/hauteurInitVisu;

            if (isNaN(ratioVisu)) {
                    console.log('========================');
                    console.log('YOU HAVE TO SET WIDTH AND HEIGHT or DATA-W AND DATA-H ATTRIBUTES ON THIS ELEMENT');
                    console.log(element);
                    console.log('========================');
            }
            if (largeurInitVisu == undefined || hauteurInitVisu == undefined) {
                    largeurInitVisu = $this.width();
                    hauteurInitVisu = $this.height();
                    ratioVisu = largeurInitVisu/hauteurInitVisu;
            }
            
            var largeurConteneur = $this.closest('.cover-parent').outerWidth();
            var hauteurConteneur = $this.closest('.cover-parent').outerHeight();

            var ratioConteneur = largeurConteneur/hauteurConteneur;
            
            if (ratioConteneur > ratioVisu) {
                    $this.width(largeurConteneur);
                    $this.height(largeurConteneur/ratioVisu);
                    if ($this.hasClass('valign-t')) {
                            //VAlignee au en haut
                            var decalage = 0;
                    } else if($this.hasClass('valign-b')) {
                            //VAlignee au en bas
                            var decalage = hauteurConteneur-$this.height();
                    } else {
                            //VAlignee au milieu
                            var decalage = (hauteurConteneur-$this.height())/2;
                    }
                    
                    $this.css('left', 0);
                    $this.css('top',decalage);
            } else {
                    $this.height(hauteurConteneur);
                    $this.width(hauteurConteneur*ratioVisu);
                    if ($this.hasClass('align-l')) {
                            //Alignee au en haut
                            var decalage = 0;
                    } else if($this.hasClass('align-r')) {
                            //Alignee au en bas
                            var decalage = largeurConteneur-$this.width();
                    } else {
                            //Alignee au milieu
                            var decalage = (largeurConteneur-$this.width())/2;
                    }
                    
                    $this.css('top', 0);
                    $this.css('left',decalage);
                    
            }
            

            //CALLBACK
            if(callback && nbCover == index + 1) {
                    setTimeout(function(){
                            //console.log('CALLBACK');
                            $('.slick-slider').each(function() {

                                    var $parentSection = $(this).closest('section');

                                    $parentSection.css({'min-height': '0'});
                                    $parentSection.find('.section-content').css({'min-height': '0'});
                                    $parentSection.find('.content-block').css({'margin-top': '0'});
                                    $parentSection.find('.cover').css({'height': 'auto', 'width': 'auto', 'top': 'auto', 'max-width': '100%', 'left': 'auto'});
                                    $parentSection.find('.cover-parent.slick-slide').each(function() {
                                            $(this).css('min-height', $(this).find('img').height());
                                    });
                                    $parentSection.find('.slick-list').css('height', 'auto');
                                    $parentSection.find('.slick-article').find('.cover').css('width', '100%');
                            });
                    }, 0);
            }
        });
    },

    containLike : function (callback) {
        $('.contain').each(function(index, element) {
            $this = $(element);
            $this.css({'max-width': '100%', 'max-height': '100%'});


            var largeurInitVisu = ($(this).attr('width')) ? $this.attr('width') : $this.data('w');
            var hauteurInitVisu = ($(this).attr('height')) ? $this.attr('height') : $this.data('h');

            var ratioVisu = largeurInitVisu/hauteurInitVisu;

            if (isNaN(ratioVisu)) {
                    console.log('========================');
                    console.log('YOU HAVE TO SET WIDTH AND HEIGHT or DATA-W AND DATA-H ATTRIBUTES ON THIS ELEMENT');
                    console.log(element);
                    console.log('========================');
            }
            if (largeurInitVisu == undefined || hauteurInitVisu == undefined) {
                    largeurInitVisu = $this.width();
                    hauteurInitVisu = $this.height();
                    ratioVisu = largeurInitVisu/hauteurInitVisu;
            }
            
            var largeurConteneur = $this.closest('.contain-parent').outerWidth();
            var hauteurConteneur = $this.closest('.contain-parent').outerHeight();

            var ratioConteneur = largeurConteneur/hauteurConteneur;

            /*console.log('------------------------------');
            console.log('largeurConteneur : '+largeurConteneur);
            console.log('hauteurConteneur : '+hauteurConteneur);
            console.log('ratioConteneur : '+ratioConteneur);
            console.log('------------------------------');
            console.log('largeurInitVisu : '+largeurInitVisu);
            console.log('hauteurInitVisu : '+hauteurInitVisu);
            console.log('ratioVisu : '+ratioVisu);
            console.log('------------------------------');*/

            if (ratioConteneur > ratioVisu) { // Conteneur + Pano que visu
                    $this.height(hauteurConteneur);
                    $this.width(hauteurConteneur*ratioVisu);
                    
                    //Alignee au milieu
                    var decalage = (largeurConteneur-$this.width())/2;
                    
                    /*$this.css('left', 0);
                    $this.css('top',decalage);*/
                    $this.css('top', 0);
                    $this.css('left',decalage);
            } else { // Conteneur + Portrait que visu
                    $this.width(largeurConteneur);
                    $this.height(largeurConteneur/ratioVisu);
                    
                    //VAlignee au milieu
                    var decalage = (hauteurConteneur-$this.height())/2;
                    
                    /*$this.css('top', 0);
                    $this.css('left',decalage);*/
                    $this.css('left', 0);
                    $this.css('top',decalage);
                    
            }
        });
    }

});
