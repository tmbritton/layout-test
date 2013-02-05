$(document).ready(function(){
	//resizeMaxWidth('.sitetop'); 	
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
