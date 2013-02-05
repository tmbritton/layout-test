$(document).ready(function(){
	//resizeMaxWidth('.sitetop'); 
	IE7stars();	
});

/**
* Function resizes elements that are supposed to be 100% of window to
* window width + scroll width
*
*	document.defaultView.scrollMaxX appears to be a FF property only
*
* @param string selector
*		selector to resize
*/
var resizeMaxWidth = function(selector) {
	var realwidth = window.innerWidth + document.defaultView.scrollMaxX;
	$(selector).css('width', realwidth);
}

/**
*	Function adds star highlighting behavior for IE7.
*/
var IE7stars = function() {
	if($('html').hasClass('lt-ie8')) {
		$('.rating span').mouseover(function(){
			$(this).addClass('highlight');
			$(this).prevAll().addClass('highlight');
		});
		$('.rating span').mouseout(function(){
			$(this).removeClass('highlight');
			$(this).prevAll().removeClass('highlight');
		});
	}
}
