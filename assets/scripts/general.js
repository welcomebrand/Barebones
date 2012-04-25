// General sitewide settings and stuff
$(document).ready(function () {
	// Remove inline img width and heights from http://wpwizard.net/jquery/remove-img-height-and-width-with-jquery/	
    $('img').each(function(){
        $(this).removeAttr('width')
        $(this).removeAttr('height');
    });
});
