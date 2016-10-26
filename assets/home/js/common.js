$(document).ready(function() {

	var screenwidth = $(window).width();

	if(screenwidth < 768) {
		$('.panel-heading.clickable, .widget-title.clickable').click(function(e) {
			var collapsecontent = $(this).parents('.panel, .widget').find('.panel-body, .widget-content');
			if ($(collapsecontent).hasClass('collapse')) {
			    // expand the panel
			    $(collapsecontent).slideDown().removeClass('collapse');;
			    $(this).find('i').toggleClass('fa-rotate-180');
			}
			else {
			    // collapse the panel
			    $(collapsecontent).slideUp().addClass('collapse');
			    $(this).find('i').toggleClass('fa-rotate-180');
			}
		});
	}

	$('.close').click(function(e){
		$(this).parent().slideUp();
	});

	var screenwidth = $(window).width();

	$( ".navbar-toggle" ).click(function(e) {
		$( "#panel-overlay, .navbar" ).addClass("opened");
		$( ".navbar-toggle" ).addClass("active");
		$( "body" ).addClass("panel-open");
		e.stopPropagation();
	});

	$( ".login-toggle" ).click(function(e) {
		$( "#panel-overlay, #login-panel" ).addClass("opened");
		$( ".login-toggle" ).addClass("active");
		$( "body" ).addClass("panel-open");
		if(screenwidth > 767){
			$( "#username1" ).focus();
		}
		$('html,body').scrollTop(0);
		e.stopPropagation();
	});

	$( ".panel-close, #panel-overlay" ).click(function(e) {
		$( "#panel-overlay, .navbar, #login-panel" ).removeClass("opened");
		$( ".navbar-toggle, .login-toggle" ).removeClass("active");
		$( "body" ).removeClass("panel-open");
		e.stopPropagation();
	});

	if(screenwidth < 768){
		$( "#search-toggle" ).click(function(e) {
			$( "#panel-overlay" ).addClass("opened white");
			$( "#search-form" ).fadeIn(100);
			$( "#search-toggle" ).addClass("active");
			$( "body" ).addClass("panel-open");
			$('#search-form input').focus();
			e.stopPropagation();
		});
		$( ".panel-close, #panel-overlay" ).click(function(e) {
			$( "body" ).removeClass("panel-open");
			$( "#search-form" ).fadeOut(100);
			$( "#panel-overlay" ).removeClass("white opened", function(){
				$( "#panel-overlay" ).removeClass("white");
				$( "#search-toggle" ).removeClass("active");
			});
			e.stopPropagation();
		});
	}
});

// Noty Themes

$.noty.themes.bootstrapTheme = {
    name: 'bootstrapTheme',
    modal: {
        css: {
            position: 'fixed',
            width: '100%',
            height: '100%',
            backgroundColor: '#000',
            zIndex: 10000,
            opacity: 0.6,
            display: 'none',
            left: 0,
            top: 0
        }
    },
    style: function() {

        var containerSelector = this.options.layout.container.selector;
        $(containerSelector).addClass('list-group');

        this.$closeButton.append('<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>');
        this.$closeButton.addClass('close');

        this.$bar.addClass( "list-group-item" ).css('padding', '0px');

        switch (this.options.type) {
            case 'alert': case 'notification':
                this.$bar.addClass( "list-group-item-info" );
                break;
            case 'warning':
                this.$bar.addClass( "list-group-item-warning" );
                break;
            case 'error':
                this.$bar.addClass( "list-group-item-danger" );
                break;
            case 'information':
                this.$bar.addClass("list-group-item-info");
                break;
            case 'success':
                this.$bar.addClass( "list-group-item-success" );
                break;
        }

        this.$message.css({
            fontSize: '13px',
            lineHeight: '16px',
            textAlign: 'center',
            padding: '8px 10px 9px',
            width: 'auto',
            position: 'relative'
        });
    },
    callback: {
        onShow: function() {  },
        onClose: function() {  }
    }
};
