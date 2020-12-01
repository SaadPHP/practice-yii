<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>Testing User Index View [Fetching all the Users]</p>

<?php

	foreach($users as $user){
		echo $user->id." | ".$user->username."<br>";
	}

?>
