<section>
	<header><h1>Configurate this page settings</h1></header>
	<?php echo Form::open(Route::url('sradmin', array(
		'controller' => 'pages',
		    'action' => 'config',
		        'id' => $page->id
	))) ?>
	<p>
		<label for="selTemplates">Page template</label>
		<?php echo Form::select('template', $template_options, $page->template, array('id'=>'selTemplates')) ?>
	</p>
	<p>
		<label for="txtTitle">Title</label>
		<?php echo Form::input('title', $page->title, array(
			'id'=>'txtTitle',
			'placeholder' => 'Title of your page',
			'required'
		)) ?>
	</p>
	<p>
		<label for="checkOnline">Online</label>
		<?php echo Form::checkbox('online', 1, (bool)$page->online, array('id'=>'checkOnline')) ?>
	</p>
	<p><?php echo Form::submit('submit', 'Save page settings') ?></p>
	<?php echo Form::close(); ?>
</section>