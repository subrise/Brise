/* Author: Sammy Hubner

*/

(function($){
	
	$(document).ready(function(){
		
		$window = $(window);
		
		$window.scroll(function(){
			
			if ( $window.scrollLeft() > 500 )
			{
				$('#art-home').fadeOut();
			}
			else
			{
				$('#art-home').fadeIn();
			}
			
			if ($window.scrollLeft() > 2000 && $window.scrollLeft() < 2500)
			{
				$('#art-about').fadeIn();
			}
			else
			{
				$('#art-about').fadeOut();
			}
			
			$('#dev').html('scrollLeft(): ' + $window.scrollLeft());
			
		});
		
	});
	
})(jQuery);



