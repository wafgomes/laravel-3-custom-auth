<!DOCTYPE html>
<html>
	<head>
		<title>tAuth</title>
	</head>
	<body>
		<?php
			echo Form::open('login', 'POST');
			echo "<fieldset><legend>Login</legend>";
			echo Form::label('username', 'Username');
			echo Form::text('username');
			echo Form::label('password', 'Password');
			echo Form::text('password');
			echo Form::submit('Submit');
			echo "</fieldset>";
			echo Form::close();
		?>
	</body>
</html>