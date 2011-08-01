
<section id="login">
	<header><h1>Login</h1></header>
	<?php echo Form::open(Route::url('sradmin', array('controller'=>'auth','action'=>'login'))) ?>
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" value="" id="username" placeholder="Your username" autocomplete="off" required>
	</p>
	
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" value="" id="password" placeholder="Your password" autocomplete="off" required>
	</p>
	
	<input type="submit" name="submit" value="Login">
	</form>
	
</section>
