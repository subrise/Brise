<section>
	<header><h1>Pages</h1></header>
	
	<?php if ($pages->count() > 0) { ?>
	<p>Create a page <a href="<?php echo Route::url('sradmin', array('controller'=>'pages', 'action'=>'create')) ?>">here</a>.</p>
	<table>
		<tr>
			<th>Title</th>
			<th>URI</th>
			<th>Created</th>
			<th>Modified</th>
		</tr>
		<?php foreach ($pages as $page) : ?>
		<tr>
			<td><?php echo $page->title ?></td>
			<td><?php echo $page->uri ?></td>
			<td></td>
			<td></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php } else { ?>
	<p>The database is empty, create a page <a href="<?php echo Route::url('sradmin', array('controller'=>'pages', 'action'=>'create')) ?>">here</a>.</p>
	<?php } ?>
</section>