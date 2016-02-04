// check and define $ as jQuery
if (typeof jQuery != "undefined") jQuery(function ($) {
    
    // dump(myVar); is wrapper for console.log() with check existing console object and show 
    window.dump=function(vars,name,showTrace){if(typeof console=="undefined")return false;if(typeof vars=="string"||typeof vars=="array")var type=" ("+typeof vars+", "+vars.length+")";else var type=" ("+typeof vars+")";if(typeof vars=="string")vars='"'+vars+'"';if(typeof name=="undefined")name="..."+type+" = ";else name+=type+" = ";if(typeof showTrace=="undefined")showTrace=false;console.log(name,vars);if(showTrace)console.trace();return true};

    // remove no-js class if JavaScript enabled
    $('html.no-js').removeClass('no-js').addClass('js-ready');

    // close Joomla system messages (just example)
    $('#system-message .close').click(function () {
        $(this).closest('.alert').animate({height: 0, opacity: 0, MarginBottom: 0}, 'slow', function () {
            $(this).remove();
        });
        return false;
    });
	
	// Change langs text
	var ua = $(".lang-block li:first-child a").text("Укр");
	var ru = $(".lang-block li:last-child a").text("Рус");
	
	// margin left for header line on main
	function doMarginForDebilineMain() {
		var windowWidth = $(document).width();
		var innerWidth = 940;
		var marginLeft = (windowWidth - innerWidth) / 2;
		
		$(".debiline").css("margin-left", marginLeft);
		$(".debiline-light").css("margin-left", marginLeft);
		console.log();
	}
	doMarginForDebilineMain();
	
	// margin left for header line not on main
	function doMarginForDebiline() {
		var windowWidth = $(document).width();
		var innerWidth = $(".inner-header").width();
		var marginLeft = (windowWidth - innerWidth) / 2;
		
		$(".debiline-not-main").css("width", innerWidth + marginLeft);
		$(".debiline-light-not-main").css("width", windowWidth);
	}
	doMarginForDebiline();
	
	function doMarginForSlider() {
		var windowWidth = $(document).width();
		var innerWidth = 1920;
		var marginLeft = (windowWidth - innerWidth) / 2;
		
		$(".top-slider>div").css("margin-left", marginLeft);
	}
	doMarginForSlider();
	
	$(window).resize(function(){
		doMarginForDebilineMain();
		doMarginForDebiline();
		doMarginForSlider();
	});	

});
