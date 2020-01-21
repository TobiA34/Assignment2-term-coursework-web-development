<html>
<body>
<h1>Welcome to Lab 14</h1>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/custom.css">

<?php

foreach ($result as $user){
	echo 'hello'. "<br>". $user->username;
	echo 'hello'. "<br>". $user->user_id;

}




?>


<form method="post" name="insert_users" action="./insert_users">
	<input name="user_full_name"   placeholder="Please enter a name">
	<input name="user_password"  placeholder="Please enter a password">

	<button type="submit">Submit</button>
</form>


</html>
