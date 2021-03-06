<?php 
	require_once('Dao.php');
	// for session hijack demo
	setcookie('stolen', '', time()-3600);
?>
<html>
<head>
  <title>PDO Demo</title>
</head>
<body>
  <h1>Login</h1>
  <p>This is not a real demo of logging in. This is just to select a specific
  user. DON'T use this as an example for logging in.</p>
  <form id="username-form" action="posts.php" method="POST">
    <fieldset>
        <label for="username">Fake login username:</label>
        <input type="text" id="username" name="username" required>
        <label for="fullName">Your real name:</label>
        <input type="text" id="fullName" name="fullName" required>
        <input type="submit" name="loginButton" value="Login">
    </fieldset>
  </form>
  <p>Existing users are</p>
	<ul>
		<?php
		$dao = new Dao(); 
		$users = $dao->getUsernameList(); 
			foreach($users as $user) { ?>
				<li><?= $user['username'] ?></li>
		<?php } ?>
	</ul>
</body>
</html>

