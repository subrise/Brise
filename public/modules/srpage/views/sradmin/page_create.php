<section>
	<header><h1>Create a page</h1></header>
	<?php echo Form::open(Route::url('sradmin', array(
		'controller' => 'pages',
		'action'     => 'create'
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
	<p><?php echo Form::submit('submit', 'Create page') ?></p>
	<?php echo Form::close(); ?>
</section>