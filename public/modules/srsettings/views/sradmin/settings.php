<section>
	<header><h1>Site settings</h1></header>
	
	<?php echo Form::open(Route::url('sradmin', array('controller'=>'settings'))) ?>
	<p>
		<label for="txt_site_name">Site name</label>
		<?php echo Form::input('site_name', Settings::instance()->get('site_name'), array(
			'id'          => 'txt_site_name',
			'placeholder' => 'The name of your site',
		)) ?>
	</p>
	<p>
		<label for="txt_site_description">Site description</label>
		<?php echo Form::textarea('site_description', Settings::instance()->get('site_description'), array(
			'id'          => 'txt_site_description',
			'cols'        => 60,
			'rows'        => 3,
			'placeholder' => 'A short description of your website. No more than 255 characters!!'
		)) ?>
	</p>
	<p>
		<label for="sel_pages">Home page</label>
		<?php echo Form::select('home_page_id', $page_options, Settings::instance()->get('home_page_id')) ?>
	</p>
	<p><?php echo Form::submit('submit','Save') ?></p>
	<?php echo Form::close() ?>
	
</section>