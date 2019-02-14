<?php

?>
<header>
	<script type="text/javascript" src="<?php echo URL; ?>Public/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>Public/js/main.js"></script>
	
	<nav class="navbar navbar-nav">
		<a href="<?php echo URL; ?>">Home</a>
		<a href="<?php echo URL; ?>student">Student</a>
		<a href="<?php echo URL; ?>standard">Classroom</a>
		<?php if (Session::get('loggedIn') == true): ?>
			<a href="<?php echo URL; ?>dashboard/logout">Logout</a>
		<?php else: ?>
			<a href="<?php echo URL; ?>login">Login</a>
		<?php endif; ?>
	</nav>

</header>