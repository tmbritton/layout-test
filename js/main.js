$(document).ready(function(){
	$('.rating span').click(function(){
		setRating($(this));
		//displayRatings();
	});
});

var setRating = function(star) {
	var rating = star.attr('class');
	$(star).parent('.rating').removeClass('one two three four five');
	$(star).parent('.rating').addClass(rating);
}

var displayRatings = function() {
	$('.rating').each(function(){
		if($(this).hasClass('one two three four five')){
			console.log($(this).attr('class'));
		}
	});

}
