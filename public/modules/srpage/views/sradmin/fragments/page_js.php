<script type="text/javascript" charset="utf-8">
	(function($){
		
		$('.sr-editable').attr('contenteditable', 'true');
		
		$('.sr-editable').hover(function(){
			if ( ! $(this).hasClass('unsaved') )
				$(this).css('outline', '1px solid #aaa');
		}, function(){
			if ( ! $(this).hasClass('unsaved'))
				$(this).css('outline', 'none');
		});
		
		$('.sr-editable').keyup(function(){
			$(this).addClass('unsaved');
			$(this).css('outline', '1px solid red');
		});
		
		// On blur we try to save the content
		$('.sr-editable').blur(function(){
			var index = $(this).attr('id');
			console.log('Trying to save index: ' + index);
			var value = $(this).html();
			//console.log(value);
			
			var url      = "<?php echo Route::url('sradmin', array('controller'=>'page', 'action'=>'save','id'=>$page->id)) ?>";
			var textarea = 'index='+index+'&value='+value;
			console.log(textarea);
			var $area     = $(this);
			$.post(url, textarea, function(data){
				console.log(data);
				if (data == 'success')
				{
					$area.css('outline', '1px solid lime');
					$area.removeClass('unsaved');
				}
			}, 'json');
		})
		
	})(jQuery);
</script>