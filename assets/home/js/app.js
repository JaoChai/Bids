//Common js
	// Get IE or Edge browser version
	var version = detectIE();

	if (version) {
		$('body').addClass('ie');
	}

	var isTouchDevice = 'ontouchstart' in window || navigator.msMaxTouchPoints;
	if( isTouchDevice ) {
		$('body').addClass('touch');
	}
	// detect Mac
	if(navigator.userAgent.indexOf('Mac') > 0) {
		$('body').addClass('mac');
	}

	function inIframe () {
		try {
			return window.self !== window.top;
		} catch (e) {
			return true;
		}
	}

	function detectIE() {
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf('MSIE ');
		if (msie > 0) {
			// IE 10 or older => return version number
			return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
		}
		var trident = ua.indexOf('Trident/');
		if (trident > 0) {
			// IE 11 => return version number
			var rv = ua.indexOf('rv:');
			return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
		}
		var edge = ua.indexOf('Edge/');
		if (edge > 0) {
			// Edge (IE 12+) => return version number
			return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
		}
		// other browser
		return false;
	}

	function slidePanel(){
		var button = ".slidepanel-toggle",
			$wrapper = $("body");
		$wrapper.on('click', button, function(e) {
			if($('#toolsPanel').length){
				$("input[name='slidepanelshow']", $('#toolsPanel')).trigger('click');
			} else $wrapper.toggleClass("open-panel");
			setTimeout(function() {
				$('.slick-initialized').slick('setPosition');
			}, 500);
			$('body').otherResize();
			e.preventDefault();
		});
	}
	// icrease/decrease input

	function changeInput() {

		$(document).on('click', '.decrease', function(e) {
			var input_el = $(e.target).next('input');
			var v = input_el.val()-1;
			if (input_el.attr('data-min')) {
				if (v>=input_el.attr('data-min')) input_el.val(v)
			}
			else {
				input_el.val(v)
			}
			e.preventDefault();
		});

		$(document).on('click', '.increase', function(e) {
			var input_el = $(e.target).prev('input');
			var v = input_el.val()*1+1;
			if (input_el.attr('data-max')) {
				if (v<=input_el.attr('data-max')) input_el.val(v)
			}
			else {
				input_el.val(v)
			}
			e.preventDefault();
		});

	}

	function setFullHeight() {

		if ($('.push-footer').length) $('.push-footer').remove();
		if ($(".block.fullheight").length) {
			$(".block.fullheight").css('height', '');
		}

		var $wrapper = $("body"),
			$footer = $('.page-footer'),
			$content = $(".page-main"),
			footerH = $footer.length ? $footer.height() : 0,
			offsetTop = $content.length ? $content.offset().top : 0,
			wHeight = Math.max($wrapper.height() - footerH - offsetTop, $(".block.fullheight").outerHeight());

		if ($(".block.fullheight").length) {
			$wrapper.css({'overflow-y':'scroll'});
			$(".block.fullheight").css('height', wHeight + 'px');
		}

		var footerH = $footer.length ? $footer.outerHeight() : 0,
			footerTop = $footer.length ? $footer.offset().top : 0,
			footerPush = $(window).height() - footerH - footerTop;
		if(footerPush>0){
			$footer.before('<div class="push-footer"></div>');
			$('.push-footer').css({'height': footerPush + 'px'});
		}
	}

	function setFullWidth() {

		var wWidth = $("body").width() - $('.sidebar-wrapper').width();

		$('body .fullwidth, body .fullboxed, body .boxed').each(function() {
			$(this).css({
				'width': '',
				'margin-left': '',
				'margin-right': ''
			});
		});

		if($('body').hasClass('rtl')) {
			$('body .fullwidth, body .fullboxed').each(function() {
				$(this).css({
					'width': wWidth + 'px',
					'margin-right': -wWidth / 2 + 'px',
					'margin-left': ''
				});
			});
		} else {
			$('body .fullwidth, body .fullboxed').each(function() {
				$(this).css({
					'width': wWidth + 'px',
					'margin-left': -wWidth / 2 + 'px',
					'margin-right': ''
				});
			});
		}

	}

	$.fn.blockSelectedMark = function() {
		var $block = this;
		function markSelected(block) {
			var $this = block;
			if ($this.find('li.active').length){
				$this.addClass('selected');
			}
			else {
				$this.removeClass('selected');
			}
		}
		$block.each(function() {
			markSelected($(this));
		})
		$('li > a', $block).unbind('click.blockSelectedMark');
		$('li > a', $block).on('click.blockSelectedMark', function(e) {
			if($('.filter-col').hasClass('no-ajax-filter')) return;
			var $this = $(this);
			//e.preventDefault();
			$this.parent().toggleClass('active');
			markSelected($this.closest('.sidebar-block'));
		})
	}

	$.fn.hideShopBy = function() {
		var $content = this,
			$filters = $('.selected-filters', $content);
		if(!$filters.length || $filters.html().trim() === "") $content.closest('.sidebar-block-top').hide();
	}

	$.fn.blockCollapse = function() {
		var $collapsed = this,
			slidespeed = 250;

		$('.block-content', $collapsed).each(function() {
			if ($(this).parent().is('.open')){
				$(this).slideDown(0);
			}
		})

		$('.block-title').unbind('click.blockCollapse');
		$('.block-title', $collapsed ).on('click.blockCollapse', function(e) {
			e.preventDefault;
			var $this = $(this),
				$thiscontent = $this.next('.block-content');
			if ($this.parent().is('.open')){
				$this.parent().removeClass('open');
				$thiscontent.slideUp(slidespeed);
			}
			else {
				$this.parent().addClass('open');
				$thiscontent.slideDown(slidespeed);
			}
		})
	}

	$.fn.blockCollapseAccordion = function() {
		var $collapsed = this,
			slidespeed = 250;
		$('.block-content', $collapsed).each(function() {
			if ($(this).parent().is('.open')){
				$(this).slideDown(0);
			}
		})
		$('.block-title').unbind('click.blockCollapseAccordion');
		$('.block-title', $collapsed ).on('click.blockCollapseAccordion', function(e) {
			e.preventDefault;
			var $this = $(this),
				$thiscontent = $this.next('.block-content');
			if ($this.parent().is('.open')){
				$this.parent().removeClass('open');
				$thiscontent.slideUp(slidespeed);
			}
			else {
				$this.closest('.filter-col-content').find('.sidebar-block.collapsed').removeClass('open');
				$this.closest('.filter-col-content').find('.sidebar-block.collapsed .block-content').slideUp(slidespeed);
				$this.parent().addClass('open');
				$thiscontent.slideDown(slidespeed);
			}
			setTimeout(function() {
				$(".filter-col.fixed").fixedSidebar();
			}, slidespeed);
		})
	}

	$.fn.mobileFilter = function() {
		var $mobilefilter = this,
			$toggleFilter = '.filter-col-toggle';

		$(document).on('click', $toggleFilter, function(e) {
			$mobilefilter.toggleClass('active');
			$('body').toggleClass('fixed');
			e.preventDefault();
		})

		$(document).on('click', '.filter-col', function(e) {
			if( $(e.target).hasClass('active')) {
				$mobilefilter.removeClass('active');
				$('body').removeClass('fixed');
				e.preventDefault();
			}
		})
	}

	$.fn.footerCollapse = function() {
		var $collapsed = this;
		$('.title', $collapsed ).on('click', function(e) {
			e.preventDefault;
			$(this).closest('.collapsed-mobile').toggleClass('open');
		})
	}

	$.fn.mobileMenu = function() {

		var $mobilemenu = $(this),
			$toggleMenu = $('.mobilemenu-toggle'),
			$mobileCaret = $('ul.nav li .arrow', $mobilemenu),
			$mobileLink = $('ul.nav li > a', $mobilemenu);

		$toggleMenu.on('click.mobileMenu', function() {
			$mobilemenu.toggleClass('active');
			$('body').toggleClass('fixed');
			return false;
		});
		$mobilemenu.on('click.mobileMenu', function(e){
			if( $(e.target).is($mobilemenu) ) {
				$mobilemenu.toggleClass('active');
				$('body').toggleClass('fixed');
				e.preventDefault();
			}
		});

		function mobileEvent() {
			$mobileCaret.on('click.mobileMenu', function(e){
				e.preventDefault();
				var $parent = $(this).parent();
				if ($parent.hasClass('submenu-open')) {
					$('li.submenu-open ul', $parent).slideUp(200);
					$('li', $parent).removeClass('submenu-open');
					$parent.removeClass('submenu-open');
					$('> ul', $parent).slideUp(200);
					$parent.removeData('firstclick');
				} else {
					$parent.addClass('submenu-open');
					$(' > ul', $parent).slideDown(200);
					$parent.data('firstclick', true);
				}
			});
			if($mobilemenu.hasClass('dblclick')){
				$mobileLink.on('click.mobileMenu', function(e){
					e.preventDefault();
					var $parent = $(this).parent();
					if(!$parent.data('firstclick') && $parent.find('ul').length){
						$parent.addClass('submenu-open');
						$(' > ul', $parent).slideDown(200);
						$parent.data('firstclick', true);
					} else {
						var href = $(this).attr("href"),
							target = $(this).attr("target") ? $(this).attr("target") : '_self';
						window.open(href, target);
						$parent.removeData('firstclick');
					}
				});
			}
		}

		var windowWidth = $(window).width();

		if (windowWidth < 992) {
			mobileEvent();
		}

		var prevWindow = windowWidth;

		$(window).bind('resize', function() {
			var currentWindow = window.innerWidth || $(window).width();
			if (currentWindow != prevWindow) {
				$mobileLink.unbind('click.mobileMenu');
				$mobileCaret.unbind('click.mobileMenu');
				setTimeout(function() {
					if (currentWindow > 991) {
						$('body').removeClass('fixed');
						$mobilemenu.removeClass('active');
					} else mobileEvent();
				}, 500);
				prevWindow = currentWindow;
			}
		});
	}



	// for magento minicart	- variant-1
	$.fn.mobileMinicart = function() {
		var $mobilecart = $(this),
			$toggleCart = $('> a', $mobilecart),
			$closeCart = $('.block-title', $mobilecart),
			$dropdown = $('.dropdown-container', $mobilecart);
		function eventsIni() {
			var windowWidth = $(window).width();

			if (windowWidth < 992) {
				if (!$mobilecart.data('mobile')){
					$toggleCart.on('click.mobileMinicart', function(e){
						$mobilecart.toggleClass('active');
						$('body').toggleClass('fixed');
						return false;
					});
					$closeCart.on('click.mobileMinicart', function(e){
						$mobilecart.removeClass('active');
						$('body').removeClass('fixed');
						return false;
					});
					$mobilecart.on('click.mobileMinicart', function(e){
						if( $(e.target).is($dropdown) ) {
							$mobilecart.removeClass('active');
							$('body').removeClass('fixed');
							e.preventDefault();
						}
					});
					$mobilecart.data('mobile', true);
				}
			}
			else {
				$toggleCart.unbind('click.mobileMinicart');
				$closeCart.unbind('click.mobileMinicart');
				$mobilecart.unbind('click.mobileMinicart').removeClass('active');
				$('body').removeClass('fixed');
				$mobilecart.removeData('mobile');
			}
		}
		eventsIni();
		$(window).bind('resize', function() {
			setTimeout(function() {
				eventsIni();
			}, 500);
		});
	}

// for default minicart - variant-2
$.fn.mobileMinicartAlt = function() {
	var $mobilecart = this,
		$mobilecartscroll = $('.block-minicart', $mobilecart),
		$toggleCart = $('> a', $mobilecart),
		$closeCart = $('.btn-minicart-close', $mobilecart),
		$dropdown = $('.dropdown-container', $mobilecart),
		wHeight = $(window).height(),
		$menu = $('.megamenu'),
		$header = $('.page-header');
	//var scrollW = getScrollBarSize();
	var windowWidth = $( window ).width();

	// Minicart Max Height
	function setMaxHeight(wHeight) {
		var cartH;
		var windowWidth = $(window).width();
		if (windowWidth < 992) {
			$dropdown.scrollTop(0);
			if($header.hasClass('variant-3')) cartH = $(window).height() - $header.height();
			else if(!$header.hasClass('is-sticky')) cartH = $(window).height() - $toggleCart.offset().top - $toggleCart.height();
			else cartH = $(window).height() - $header.height();
		} else {
			cartH = Math.min($(window).height() - $header.height(), $mobilecartscroll[0].scrollHeight );
		}
		$dropdown.css({'max-height': cartH + 'px'});
		$mobilecartscroll.css({'max-height': cartH + 'px'});
	}

	function eventsIni(wHeight) {
		if (windowWidth < 992) {
			if (!$mobilecart.data('mobile')) {
				$mobilecartscroll.scrollLock('disable');
				$mobilecart.unbind('.mobileMinicart');
				$toggleCart.unbind('.mobileMinicart');
				$toggleCart.on('click.mobileMinicart', function (e) {
					if ($mobilecart.hasClass('active')) {
						$dropdown.css({
							'max-height': '0'
						});
						$mobilecartscroll.css({
							'max-height': '0'
						});
						$mobilecart.removeClass('active');
						$header.data('cartopen', false);
						return false;
					} else {
						setMaxHeight($(window).height());
						$mobilecart.addClass('active');
						$header.data('cartopen', true);
						return false;
					}
				});
				$closeCart.on('click.mobileMinicart', function (e) {
					$dropdown.css({
						'max-height': '0'
					});
					$mobilecartscroll.css({
						'max-height': '0'
					});
					$mobilecart.removeClass('active');
					$header.data('cartopen', false);
					return false;
				});
				$mobilecart.data('mobile', true)
			}
		} else {
			$mobilecartscroll.scrollLock();
			$toggleCart.unbind('click.mobileMinicart');
			$closeCart.unbind('click.mobileMinicart');
			$mobilecart.unbind('click.mobileMinicart');
			$mobilecart.on("mouseenter.mobileMinicart", function () {
				$mobilecartscroll.scrollTop(0);
				$mobilecart.data('open', true);
				setMaxHeight($(window).height());
				$header.data('cartopen', true);
			}).on("mouseleave.mobileMinicart", function () {
				$dropdown.css({
					'max-height': ''
				});
				$mobilecartscroll.css({
					'max-height': '0'
				});
				$header.data('cartopen', false);
			});
			$mobilecart.removeData('mobile');
		}
	}

	eventsIni();

	$(window).bind('resize', function() {
		$mobilecart.removeData('setHeight');
		eventsIni();
	});
}

	// instagram carousel
	if ($(".instagramm-feed-full").length) {

		var timer = setInterval(checkInst, 200);

		function checkInst() {
			if ($(".instagramm-feed-full").has('a').length) {
				startInstCarousel();
				clearInterval(timer);
			}
		}

		function startInstCarousel() {
			$(".instagramm-feed-full").find('a').each( function() {
				$(this).attr('target', '_blank');
			});
			var $slider = $(".instagramm-feed-full").slick({
				speed: 700,
				slidesToShow: 10,
				slidesToScroll: 2,
				cssEase: 'linear',
				responsive: [{
					breakpoint: 993,
					settings: {
						slidesToShow: 6,
						slidesToScroll: 2
					}
				}, {
					breakpoint: 769,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2
					}
				}, {
					breakpoint: 481,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						arrows: false
					}
				}]
			});
			var scroll,
				speed = 0;
			var stop = function () {
				clearInterval(scroll);
			}
			var rw = function () {
				stop();
				$slider.slick("slickPrev");
				scroll = setInterval(function () {
					$slider.slick("slickPrev");
				}, speed);
			};
			var fw = function () {
				stop();
				$slider.slick("slickNext");
				scroll = setInterval(function () {
					$slider.slick("slickNext");
				}, speed);
			}
			if(!$('body').is('.touch')){
				$("body").on("mouseenter", ".instagramm-feed-full .slick-next", fw)
					.on("mouseenter", ".instagramm-feed-full .slick-prev", rw)
					.on("mouseleave", ".instagramm-feed-full .slick-next, .instagramm-feed-full .slick-prev", stop);
			}
		}
	}

$.fn.expandingSearch = function() {
		var $searchBox = this,
			$submitIcon = $('.exp-icon-search', $searchBox),
			$submitInput = $('.exp-search-input', $searchBox),
			$closeIcon = $('.exp-search-close', $searchBox),
			$navbar = $('.navbar'),
			$menu = $('.megamenu', $navbar),
			isOpen = false,
			$header = $('.page-header'),
			$menu = $('.megamenu', $header);


		$submitIcon.on('click', function(e){
			if ($menu.css('display') == 'none' || $header.hasClass('variant-7') || $header.hasClass('variant-8')) {
				$(this).closest('form').submit();
			}
			else {
				if(isOpen == false){
					$searchBox.addClass('exp-search-open');
					if (!($menu.css('display') == 'none')){
						var inputW = $searchBox.offset().left - $menu.offset().left + 40
						// for desktop open input until menu start
						if($('body').hasClass('rtl')) {
							inputW = ($menu.offset().left + $menu.width()) - $searchBox.offset().left;
						}
						$searchBox.css({'width': inputW + 'px'})
					}
					$submitInput.focus();
					$menu.addClass('unvisible');
					isOpen = true;
				} else {
					$(this).closest('form').submit();
				}
			}
		});

		$closeIcon.on('click', function(e){
			$submitInput.val('');
			$searchBox.removeClass('exp-search-open').css({'width': ''});
			$menu.removeClass('unvisible');
			isOpen = false;
		});
	}

	function productSharing() {
		var link = 'a.sharing',
			leave = '.product-item-inside, .product-item-inside .social-list';
		$(document).on('click', link, function(e) {
			var $el = $(this);
			$el.closest('.product-item').addClass('sharing');
			e.preventDefault();
		})
		$(document).on('mouseleave', leave, function(e) {
			var $el = $(this);
			$el.closest('.product-item').removeClass('sharing');
		})
	}


	// color swatch
	function colorSwatch(link) {
		var link = link + ' a';
		$(document).on('click', link, function(e) {
			var $el = $(this);
			if($el.data('image')){
				var $image = $el.closest('.product-item-inside').find('img.product-image-photo');
				// if inner carousel in product
				if ($el.closest('.product-item-inside').find('.carousel-inside').length){
					$el.closest('.product-item-inside').find('.carousel-inside').carousel(0);
					$image = $el.closest('.product-item-inside').find('.product-item-photo .item:first-child img');
				}
				imgSrc = $el.data('image');
				$el.closest('ul.color-swatch').find('li').removeClass('active');
				$el.parent('li').addClass('active');
				var newImg = document.createElement("img");
				newImg.src = $el.data('image');
				newImg.onload = function () {
					$image.attr('src', $el.data('image'))
				}
			}
			e.preventDefault();
		})
	}


	function ShowHideLists (list) {
		var thisBtnsList   = list;
		var showBtn = thisBtnsList.prev().find('.view-all');
		var bShowEm = showBtn.data ('bShowEm')  ||  false;

		ShowItems (thisBtnsList, bShowEm, thisBtnsList.closest('.truncateList').data('listItems') );
		bShowEm ^= true;

		showBtn.data ('bShowEm', bShowEm);
		if (bShowEm) {
			showBtn.removeClass('disabled');
		}
		else {
			showBtn.addClass('disabled');
		}

	}

	function ShowItems (list, bShowAll, numVisible) {
		if (bShowAll) {
			list.find ("> li:gt(" + (numVisible-1) + ")").fadeIn(300);
		}
		else {
			list.find ("> li:lt(" +  numVisible    + ")").show();
			list.find ("> li:gt(" + (numVisible-1) + ")").fadeOut(300);
		}

	}




	$(function(){
		// truncated list megamenu
		if($('.truncateList').length){
			$('.truncateList').each(function() {
				ShowHideLists($(this).find('ul.category-links'));
			})
			$('.truncateList .view-all').on('click', function(e){
				ShowHideLists($(this).parent().next('ul.category-links'));
				e.preventDefault();
			})
		}
		// END truncated list megamenu
	});
	//Carousel Inside
	$.fn.insideCarousel = function() {
		var $carousel = this,
			next = '.carousel-control.next',
			prev = '.carousel-control.prev';

		$carousel.carousel({
			interval: false
		})
		$(document).on('click', next, function() {
			$(this).parent().carousel('next');
		});
		$(document).on('click', prev, function() {
			$(this).parent('.carousel-inside').carousel('prev');
		});
	}

	function carouselNormalization(carousel) {
		var $carousel = carousel,
			items   = $carousel.find('.item'),
			heights = [],
			tallest;
		if (items.length) {
			function normalizeHeights() {
				items.each(function() {
					heights.push($(this).height());
				});
				tallest = Math.max.apply(null, heights);
				items.each(function() {
					$(this).find('a').css('height', tallest + 'px');
				});
			};
			normalizeHeights();
			$(window).bind('resize', function() {
				tallest = 0, heights.length = 0;
				items.each(function() {
					$(this).find('a').css('height', '0');
				});
				setTimeout(function () {
					normalizeHeights();
				}, 500)
			});
		}
	}

$(function(){




	// ini carousel via data params
    $(".data-carousel").slick();


    // from blog carousel
    if ($(".blog-carousel").length) {
        var $this = $(".blog-carousel"),
            arrowsplace = $this;

        var $carouseltitle = $this.prev('.title');

        if ($this.parent().hasClass('collapsed-content')){
            $carouseltitle = $this.parent().prev('.title');
        }
        if ($carouseltitle.find('.carousel-arrows').length) {
            arrowsplace = $carouseltitle.find('.carousel-arrows');
        }
        $this.slick({
            rows: 1,
            appendArrows: arrowsplace,
            slidesToShow: 2,
            slidesToScroll: 2,
            speed: 500,
            infinite: false,
            responsive: [{
                breakpoint: 1401,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },{
                breakpoint: 1201,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 769,
                settings: {
					slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // deal carousel
	if ($(".deal-carousel").length) {
		var $this = $(".deal-carousel"),
			arrowsplace = $this;

		var $carouseltitle = $this.prev('.title');
		swipemode = $('body').hasClass('touch') ? true : false;

		if ($this.parent().hasClass('collapsed-content')){
			$carouseltitle = $this.parent().prev('.title');
		}
		if ($carouseltitle.find('.carousel-arrows').length) {
			arrowsplace = $carouseltitle.find('.carousel-arrows');
		}
		$this.slick({
			rows: 1,
			appendArrows: arrowsplace,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			infinite: false,
			swipe: swipemode,
			responsive: [{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 769,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	}

	// deal carousel-2
	if ($(".deal-carousel-2").length) {
		var $this = $(".deal-carousel-2"),
			arrowsplace = $this;

		var $carouseltitle = $this.prev('.title'),
			swipemode = $('body').hasClass('touch') ? true : false;

		if ($this.parent().hasClass('collapsed-content')){
			$carouseltitle = $this.parent().prev('.title');
		}
		if ($carouseltitle.find('.carousel-arrows').length) {
			arrowsplace = $carouseltitle.find('.carousel-arrows');
		}
		$this.slick({
			rows: 1,
			appendArrows: arrowsplace,
			slidesToShow: 3,
			slidesToScroll: 1,
			speed: 500,
			infinite: false,
			swipe: swipemode,
			responsive: [{
				breakpoint: 993,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 481,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	}

	// testimonials single carousel
	if ($(".testimonial-single-slider").length) {
		var $this = $(".testimonial-single-slider");
		$this.slick({
			rows: 1,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			infinite: false
		});
	}

	// news  carousel
	if ($(".news-carousel").length) {
		var $this = $(".news-carousel");
		$this.slick({
			rows: 1,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			arrows: false,
			dots: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000
		});
	}

	// testimonials carousel
    if ($(".testimonials-carousel").length) {
        var $this = $(".testimonials-carousel"),
            arrowsplace = $this;

        var $carouseltitle = $this.prev('.title');

        if ($this.parent().hasClass('collapsed-content')){
            $carouseltitle = $this.parent().prev('.title');
        }
        if ($carouseltitle.find('.carousel-arrows').length) {
            arrowsplace = $carouseltitle.find('.carousel-arrows');
        }
        $this.slick({
            rows: 2,
            appendArrows: arrowsplace,
            slidesToShow: 2,
            slidesToScroll: 2,
            speed: 500,
            infinite: false,
			responsive: [{
				breakpoint: 1700,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},{
				breakpoint: 1201,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 993,
				settings: {
					rows: 2,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 769,
				settings: {
					rows: 2,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 481,
				settings: {
					rows: 2,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
        });
    }

	// product vertical carousel
	if ($(".product-vertical-carousel").length) {

		var $this = $(".product-vertical-carousel");
			arrowsplace = $this;

		var $carouseltitle = $this.prev('.title');

		if ($this.parent().hasClass('collapsed-content')){
			$carouseltitle = $this.parent().prev('.title');
		}
		if ($carouseltitle.find('.carousel-arrows').length) {
			arrowsplace = $carouseltitle.find('.carousel-arrows');
		}
		if ($this.closest('.col-sm-12').length){
			$this.slick({
				arrows: true,
				appendArrows: arrowsplace,
				vertical: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				speed: 500,
				responsive: [{
					breakpoint: 993,
					settings: {
						vertical: false,
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}, {
					breakpoint: 668,
					settings: {
						vertical: false,
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			})
		} else {
			$this.slick({
				arrows: true,
				appendArrows: arrowsplace,
				vertical: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				speed: 500
			})
		}
    }

	// category carousel
    if ($(".category-slider").length) {
 		var $this = $(".category-slider"),
			arrowsplace = $this;

		var $carouseltitle = $this.prev('.title');

		if ($this.parent().hasClass('collapsed-content')){
			$carouseltitle = $this.parent().prev('.title');
		}
		if ($carouseltitle.find('.carousel-arrows').length) {
			arrowsplace = $carouseltitle.find('.carousel-arrows');
		}
		$this.slick({
			rows: 1,
			appendArrows: arrowsplace,
			slidesToShow: 4,
			slidesToScroll: 4,
			speed: 500,
			infinite: false,
			responsive: [{
				breakpoint: 1401,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			},{
				breakpoint: 1201,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			}, {
				breakpoint: 993,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 481,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}]
		});
    }

	// brand carousel
	if ($(".brand-carousel").length) {
		var $this = $(".brand-carousel"),
			arrowsplace = $this.prev('.title');
		swipemode = $('body').hasClass('touch') ? true : false;
		$this.slick({
			rows: 2,
			appendArrows: arrowsplace,
			slidesToShow: 4,
			slidesToScroll: 2,
			speed: 500,
			infinite: false,
			swipe: swipemode,
			responsive: [{
				breakpoint: 1401,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			},{
				breakpoint: 1201,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 993,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 769,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 481,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}]
		});
	}
	$('.product-variant-1 .carousel-inside, .product-variant-2 .carousel-inside, .product-variant-3 .carousel-inside, .product-variant-4 .carousel-inside').each(function() {
		var $this = $(this);
		$this.insideCarousel();
		carouselNormalization($this);
	})

	$('.product-variant-5 .carousel-inside').each(function() {
		var $this = $(this);
		$this.insideCarousel();
	})
});





	// Journal Slide - Layout 3
	$.fn.journalSlide = function() {

		var $journal = $(this),
			$panelLeft = $('.journal-category-left', $journal),
			$panelRight = $('.journal-category-right', $journal),
			$panelLeftTitul = $('.journal-category-left .journal-category-inner', $journal),
			$panelRightTitul = $('.journal-category-right .journal-category-inner', $journal),
			$logoCenter = $('.logo-center', $journal),
			$productstack = $('.productStack');

		function hideStack(){
			if ($productstack.length && $productstack.is('.open') && $productstack.is('.hide_on_scroll')){
				$productstack.removeClass('open');
			}
		}

		$('body').css({'overflow-y':'auto'})

		$panelLeftTitul.on('click', '.toggle-panel', function() {
			$panelLeft.toggleClass('journal-category-left-active');
			$panelRight.toggleClass('journal-category-right-hidden');
			$logoCenter.toggleClass('logo-hidden');
			$('.page-header').removeClass('open');
			$('.toggleHeader').removeClass('open');
			$(this).toggleClass('open');
			hideStack();
		});

		$panelRightTitul.on('click', '.toggle-panel', function() {
			$panelRight.toggleClass('journal-category-right-active');
			$panelLeft.toggleClass('journal-category-left-hidden');
			$logoCenter.toggleClass('logo-hidden');
			$('.page-header').removeClass('open');
			$('.toggleHeader').removeClass('open');
			$(this).toggleClass('open');
			hideStack();
		});

		$panelLeftTitul.on('click', '.toggle-panel-mobile', function() {
			var $this = $(this);
			if ($panelLeft.hasClass('open')){
				var category_content = $this.closest('.journal-category-left').find('.journal-category-inner-left').detach();
				$this.closest('.journal-category-left').prepend(category_content);
			} else {
				var category_content = $this.closest('.journal-category-left').find('.journal-category-inner-left').detach();
				$this.closest('.journal-category-left').append(category_content);
			}
			$panelLeft.toggleClass('open');
			$panelRight.removeClass('open');
			$this.toggleClass('open');
			if ($panelLeft.hasClass('open')){
				$('html,body').animate({scrollTop: $this.offset().top}, 500);
			} else {
				$('html,body').animate({scrollTop: $panelLeft.offset().top }, 500);
			}
			hideStack();
		});

		$panelRightTitul.on('click', '.toggle-panel-mobile', function() {
			var $this = $(this);
			$panelRight.toggleClass('open');
			$panelLeft.removeClass('open');
			$this.toggleClass('open');
			if ($panelRight.hasClass('open')){
				$('html,body').animate({scrollTop: $this.offset().top}, 500);
			} else {
				$('html,body').animate({scrollTop: $panelRight.offset().top }, 500);
			}
			hideStack();
		});

		$('.journal-category').on('scroll', function() {
			hideStack();
			$('.page-header').removeClass('open');
			$('.toggleHeader').removeClass('open');
		})
	};





	// Product Stack
	$.fn.ProductStack = function(productstack) {
		var $productstack = this,
			$toggleStack = $(".toggleStack", $productstack),
			$editbtn = $(".action.edit", $productstack),
			$product = $(".products-list li", $productstack);


		$toggleStack.on('click', function (e) {
			$('.productStack').toggleClass('open');
			e.preventDefault();
		})


		$product.on('mouseleave', function(e) {
			var $this = $(this);
			setTimeout(function() {
				$this.find('.actions').removeClass('open');
			}, 200);
		});


		$productstack.on('click', 'a.action.edit', function(e) {
			$('.actions', $(this).closest('li')).toggleClass('open');
			e.preventDefault();
		});

		$(window).on('scroll.ProductStack', function() {
			if ($productstack.hasClass('open') && $productstack.hasClass('hide_on_scroll')){
				$productstack.removeClass('open');
			}
		})
	}

	// disable scroll function
	function preventDefault(e) {
		e = e || window.event;
		if (e.preventDefault)	e.preventDefault();
		e.returnValue = false;
	}
	function wheel(e) {
		preventDefault(e);
	}
	function disableScroll() {
		if (window.addEventListener) {
			window.addEventListener('DOMMouseScroll', wheel, false);
		}
		window.onmousewheel = document.onmousewheel = wheel;
	}
	function enableScroll() {
		if (window.removeEventListener) {
			window.removeEventListener('DOMMouseScroll', wheel, false);
		}
		window.onmousewheel = document.onmousewheel = null;
	}
	// END disable scroll function
	// Fly To Cart
	$.fn.FlyToCart = function(options) {

		var options = $.extend($.fn.FlyToCart.defaults, options);
		var $productstack = $(options.productstack);

		$(document).on('click.FlyToCart', options.link, function(e) {

			$el = $(this);

			disableScroll();

			var $cart = $('.toggleStack .icon', $productstack),
				cartY = $cart.offset().top + 60,
				cartX = $cart.offset().left + 20;

			if ($productstack.hasClass('disable')){
				$productstack.removeClass('disable');
				cartY = cartY - 50;
			}
			if (!$productstack.hasClass('open')){
				$productstack.addClass('open');
				cartY = cartY - $productstack.height();
			} else cartY = cartY - 50;
			if ($el.closest('.product-item-inside').find('.carousel-inside').length){
				$flyImg = $el.closest('.product-item-inside').find('.product-item-photo .item.active img.product-image-photo');
			} 	else $flyImg = $el.closest('.product-item-inside').find('img.product-image-photo');

			if ($flyImg) {
				var $cloneImg = $flyImg.clone()
					.offset({
						top: $flyImg.offset().top,
						left: $flyImg.offset().left
					})
					.css({
						'opacity': '0.9',
						'position': 'absolute',
						'width': $flyImg.width(),
						'z-index': '10000'
					})
					.appendTo($('body'))
					.delay(300)
					.animate({
						'top': cartY,
						'left': cartX,
						'width': 100
					}, 800);

				setTimeout(function () {
					$cart.addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
						$cart.removeClass('bounceIn animated');
						$cloneImg.detach();
					});
				}, 1500);

				$cloneImg.animate({
						'width': 0,
						'height': 0
					},
					300,
					function(){
						$.isFunction( options.complete ) && options.complete.call($el);
						enableScroll()
					}
				);
			}
			e.preventDefault();
		});
	}
	$.fn.FlyToCart.defaults = {
		complete : null,
		link: null,
		productstack: null
	};


	// sticky header - hide when scroll down
	$.fn.stickyHeaderSmart = function() {

		var $header = this,
			$body = $('body'),
			$menu = $('.megamenu', $header),
			isScroll = false,
			lastScrollTop = 0,
			delta = 10,
			headerOffset,
			stickyH;

		function setHeigth(){
			$(".fix-space").remove();
			$header.removeClass('animated is-sticky st-visible slideInDown slideOutUp');
			$body.removeClass('hdr-sticky');
			headerOffset = $('.navbar', $header).offset().top;
			stickyH = $header.height() + headerOffset;
			if ($menu.css('display') == 'none' || $header.hasClass('variant-4') || $header.hasClass('variant-5') || $header.hasClass('variant-6') || $header.hasClass('variant-7') || $header.hasClass('variant-8') || $header.hasClass('variant-9')){
				headerOffset = stickyH  + 52 ;
			}
		}

		setHeigth();


		$(window).on('scroll', function(){
			if( !isScroll ) {
				isScroll = true;
				setTimeout(function() {
					hasScrolled();
					isScroll = false;
				}, 50)
			}
		});

		var prevWindow = window.innerWidth || $(window).width()

		$(window).bind('resize', function() {
			var currentWindow = window.innerWidth || $(window).width();
			if (currentWindow != prevWindow) {
				setHeigth()
				prevWindow = currentWindow;
			}
		});

		function hasScrolled() {
			if($header.data('cartopen')) return;
			if($header.hasClass('sticky') ){
				var st  = getCurrentScroll();
				if(Math.abs(lastScrollTop - st) <= delta) return;

				if (st > lastScrollTop){
					if (st > stickyH){
						// Scroll Down
						if ($header.hasClass('st-visible')){
							$header.removeClass('st-visible slideInDown').addClass('st-hidden animated slideOutUp');
							$("li.mega-dropdown,li.simple-dropdown", $header).removeClass('hovered');
							$("#wrapper").removeClass('overlay');
						}
						else {
							$header.addClass('is-sticky st-hidden');
							if(!$(".fix-space").length){
								$header.after('<div class="fix-space">.</div>');
								$(".fix-space").css({'height': stickyH + 'px'});
								$("li.mega-dropdown,li.simple-dropdown", $header).removeClass('hovered');
								$("#wrapper").removeClass('overlay');
							}
						}
					}
					$body.removeClass('hdr-sticky');
				} else if (st < lastScrollTop) {
					if (st <= headerOffset) {
						// Scroll Up Start
						if ($header.hasClass('is-sticky')){
							$(".fix-space").remove();
							$header.removeClass('animated is-sticky st-visible slideInDown slideOutUp');
							$body.removeClass('hdr-sticky');
						}
					} else {
						// Scroll Up
						$header.addClass('is-sticky');
						if(!$(".fix-space").length){
							$header.after('<div class="fix-space">.</div>');
							$(".fix-space").css({'height': stickyH + 'px'});
							$("li.mega-dropdown,li.simple-dropdown", $header).removeClass('hovered');
							$("#wrapper").removeClass('overlay');
						}
						$header.removeClass('st-hidden slideOutUp').addClass('st-visible animated slideInDown');
						$body.addClass('hdr-sticky');
					}
				}
				lastScrollTop = st;
			}
		}
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
		}
	}

	// sticky header - always fixed
	$.fn.stickyHeader = function() {

		var $header = this,
			$body = $('body'),
			$menu = $('.megamenu', $header),
			headerOffset,
			stickyH;


		function setHeigth(){
			$(".fix-space").remove();
			$header.removeClass('animated is-sticky slideInDown');
			$body.removeClass('hdr-sticky');
			headerOffset = $('.navbar', $header).offset().top;
			stickyH = $header.height() + headerOffset;
			if ($menu.css('display') == 'none' || $header.hasClass('variant-4') || $header.hasClass('variant-5') || $header.hasClass('variant-6') || $header.hasClass('variant-7') || $header.hasClass('variant-8') || $header.hasClass('variant-9')){
				headerOffset = stickyH + 52;
			}
		}
		setHeigth();

		var prevWindow = window.innerWidth || $(window).width();

		$(window).bind('resize', function() {
			var currentWindow = window.innerWidth || $(window).width();
			if (currentWindow != prevWindow) {
				setHeigth()
				prevWindow = currentWindow;
			}
		});

		$(window).scroll(function() {
			if($header.data('cartopen')) return;
			var st = getCurrentScroll();
			if ( st > headerOffset ) {
				if(!$(".fix-space").length) {
					$header.after('<div class="fix-space"></div>');
					$(".fix-space").css({'height': $header.height() + 'px'});
				}
				$header.addClass('is-sticky animated slideInDown');
				$body.addClass('hdr-sticky');
			}
			else {
				$(".fix-space").remove();
				$header.removeClass('animated is-sticky slideInDown');
				$body.removeClass('hdr-sticky');
			}
		});

		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
		}
	}




	// Resize window
	$.fn.otherResize = function() {
		setFullWidth();
		if($(".product-lookbook").length){
			$('.product-lookbook').imagesLoaded(function() {
				$('.product-lookbook').lookbookSize();
			});
		}
		if($(".filter-col.fixed").length){
			$(".filter-col.fixed").fixedSidebar();
		}
		if($('.mainSlider').length){
			$('.mainSlider').swiperUpdate();
		}
		if ($('.gallery.isotope').length){
			$('.gallery').isotope('layout');
		}
		if ($('.products-grid.isotope').length){
			$('.products-grid.isotope').isotope('layout');
		}
		if ($(".autosize-text").length){
			$(".autosize-text").each(function() {
				$this = $(this);
				var fontratio =  parseInt($this.attr("data-fontratio"))
				$this.flowtype({fontRatio: fontratio});
			});
		}
		setTimeout(function() {
			$('.slick-initialized').slick('setPosition');
		}, 100);
		if ($(".main-image").length) {
			$('.main-image .zoomContainer').remove();
			$('.main-image').css({'height': ''});
			setTimeout(function() {
				$('.main-image > .zoom').initProductZoom();
				$('.main-image').css({'height': $('.main-image').height()});
			}, 100);
		}
		if ($(".product-creative-slider").length) {
			$('.product-slider-wrapper .zoomContainer').remove();
			setTimeout(function() {
				$('.product-creative-slider .inner-zoom').initCreativeZoom();
			}, 100);
		}
	}

	// lookbook
	$.fn.lookbookSize = function() {
		this.each(function() {
			var $this = $(this),
				$photo = $this.find('.product-item-photo'),
				$photohover = $photo.find('a'),
				$info = $this.find('.product-item-info');
			$photo.css({'height':''});
			$info.css({'height':''});
			$this.removeData('setSize');
			$photohover.on('mouseenter', function(e){
				var $this = $(this).closest('.product-lookbook').addClass('hovered');
				if(!$this.data('setSize')){
					var $photo = $this.find('.product-item-photo'),
						$info = $this.find('.product-item-info');
					var maxH = Math.max($photo.outerHeight(),$info.outerHeight());
					$photo.css({'height': maxH + 'px'});
					$info.css({'height': maxH + 'px'});
					$this.data('setSize',true);
				}
			})
			$this.on('mouseleave', function(e){
				$(this).removeClass('hovered');
			})
		})
		$('.lookbook-open', this).on('click', function(e){
			var modalcontent =  $(this).closest('.product-lookbook'),
				$modal = $('#modalLookbook'),
				$modalcontainer = $('.modal-body', $modal);
			$('.product-lookbook', $modal).remove();
			modalcontent.clone().appendTo($modalcontainer);
			$modal.modal('show');
		});
	}

	function updateData($type){
		path='product_options';
		$price_format="<span class='money'>${{amount}}</span>";
		$($type,$options).each(function(){
			if($type=='select') val=$(this).val(); else val=$(this).data('value');
			x='[\''+val+'\']';
			path+=x;
		});

		if(eval(path)!=undefined){
			/*variant changer*/
			$('input[name=id]').val(eval(path+'[\'id\']'));

			/*price changer*/
			$('.product-actions .special-price').html(Shopify.formatMoney(eval(path+'[\'price\']'), $price_format));

			/*sku changer*/
			sku=eval(path+'[\'sku\']');
			if(sku == '')sku = '----'
			$('.product-sku span').html(sku);


			/*image changer*/
			path_image=path+'[\'image\']';
			var $image = $('.main-image img');
			imgSrc = eval(path_image);
			var newImg = document.createElement("img");
			newImg.src = imgSrc;
			newImg.onload = function () {
				$image.attr('src', imgSrc);
				$image.attr('data-zoom-image', imgSrc);
				$('.main-image > .zoom').data('ezPlus').destroy();
				$('.main-image > .zoom').initProductZoom();
				$('.main-image').css({'height': $('.main-image').height()});
				$('.zoom-link').addClass('disable-gallery');
			}

			/*stock changer*/
			path_inventory_management = eval(path + '[\'inventory_management\']');
			path_inventory_quantity = eval(path + '[\'inventory_quantity\']');
			if (path_inventory_management == 'shopify') {
				$('.stock-dynamic').removeClass('hidden').find('b').text(path_inventory_quantity);
				$('.qty-input').attr('data-max', path_inventory_quantity);
				if (parseInt($('.qty-input').val()) > parseInt(path_inventory_quantity)) {
					$('.qty-input').val(path_inventory_quantity);
				}
			} else {
				if (!$('.stock-dynamic').hasClass('hidden'))$('.stock-dynamic').addClass('hidden');
				$('.qty-input').removeAttr('data-max');
			}
		}
	}

	function showProduct(delay,effect,selector){
		var delay = delay,
			effect = effect;
		$(selector).each(function(i) {
			var $this = $(this);
			setTimeout(function(){
				$this.addClass(effect + ' animated');
			}, delay*i);
		});
		/*setTimeout(function(){
			$(selector).css('opacity','1').removeClass('fadeInUp').removeClass('animated');
		},2000)*/
	}

	/*CartJS*/

	/*update cart*/
	function cartPopupUpdate(){
		$cart_count=$('.header-cart .badge');
		if(CartJS.cart.item_count > 0)
		{
			cart_list='ol#mini-cart';
			$('.header-cart .block-content').show();
			$('.header-cart .block-title').text(locales.recently_added_items);
			$cart_subtotal=$('.header-cart .amount.price-container .price');
			$price_format="<span class='money'>${{amount}}</span>";
			$updated_list='';
			$.each(CartJS.cart.items, function(index, item) {
				$item='<li class="item product product-item"><div class="product"><a class="product-item-photo" href="'+item.url+'" title="'+item.product_title+'">'
					+'<span class="product-image-container"><span class="product-image-wrapper"><img class="product-image-photo" src="'+item.image+'" alt="'+item.product_title+'">'
					+'</span></span></a><div class="product-item-details"><div class="product-item-name"><a href="'+item.url+'">'+item.title+'</a>'
					+'</div><div class="product-item-qty"><label class="label">'+locales.qty+'</label><input class="item-qty cart-item-qty" maxlength="12" value="'+item.quantity+'" disabled="">'
					+'</div><div class="product-item-pricing">'
					+'<div class="price-container"><span class="price-wrapper"><span class="price-excluding-tax"><span class="minicart-price"><span class="price">'+Shopify.formatMoney(item.price, $price_format)+'</span>'
					+'</span></span></span></div><div class="product actions"><div class="secondary"><a href="#" class="action delete" data-variant-id="'+item.variant_id+'" title="'+locales.remove+'"><span>'+locales.remove+'</span>'
					+'</a></div><div class="primary"><a class="action edit" href="'+item.url+'" title="'+locales.edit+'"><span>'+locales.edit+'</span></a></div></div></div></div></div></li>';
				$updated_list=$updated_list+$item;
			});
			$(cart_list).html($updated_list);
			$cart_subtotal.html(Shopify.formatMoney(CartJS.cart.total_price, $price_format));
			currencyUpdate();

		}
		else
		{
			$('.header-cart .block-content').hide();
			$('.header-cart .block-title').text(locales.no_items_in_cart);
		}
		$cart_count.html(CartJS.cart.item_count);
	}

	function currencyUpdate(){


		Currency.convertAll(shopCurrency, jQuery('.selected-currency').text());
		//jQuery('.selected-currency').text(Currency.currentCurrency);
	}

	function productStackUpdate(){
		$productstack = $('.productStack');
		$cart_count_1=$('.stack_count');
		$cart_count_2=$('.productStack .items-total .count');

			cart_list='.productStack .products-list';
			$cart_subtotal=$('.productStack .subtotal .price');
			$price_format="<span class='money'>${{amount}}</span>";
			$updated_list='';
			$.each(CartJS.cart.items, function(index, item) {
				$item='<li style="opacity:0"><a href="'+item.url+'"><img class="product-image-photo" src="'+item.image+'" title="'+item.product_title+'">'
				+'<span class="item-qty">'+item.quantity+'</span><div class="actions"><a class="action edit" href="#" >'
				+'<i class="icon icon-pencil"></i></a><a href="#" data-variant-id="'+item.variant_id+'" class="action delete" title="'+locales.remove+'">'
				+'<i class="icon icon-bin"></i></a><div class="edit-qty"><input type="number" value="'+item.quantity+'"><button type="button" class="btn  update_qty" data-variant-id="'+item.variant_id+'">'+locales.apply+'</button></div></div></a></li>';
				$updated_list=$updated_list+$item;
			});
			$(cart_list).html($updated_list);



			$cart_subtotal.html(Shopify.formatMoney(CartJS.cart.total_price, $price_format));
			/* Saving the current price */
			currencyUpdate();

			$cart_count_1.html(CartJS.cart.item_count);
			$cart_count_2.html(CartJS.cart.item_count);
		    showProduct(50,'fadeInUp','ul.products-list > li');
			setTimeout(function(){
				if(CartJS.cart.item_count == 0){
					if ($productstack.length && $productstack.is('.open') && $productstack.is('.hide_on_scroll')){
						$productstack.removeClass('open');
					}
				}
			},500)

	}
	$(function(){
		if($('.productStack').length)
		{
			$('.productStack').ProductStack();
		}
		if($('body').hasClass('ajax_cart'))
		{
			if($('body').hasClass('fly_to_cart') && $('.productStack').length)
			{
				$('.product-item').FlyToCart({
					link: '.add_to_cart',
					productstack: '.productStack',
					complete : function() {

						CartJS.addItem($(this).data("variant-id"), 1,{}, {
							"success": function(data, textStatus, jqXHR) {
								Currency.convertAll(shopCurrency, cookieCurrency);
							},
							"error": function(jqXHR, textStatus, errorThrown) {
								$('#modalError .modal-body p').text(errorThrown);
								$('#modalError').modal('show');
							}
						});
					}
				});
			} else {
				$('button.add_to_cart').on('click',function(e){

					CartJS.addItem($(this).data('variant-id'), 1,{}, {
						"success": function(data, textStatus, jqXHR) {

						},
						"error": function(jqXHR, textStatus, errorThrown) {
							$('#modalError .modal-body p').text(errorThrown);
							$('#modalError').modal('show');
						}
					});
					e.preventDefault();
				})
			}
			$(document).on('click','.add_to_cart',function(e){
				$('.add_to_cart').addClass('disabled');
			})
		}


		$(document).on('click','a.action.delete',function(e){
			CartJS.removeItemById($(this).data('variant-id'),{
				"success": function(data, textStatus, jqXHR) {
				},
				"error": function(jqXHR, textStatus, errorThrown) {
					$('#modalError .modal-body p').text(errorThrown);
					$('#modalError').modal('show');
				}
			})
			e.preventDefault();
		})
		$(document).on('click','.update_qty',function(e){
			CartJS.updateItemById($(this).data('variant-id'), $(this).prev().val(),{},{
				"success": function(data, textStatus, jqXHR) {
				},
				"error": function(jqXHR, textStatus, errorThrown) {
					$('#modalError .modal-body p').text(errorThrown);
					$('#modalError').modal('show');
				}
			});
			e.preventDefault();
		})
		$(document).on('cart.requestComplete', function(event, cart) {
			cartPopupUpdate();
			productStackUpdate();

			$('.add_to_cart').removeClass('disabled');
		});
	})

	// back to top button
	function backToTop(button){
		var $btn = $(button),
			windowH = $(window).height();

		if ($btn.parent('.fixed-btns').length) {
			if (!$btn.parent('.fixed-btns').hasClass('demo-mode')) {
				$btn = $btn.parent('.fixed-btns');
			}
		}

		if ($(this).scrollTop() > windowH) {
			$btn.addClass('is-visible')
		}
		$(window).scroll(function(){
			( $(this).scrollTop() > windowH ) ? $btn.addClass('is-visible') : $btn.removeClass('is-visible');
		});
		$btn.on('click', function() {
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	}

	// add to bookmark
	function addToBookmark(link){
		var $link= $(link);
		var isBookmarked = document.cookie.replace(/(?:(?:^|.*;\s*)seikobookmark\s*\=\s*([^;]*).*$)|^.*$/, "$1");
		if (isBookmarked=='yes') $link.hide();

		$link.on('click', function (e) {
			var bookmarkURL = window.location.href;
			var bookmarkTitle = document.title;
			if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
				// Mobile browsers
				addToHomescreen({
					autostart: false,
					startDelay: 0
				}).show(true);
			} else if (window.sidebar && window.sidebar.addPanel) {
				// Firefox version < 23
				window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
			} else if ((window.sidebar && /Firefox/i.test(navigator.userAgent)) || (window.opera && window.print)) {
				// Firefox 23+ and Opera version < 15
				$(this).attr({
					href: bookmarkURL,
					title: bookmarkTitle,
					rel: 'sidebar'
				}).off(e);
				return true;
			} else if (window.external && ('AddFavorite' in window.external)) {
				// IE Favorites
				window.external.AddFavorite(bookmarkURL, bookmarkTitle);
			} else {
				// Other browsers (mainly WebKit & Blink - Safari, Chrome, Opera 15+)
				alert('Press ' + (/Mac/i.test(navigator.userAgent) ? 'Cmd' : 'Ctrl') + '+D to bookmark this page.');
			}
			document.cookie = 'seikobookmark=yes';
			return false;
		});
	}

	function quickView(quickviewlink, modal) {
		var quickviewlink = quickviewlink,
			$modal = $(modal),
			$loader = $('.modalLoader-wrapper', $modal),
			$iframe = $('iframe', $modal),
			windowWidth = $(window).width();

		$(document).on('click.quickView', quickviewlink, function (e) {
			if (windowWidth > 1199 && !$('body').hasClass('touch')) {
				var $this = $(e.target),
					src = $this.attr("href") ? $this.attr("href") : $this.closest('a').attr("href");

				$this.closest('.product-item').addClass('hover');

				$iframe.on('load', function(){
					if($modal.data('bs.modal')){
						setTimeout(function() {
							$loader.css({'display':'none'});
						}, 500);
						$iframe.animate({'opacity':'1'}, 300);
						$iframe.contents().find("body").addClass("quickview");
						$iframe.contents().find(".page-header, .page-footer").remove();
					}
				});

				$modal.on('shown.bs.modal', function (e) {
					$('.modal-content', $modal).attr({'src': src});
					$('iframe', $modal).attr({'src': src});
				}).on('hidden.bs.modal', function(e) {
					var $this = $(this);
					$this.removeData('bs.modal');
					// clear iframe
					$iframe.empty().attr({'src': 'about:blank'}).css({'opacity':'0'});
					$loader.css({'display':'block'});
					$('.product-item').removeClass('hover');
				})
				$modal.modal('show');
				e.preventDefault();
			}
		})

	}

	// product next/prev preview on touch
	function prevnextNav (productnav) {
		var $productnav = $(productnav);
		if ($('body').hasClass('touch')){
			$('> a', $productnav).on("click", function(e) {
				var $this = $(this);
				if(!$this.data('firstclick')){
					$('> a', $productnav).removeData('firstclick', true);
					$this.data('firstclick', true);
					e.preventDefault();
				}
			}).on("mouseleave", function(e) {
				$('> a', $productnav).removeData('firstclick', true);
			})
		}
	}
	// department button
	function departmentMenu() {
		var $megamenu = $('.megamenu.department'),
			$departmentbtn = $('.nav-department'),
			$departmentdrop = $('.megamenu.department .nav'),
			slidespeed = 300;

		function closeDepartment() {
			$megamenu.removeClass('opened').css({'max-height':'0', 'overflow':''});
			$("#wrapper").removeClass('overlay');
		}

		if ($('body').hasClass('touch')){
			$departmentbtn.on("click.department", function(e) {
				if (!$megamenu.hasClass('opened')){
					$megamenu.addClass('opened').css({'max-height': $departmentdrop.outerHeight() + 'px'});
					if ($megamenu.hasClass('blackout')){
						$("#wrapper").addClass('overlay');
					}
				} else {
					closeDepartment();
				}
			})
			$departmentdrop.on("click.department", function(e) {
				$megamenu.addClass('opened').css({'max-height': $departmentdrop.outerHeight() + 'px', 'overflow':'visible'});			if(!$("#wrapper").hasClass('overlay') && $megamenu.hasClass('blackout')){
					$("#wrapper").addClass('overlay')
				}
			})
			$('#wrapper').on('click.department', function(e){
				if (!$(e.target).hasClass('nav-department')){
					if($megamenu.hasClass('opened')) {
						closeDepartment();
					}
				}

			});
			$megamenu.on('click.department', function(e){
				if ($(e.target).hasClass('department')){
					if($megamenu.hasClass('opened')) {
						closeDepartment();
					}
				}
			});
		}
		else {
			$departmentbtn.on({
				mouseenter: function() {
					$megamenu.addClass('opened').css({'max-height': $departmentdrop.outerHeight() + 'px'});
					if ($megamenu.hasClass('blackout')){
						$("#wrapper").addClass('overlay');
					}
				},
				mouseleave: function() {
					$megamenu.removeClass('opened').css({'max-height':'0'});
					$("#wrapper").removeClass('overlay');
				}
			})
			$departmentdrop.on({
				mouseenter: function() {
					$megamenu.addClass('opened').css({'max-height': $departmentdrop.outerHeight() + 'px', 'overflow':'visible'});			if(!$("#wrapper").hasClass('overlay') && $megamenu.hasClass('blackout')){
						$("#wrapper").addClass('overlay')
					}
				},
				mouseleave: function() {
					$megamenu.removeClass('opened').css({'max-height':'0', 'overflow':''});
					$("#wrapper").removeClass('overlay');
				}
			})
		}
	}

	function tooltipIni() {
		var title;
		$('[data-tooltip]').darkTooltip({
			size: 'small',
			animation: 'fade'
		}).hover(function () {
			title = $(this).attr('title');
			$(this).attr('title','');
		}, function () {
			$(this).attr('title',title);
		});
	}
	// flowtype - make banner text responsive

	$.fn.flowtype = function(options) {

		var settings = $.extend({
				maximum   : 9999,
				minimum   : 1,
				maxFont   : 9999,
				minFont   : 1,
				fontRatio : 10
			}, options),

			changes = function(el) {
				var $el = $(el),
					elw = $el.width();
				width = elw > settings.maximum ? settings.maximum : elw < settings.minimum ? settings.minimum : elw,
					fontBase = width / settings.fontRatio,
					fontSize = fontBase > settings.maxFont ? settings.maxFont : fontBase < settings.minFont ? settings.minFont : fontBase;
				$el.css('font-size', fontSize + 'px');
			};

		return this.each(function() {
			var that = this;
			var timer;
			var cachedWidth = $(window).width();
			$(window).resize(function() {
				var newWidth = $(window).width();
				if(newWidth !== cachedWidth){
					$('.banner-caption', that).addClass('calc');
					clearTimeout(timer);
					timer = setTimeout(doneResizing, 500);
					cachedWidth = newWidth;
				}
			});
			changes(this);
			function doneResizing(){
				changes(that);
				$('.banner-caption', that).removeClass('calc');
			}
		});
	};

$(function(){



	backToTop('.back-to-top');

	if ($(".journal").length) {
		$(".journal").journalSlide();
	}

	addToBookmark('.bookmark');




	$(".megamenu").megaMenu();
	if ($("#toolsPanel").length) {
		$("#toolsPanel").toolsPanel();
	}

	//parallax
	if($('block.parallax').length){
		$('block.parallax').parallax({
			iosFix: false,     // enable on IOS device
			androidFix: false  // enable on Andriod device
		});
	}

	// set background image inline
	if ($('[data-bg]').length) {
		$('[data-bg]').each(function() {
			var $this = $(this),
				bg = $this.attr('data-bg');
			$this.css({
				'background-image': 'url(' + bg + ')'
			});
		})
	}

	$(".autosize-text").each(function() {
		$this = $(this);
		var fontratio =  parseInt($this.attr("data-fontratio"))
		$this.flowtype({fontRatio: fontratio});
	});
	// banner hover color change
	$('.banner')
	.on('mouseenter', function() {
		$('[data-hcolor]:not(.banner-btn)', $(this)).each(function(){
			var color = $(this).attr("data-hcolor");
			$(this).find('span.text').css({'color': color});
		})
	})
	.on('mouseleave', function() {
		$('[data-hcolor]:not(.banner-btn)', $(this)).each(function(){
			$(this).find('span.text').css({'color': ''});
		})
	})
	// banner hover color change
	$('.banner-btn[data-hcolor]')
	.on('mouseenter', function() {
		var color = $(this).attr("data-hcolor");
		$(this).find('span.text').css({'color': color});
	})
	.on('mouseleave', function() {
		$(this).find('span.text').css({'color': ''});
	})

	// product variant 5 hover
	function productHoverHeight(product) {
		var product = product;
		$(document).on('mouseenter', product, function (e) {
			var $this = $(this);
			var $slick = $this.closest('.slick-list');
			var $inside = $('.product-item-details', $this);
			if(!$this.data('setHeight')){
				$this.css({
					'height': $(this).find('.product-item-info').outerHeight() + 'px'
				}).data('setHeight', true);
			}
			if(!$this.hasClass('hovered')){
				$inside.css({
					'max-width': $inside.outerWidth() + 'px'
				})
				$this.addClass('hovered');

				if ($slick.length) {
					$slick.addClass('out-space')
				}
			}
		})
			.on('mouseleave', product, function (e) {
				var $this = $(this);
				var $slick = $this.closest('.slick-list');
				var $inside = $('.product-item-details', $this);
				$inside.css({
					'max-width': ''
				})
				$this.removeClass('hovered');
				if ($slick.length) {
					$slick.removeClass('out-space')
				}
			})

		$(window).bind('resize', function() {
			$(product).removeData('setHeight').css({'height': ''});
		});
	}

	function headerCollapse() {
		$('.collapsed-links-wrapper').on('mouseenter', function (e) {
			if (!$('.page-header').hasClass('is-sticky')) {
				var $this = $(this);
				$this.css({
					'width': $this.find('.collapsed-links').get(0).scrollWidth + 25 + 'px'
				})
				$('.header-right-links').addClass('hovered');
			}
		});
		$('.collapsed-links-wrapper').on('mouseleave', function (e) {
			if (!$('.page-header').hasClass('is-sticky')) {
				$('.header-right-links').removeClass('hovered');
				$('.collapsed-links-wrapper').css({
					'width': ''
				})
			}
		});
	}

	setFullWidth();
	setFullHeight();
	slidePanel();
	if($('.megamenu.department').length){
		departmentMenu();
	}
	$(".collapsed-mobile").footerCollapse();

	$(".mobilemenu").mobileMenu();
	if($(".filter-col").length){
		$(".filter-col").isFilters();
		$(".filter-col").mobileFilter();
	}
	if($(".header-cart.variant-1").length){
		$(".header-cart.variant-1").mobileMinicart();
	}
	if($(".header-cart.variant-2").length){
		$(".header-cart.variant-2").mobileMinicartAlt();
	}
	$(".exp-search").expandingSearch();
	colorSwatch('.color-swatch');
	changeInput();
	productSharing();
	productHoverHeight('.product-variant-5 .product-item');
	quickView('.quick-view-link', '#quickView');
	tooltipIni();

	if($(".page-header.sticky.always").length){
		$(".page-header.sticky.always").stickyHeader();
	}

	if($(".page-header.sticky.smart").length){
		$(".page-header.sticky.smart").stickyHeaderSmart();
	}

	if($(".product-lookbook").length){
		$('.product-lookbook').imagesLoaded(function() {
			$('.product-lookbook').lookbookSize();
		});
	}

	if($(".page-header.variant-9").length){
		headerCollapse()
	}

	var prevWindow =  window.innerWidth || $(window).width();
	$(window).on('resize', function() {
		setTimeout(function() {
			setFullHeight();
			var currentWindow = window.innerWidth || $(window).width();
			if (currentWindow != prevWindow) {
				$('body').otherResize();
				prevWindow = currentWindow;
			}
		}, 500);
	});
	$('[data-toggle="tooltip"]').tooltip();

	// Modal Show
	if ($('#modal1').length) {
		var modal = $('#modal1');
		var pause = 0;
		if (modal.attr('data-pause') > 0){
			pause = modal.attr('data-pause')
		}
		setTimeout(function() {
			modal.modal('show');
		}, pause);
	}

	// Modal Interval
	if ($('.modal-countdown').length) {
		var counter;
		$('.modal-countdown').on('hidden.bs.modal', function () {
			var $modal = $(this);
			if ($modal.attr('data-interval') > 0){
				$('.count', $modal).html('').fadeOut();
				clearInterval(counter);
			}
		});
		$('.modal-countdown').on('shown.bs.modal', function () {
			var interval = 0,
				$modal = $(this);
			if ($modal.attr('data-interval') > 0){
				interval = $modal.attr('data-interval')
			}
			var count = interval/1000;
			if(count > 0){
				$('.modal-countdown', $modal).show();
				$('.count', $modal).html(count).fadeIn();
				counter = setInterval(
					function modalCount() {
						if(count > 0){
							count -= 1;
							$('.count', $modal).html(count);
						} else {
							$modal.modal('hide').removeData('bs.modal');
							clearInterval(counter)
						}
					}, 1000);
			}
		});
	}


	var currentFilter;
	var activeStart;
	//product grid
	var $productgallery = $('.products-grid.isotope');
	$productgallery.imagesLoaded(function() {
		$productgallery.isotope({
			itemSelector: '.product-item',
			layoutMode: 'fitRows',
			filter: function() {
				var $this = $(this);
				var filterResult = currentFilter ? $this.is( currentFilter ) : true;
				return filterResult;
			}
		});
	});

	$('.filters-product .filter-label').each(function() {
		var $this = $(this);
		var filtered = $this.data('filter'),
			count;
		if(filtered == null){
			count = $productgallery.find('.product-item').length;
		}
		else count = $productgallery.find(filtered).length;
		$this.find('.count').html(count);
		if ($this.hasClass('active')){
			activeStart = true;
			currentFilter = $this.attr('data-filter');
			$productgallery.isotope();
		}
	});

	if (!activeStart)  $(".filters-product li:first-child .filter-label").addClass('active');


	$('.filters-product').on( 'click', '.filter-label', function(e) {
		e.preventDefault();
		var $this = $(this);
		if ($this.hasClass('active')) return false;
		else {
			$('.filters-product .filter-label').removeClass('active');
			$this.addClass('active')
		}
		currentFilter = $this.attr('data-filter');
		$productgallery.isotope();
	});

	if ($('.products-grid.isotope').length){
		$('.gallery').isotope('layout');
	}
})
