// General sitewide settings and stuff
$(document).ready(function () {
	// Remove img width and height from http://wpwizard.net/jquery/remove-img-height-and-width-with-jquery/	
    $('img').each(function(){
        $(this).removeAttr('width')
        $(this).removeAttr('height');
    });
});
