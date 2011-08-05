<section>
	<header><h1>Pages</h1></header>
	
	<?php if ($pages->count() > 0) { ?>
		<p>Create a page <a href="<?php echo Route::url('sradmin', array('controller'=>'pages', 'action'=>'create')) ?>">here</a>.</p>
		<table>
			<tr>
				<th>Title</th>
				<th>URI</th>
				<th colspan=2>Modified</th>			
				<th colspan=2>Created</th>
				<th>Online</th>
			</tr>
			<?php $homepage_defined = false; ?>
			<?php foreach ($pages as $page) : ?>
			<tr<?php echo ( $page->online ) ? '':' class="offline"' ?>>
				<td><a href="<?php echo Route::url('sradmin', array(
					'controller' => 'page',
					    'action' => 'edit',
					        'id' => $page->id
				)) ?>"><?php 
					if (Settings::instance()->get('home_page_id') == $page->id)
					{
						$homepage_defined = true;
						echo '* ';
					}
					echo $page->title 
				?></a></td>
				<td><?php echo $page->uri ?></td>
				<td><?php echo date('Y-m-d H:i', $page->date_modified) ?></td>
				<td><?php echo $page->modifier->username ?></td>
				<td><?php echo date('Y-m-d H:i', $page->date_created) ?></td>
				<td><?php echo $page->author->username ?></td>
				<td><?php echo ($page->online) ? 'Online' : 'Offline' ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php if ($homepage_defined) { ?>
			<p><small>* Your homepage where your visitors will land on first.</small></p>
		<?php } else { ?>
			<p><small>No page has been set as homepage. You can do this <a href="<?php echo Route::url('sradmin',array('controller'=>'settings')) ?>">here</a>.</small></p>
		<?php } ?>
	<?php } else { ?>
	<p>The database is empty, create a page <a href="<?php echo Route::url('sradmin', array('controller'=>'pages', 'action'=>'create')) ?>">here</a>.</p>
	<?php } ?>
</section>