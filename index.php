<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title></title>
</head>
<body>
    <div>
	    <form action="index.php" method="post">
	    	A: <input type="text" name="a"><br>
	    	B: <input type="text" name="b"><br>
	    	C: <input type="text" name="c"><br>
	    	<input type="submit" value="Submit" name="submit">
	    </form>
    </div>
</body>
</htmL>

<?php
if (isset($_POST)) {
	echo 'Форма отправлена!';
}
print_r($_POST);
?>