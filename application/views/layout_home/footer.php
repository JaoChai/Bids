<footer class="page-footer variant4 fullboxed">
    <div class="footer-top bg"  data-bg="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/footer_bg_parallax.jpg?18321598552377106331">
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                  <h3>Facebook</h3>
              </div>

                <div class="col-md-4">
                  <h3>GOOGLE+</h3>
                </div>


                <div class="col-md-4">
                    <h3>Twitter</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block  collapsed-mobile">
                        <div class='title'><h4>Quick Links</h4><div class='toggle-arrow'></div></div>
                        <div class='collapsed-content'>
                          <ul class='marker-list'>
                            <li><a href='#'>สมัครเลย!</a></li>
                            <li><a href='#'>BidCups คืออะไร</a></li>
                            <li><a href='#'>สินค้าประมูล</a></li>
                            <li><a href='#'>Bid ยังไงให้ชนะ</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block  collapsed-mobile">
                        <div class='title'><h4>About</h4><div class='toggle-arrow'></div></div>
                        <div class='collapsed-content'>
                          <ul class='marker-list'>
                            <li><a href='#'>เกี่ยวกับเรา</a></li>
                            <li><a href='#'>นโยบาย</a></li>
                          </ul></div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block  collapsed-mobile">
                        <div class='title'><h4>Support</h4><div class='toggle-arrow'></div></div>
                        <div class='collapsed-content'>
                          <ul class='marker-list'>
                            <li><a href='#'>กฏทางเว็บไซต์</a></li>
                            <li><a href='#'>ข้อตกลง และเงื่อนไข</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-block  collapsed-mobile">
                        <div class='title'><h4>CONTACT US</h4><div class='toggle-arrow'></div></div>
                        <div class='collapsed-content'>
                          <ul class='simple-list'>
                            <li><i class='icon icon-phone'></i>02-12345678</li>
                            <li><i class='icon icon-close-envelope'></i>support@bidcups.com</li>
                            <li><i class='icon icon-clock'></i>8:00 - 19:00, Monday - Saturday</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bot">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-lg-12">
                    <div class="footer-copyright text-center"> © 2016 BidCups Online Co., Ltd. All rights reserved. </div>

                        <div class="footer-payment-link  text-center">
                            <a><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/icon-pay-1.png?18321598552377106331" alt=""></a>
                            <a><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/icon-pay-2.png?18321598552377106331" alt=""></a>
                            <a><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/icon-pay-3.png?18321598552377106331" alt=""></a>
                            <a><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/icon-pay-4.png?18321598552377106331" alt=""></a>
                            <a><img src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/icon-pay-5.png?18321598552377106331" alt=""></a>
                        </div>

              </div>
            </div>
        </div>
      </div>
    </footer>
  </div>
</div>


<a class="back-to-top back-to-top-mobile" href="#">
    <i class="icon icon-angle-up"></i> To Top
</a>


<script>
    $(function() {
        // Current Ajax request.
        var currentAjaxRequest = null;
        // Grabbing all search forms on the page, and adding a .search-results list to each.
        var searchForms = $('form[action="/search"]').css('position','relative').each(function() {
            // Grabbing text input.
            var input = $(this).find('input[name="q"]');
            // Adding a list for showing search results.
            var offSet = input.position().top + input.innerHeight();
            $('<ul class="search-results"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo($(this)).hide();
            // Listening to keyup and change on the text field within these search forms.
            input.attr('autocomplete', 'off').bind('keyup change', function() {
                // What's the search term?
                var term = $(this).val();
                // What's the search form?
                var form = $(this).closest('form');
                // What's the search URL?
                var searchURL = '/search?type=product&q=' + term;
                // What's the search results list?
                var resultsList = form.find('.search-results');
                // If that's a new term and it contains at least 3 characters.
                if (term.length > 3 && term != $(this).attr('data-old-term')) {
                    // Saving old query.
                    $(this).attr('data-old-term', term);
                    // Killing any Ajax request that's currently being processed.
                    if (currentAjaxRequest != null) currentAjaxRequest.abort();
                    // Pulling results.
                    currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
                        // Reset results.
                        resultsList.empty();
                        // If we have no results.
                        if(data.results_count == 0) {
                            // resultsList.html('<li><span class="title">No results.</span></li>');
                            // resultsList.fadeIn(200);
                            resultsList.hide();
                        } else {
                            // If we have results.
                            count=0;
                            $.each(data.results, function(index, item) {

                                if(count<8){
                                    var link = $('<a></a>').attr('href', item.url);
                                    link.append('<span class="thumbnail"><img src="' + item.thumbnail + '" /></span>');
                                    link.append('<span class="title">' + item.title + '</span>');
                                    link.wrap('<li></li>');
                                    resultsList.append(link.parent());
                                }

                                count++;
                            });
                            // The Ajax request will return at the most 10 results.
                            // If there are more than 10, let's link to the search results page.
                            if(data.results_count > 8) {
                                resultsList.append('<li><span class="title"><a href="' + searchURL + '">See all results (' + data.results_count + ')</a></span></li>');
                            }
                            resultsList.fadeIn(200);
                        }
                    });
                }
            });
        });
        // Clicking outside makes the results disappear.
        $('body').bind('click', function(){
            $('.search-results').hide();
        });
    });
</script>


<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/bootstrap.min.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/slick.min.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/swiper.min.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/jquery.countdown.min.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/tocca.js?18321598552377106331" type="text/javascript"></script>

<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/megamenu.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/tools.js?18321598552377106331" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/assets/themes_support/option_selection-f3dd7ba25bddfb6b0fe9addc0cae11dc709eeb6a469ec7f66f49e3abc4ce8c81.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/cart.min.js?18321598552377106331" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function() {
CartJS.init({"token":"7bb9d428d6cda76ed3dc85bf17684c26","note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0,"item_count":0,"items":[],"requires_shipping":false}, {
    "dataAPI": false,
    "requestBodyClass": "loading",
    "moneyFormat": "<span class=money>${{amount}}</span>",
    "moneyWithCurrencyFormat": "<span class=money>${{amount}}  CAD</span>"
});
});
</script>

<script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/app.js?18321598552377106331" type="text/javascript"></script>


    <script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
    <script src="//cdn.shopify.com/s/files/1/1323/8471/t/12/assets/jquery.currencies.min.js?18321598552377106331" type="text/javascript"></script>

    <script>
        Currency.format = 'money_format';
        var shopCurrency = 'USD';
        /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
        Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{amount}}  CAD";
        Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";

        /* Default currency */
        var defaultCurrency = 'USD';

        /* Cookie currency */
        var cookieCurrency = Currency.cookie.read();
        /* Fix for customer account pages */
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });
        /* Saving the current price */
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });
        // If there's no cookie.
        if (cookieCurrency == null) {
            if (shopCurrency !== defaultCurrency) {
                Currency.convertAll(shopCurrency, defaultCurrency);
            }
            else {
                Currency.currentCurrency = defaultCurrency;
            }
        }
// If the cookie value does not correspond to any value in the currency dropdown.
        else if (jQuery('.header-currency li a').length && jQuery('.header-currency li a[data-value=' + cookieCurrency + ']').size() === 0) {
            Currency.currentCurrency = shopCurrency;
            Currency.cookie.write(shopCurrency);
        }
        else if (cookieCurrency === shopCurrency) {
            Currency.currentCurrency = shopCurrency;
        }
        else {
            Currency.convertAll(shopCurrency, cookieCurrency);
        }

        jQuery('.header-currency li a').on('click',function(){
            var newCurrency = jQuery(this).data('value');
            jQuery('.header-currency li').removeClass('active');
            jQuery(this).parent().addClass('active');
            Currency.convertAll(Currency.currentCurrency, newCurrency);
            jQuery('.selected-currency').text(Currency.currentCurrency);
            return false;
        })

        var original_selectCallback = window.selectCallback;
        var selectCallback = function(variant, selector) {
            original_selectCallback(variant, selector);
            Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
            jQuery('.selected-currency').text(Currency.currentCurrency);
            // BEGIN SWATCHES
            if (variant) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i=0,length=variant.options.length; i<length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
            }
            // END SWATCHES
        };
        $('body').on('ajaxCart.afterCartLoad', function(cart) {
            Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
            jQuery('.selected-currency').text(Currency.currentCurrency);
        });
        jQuery('.selected-currency').text(Currency.currentCurrency);
        jQuery('.'+Currency.currentCurrency).addClass('active');
    </script>


<script>
    $.fn.thumbsPreview = function (options) {
        var options = $.extend({}, $.fn.thumbsPreview.defaults, options);
        return this.each(function () {
            var $this = $(this);

            var $pagination_container = $this.find('.swiper-pagination'),
                    $pagination_thumbs = $this.find('.swiper-pagination-thumbs'),
                    $pagination_dot = $pagination_container.children('span'),
                    toltal_slides = $pagination_dot.length,
                    $thumbs_wrapper = $pagination_thumbs.children('.thumbs-wrapper'),
                    $thumbs_preview = $thumbs_wrapper.children('.thumbs'),
                    $thumbs_preview_item = $thumbs_preview.children('span'),
                    border_width = 2,
                    r_pagination_thumbs = 60;


            var w_pagination_thumbs = options.thumb_width + 2 * border_width,
                    h_pagination_thumbs = options.thumb_height + 2 * border_width,
                    t_pagination_thumbs = $pagination_container.position().top - $pagination_container.outerHeight() / 2 - h_pagination_thumbs / 2,
                    l_pagination_thumbs = $pagination_container.position().left - w_pagination_thumbs - 5;

            $pagination_thumbs.css({
                width: w_pagination_thumbs + 'px',
                height: h_pagination_thumbs + 'px',
                top: t_pagination_thumbs + 'px',
                left: l_pagination_thumbs + 'px'
            });

            $thumbs_preview_item.css({
                width: options.thumb_width + 'px',
                height: options.thumb_height + 'px'
            });

            $thumbs_preview.css('height', toltal_slides * options.thumb_height + 'px');

            $thumbs_wrapper.css({
                width: options.thumb_width + 'px',
                height: options.thumb_height + 'px'
            });

            $pagination_container.on('mouseenter', function () {
                $(this).data('firsthover', true);
            }).on('mouseleave', function () {
                $(this).removeData('firsthover');
            })

            $pagination_dot.on('mouseenter', function () {
                var $this = $(this),
                        idx = $this.index();
                var new_top = $this.parent().position().top + $this.position().top - h_pagination_thumbs / 2 + 10;
                var tempspeed = options.speed;
                if($pagination_container.data('firsthover')) tempspeed = 0;
                $pagination_thumbs.stop(true)
                        .fadeIn(200)
                        .animate({
                            top: new_top + 'px'
                        }, { duration: tempspeed, queue: false });
                $thumbs_preview.stop(true)
                        .animate({
                            top: -idx * options.thumb_height + 'px'
                        }, tempspeed);
            }).on('mouseleave', function () {
                $pagination_container.removeData('firsthover');
                $pagination_thumbs.stop(true).fadeOut(200);
            })

        });
    };
    $.fn.thumbsPreview.defaults = {
        speed: 100,
        thumb_width: 200,
        thumb_height: 100
    };
    $.fn.swiperUpdate = function() {
        var $slider = this;
        var swiper = new Swiper('.mainSlider .swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            //nextButton: '.swiper-button-next',
            //prevButton: '.swiper-button-prev',
            effect: 'fade',
            loop: true,
            autoplay: 7000,
            autoplayDisableOnInteraction: false,
            simulateTouch: false,
            onPaginationRendered: function(swiper){
                if ($slider.attr('data-thumb') =='true') {
                    var $thumb = $('.thumbs').html('');
                    $('.swiper-slide:not(.swiper-slide-duplicate)', $slider).each(function() {
                        var preview;
                        if ($(this).attr('data-thumb')) {
                            preview = '<span><img src='+ $(this).attr('data-thumb') +' alt=""></span>';
                        }
                        else if ($(this).find('figure img').length){
                            preview = '<span><img src='+ $(this).find('figure img').attr('src') +' alt=""></span>';
                        }
                        else if ($(this).css('background-image')){
                            var bg = $(this).css('background-image');
                            bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
                            preview = '<span><img src='+ bg +' alt=""></span>';
                        }
                        $thumb.append(preview);
                    })
                    var thumb_width = 200, thumb_height = 100;
                    if ($slider.attr('data-thumb-width'))  thumb_width = +$slider.attr('data-thumb-width');
                    if ($slider.attr('data-thumb-height')) thumb_height = +$slider.attr('data-thumb-height');
                    $slider.thumbsPreview({
                        thumb_width	: thumb_width,
                        thumb_height: thumb_height,
                        speed		: 250
                    });
                }
            },
            onSlideChangeStart: function(swiper) {
                $('.sliderLoader').hide();
                $('.mainSlider .swiper-container').css({
                    'opacity': 1,
                    'min-height': '0'
                });
                $('.mainSlider [data-animate]').data('stop', true);
                $('.mainSlider [data-animate]').each(function() {
                    var el = $(this);
                    var effect = el.attr('data-animate');
                    el.removeClass('animated').removeClass(effect).addClass('block-animate');
                });
            },
            onSlideChangeEnd: function(swiper) {
                $('.mainSlider [data-animate]').each(function() {
                    var el = $(this);
                    var effect = el.attr('data-animate');
                    el.finish().removeClass('animated').removeClass(effect).addClass('block-animate');
                });
                if($('.mainSlider video').length){
                    $(".mainSlider video").each(function(){
                        $(this).get(0).pause();
                    });
                }
                if($('.mainSlider .swiper-slide-active video').length){
                    $('.mainSlider .swiper-slide-active video')[0].play();
                }
                $('.mainSlider .swiper-slide-active [data-animate]').each(function() {
                    var el = $(this);
                    var delay = 0;
                    var dataDelay = el.attr('data-delay');
                    if (dataDelay) {
                        delay += Number(dataDelay)
                    }
                    el.removeData('stop');
                    if (!el.hasClass('animated')) {
                        el.addClass('block-animate');
                        var effect = el.attr('data-animate');
                        setTimeout(function() {
                            if(!el.data('stop')){
                                el.removeClass('block-animate').addClass(effect + ' animated');
                            } else return false;
                        }, delay);
                    }
                });
            }
        });
    }

    function swiperSlider(slider) {

        var $slider = $(slider);
        function SliderSize (slider){
            var $slidercontainer = $('.swiper-container', slider),
                    scrHeight = window.innerHeight ? window.innerHeight : $window.height(),
                    sliderHeightOff = $slidercontainer.offset().top;

            scrHeight = scrHeight - sliderHeightOff;
            $slidercontainer.css('height', scrHeight);
        }

        if($slider.is('.fullscreen')){
            SliderSize($slider);
        }

        $(window).bind('resize.mainSlider', function() {
            if($slider.is('.fullscreen')){
                SliderSize($('.mainSlider.fullscreen'));
            }
        });

        $slider.on('click', '[data-href]', function(event) {
            event.preventDefault();
            var href = $(this).attr("data-href"),
                    target = $(this).attr("data-target") ? $(this).attr("data-target") : '_self';
            window.open(href, target);
        });

        var $textBlock = $("div[class^='text'],div[class*=' text'],div.caption,.button", $slider);

        $textBlock.each(function() {
            var $this = $(this),
                    thisInlineStyle = '';

            var thisStyle = $this.data();
            for (data in thisStyle ){
                if(data == 'fontcolor'){
                    thisInlineStyle+='color:'+$this.data('fontcolor')+';'
                }
                if(data == 'fontfamily'){
                    thisInlineStyle+='font-family:'+$this.data('fontfamily')+';'
                }
                if(data == 'fontsize'){
                    thisInlineStyle+='font-size:'+$this.data('fontsize')+'vw;'
                }
                if(data == 'fontline'){
                    thisInlineStyle+='line-height:'+$this.data('fontline')+'em;'
                }
                if(data == 'fontweight'){
                    thisInlineStyle+='font-weight:'+$this.data('fontweight')+';'
                }
                if(data == 'ypos'){
                    var ypos = $this.data('ypos');
                    if (ypos == 'center') {$this.addClass('vertical-align')}
                    else thisInlineStyle+='top:'+$this.data('ypos')+'%;'
                }
                if(data == 'xpos'){
                    var xpos = $this.data('xpos');
                    if (xpos == 'center') {$this.addClass('horisontal-align')}
                    else if (xpos == 'left') {thisInlineStyle+='left:0;right:auto;'}
                    else if (xpos == 'right') {thisInlineStyle+='left:auto;right:0;'}
                    else thisInlineStyle+='left:'+$this.data('xpos')+'%;'
                }
                if(data == 'otherstyle'){
                    thisInlineStyle+=$this.data("otherstyle");
                }
            }
            $this.attr('style', thisInlineStyle);
        })


        $slider.swiperUpdate()
    }

    if($('.mainSlider').length){
        setTimeout(function() {
            swiperSlider('.mainSlider');
        }, 500);
    }
</script>
<script>
    jQuery(function() {
        jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
        });
    });

    jQuery(function() {
        // Remove Loader
        $('body').addClass('loaded');

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
    });
</script>

</body>
</html>
