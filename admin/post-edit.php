<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	if (!empty($_POST)){
	    require_once('../includes/class-insert.php');
	    if ($insert->post($_POST)){
	        echo '<p>Data inserted successfully.</p>';
	    }
	     
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert post</title>
</head>
<body>

	<form method="post">

	<p>
		<input type="text" name="post-title" />     <!-- self-submitting form  -->
	</p>
	
	<p>
		<textarea name="post-content"></textarea>
	</p>
	
		<label for="post-category">Cat 1</label>
		<input type="checkbox" name="post-category[1]" value="cat1"/>
		<br/>
		<label for="post-category">Cat 2</label>
		<input type="checkbox" name="post-category[2]" value="cat2"/>
		<br/>
		<label for="post-category">Cat 3</label>
		<input type="checkbox" name="post-category[3]" value="cat3"/>
		
	<p>
		<input type="submit" value="Submit" />
	</p>
	
	</form>
	
</body>
</html>