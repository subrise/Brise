
<section id="login">
	<header><h1>Login</h1></header>
	<?php echo Form::open(Route::url('sradmin', array('controller'=>'auth','action'=>'login'))) ?>
	<label for="username">Username</label>
	<input type="text" name="username" value="" id="username" placeholder="Your username" autocomplete="off" required>
	
	<label for="password">Password</label>
	<input type="password" name="password" value="" id="password" placeholder="Your password" autocomplete="off" required>
	
	<input type="submit" name="submit" value="Login">
	</form>
	
</section>
