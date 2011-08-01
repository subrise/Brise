<section>
	<header><h1>Pages</h1></header>
	
	<?php if ($pages->count() > 0) { ?>
	<table>
		<tr>
			<th>Name</th>
			<th>uri</th>
			
		</tr>
	</table>
	<?php } else { ?>
	<p>The database is empty, create a page <a href="<?php echo Route::url('sradmin', array('controller'=>'pages', 'action'=>'create')) ?>">here</a>.</p>
	<?php } ?>
</section>