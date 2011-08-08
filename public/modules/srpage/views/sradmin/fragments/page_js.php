<script type="text/javascript" charset="utf-8">
	(function($){
		
		$(document).ready(function(){
			
			$('.sr-editable').attr('contenteditable', 'true');
		
			// Indicate you're able to edit this element
			$('.sr-editable').hover(function(){
				if ( ! $(this).hasClass('unsaved') )
					$(this).css('outline', '1px solid #aaa');
			}, function(){
				if ( ! $(this).hasClass('unsaved'))
					$(this).css('outline', 'none');
			});
		
			// Show that user is editing the element
			$('.sr-editable').keyup(function(){
				$(this).addClass('unsaved');
				$(this).css('outline', '1px solid red');
			});
		
			// On blur we try to save the content
			$('.sr-editable').blur(function(){
				var $widget = $(this);
				var index   = $(this).attr('id');
				var value   = $(this).html();
				var url     = "<?php echo Route::url('sradmin', array(
					'controller' => 'page', 
					'action'    => 'save',
					'id'        => $page->id
				)) ?>";
				var widget  = 'index='+index+'&value='+value;
				
				$.post(url, widget, function(data){
					console.log(data);
					if (data == 'success')
					{
						$widget.css('outline', '1px solid lime');
						$widget.removeClass('unsaved');
					}
				}, 'json');
			});
		
		});
		
	})(jQuery);
</script>