<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>ATutor 1.5 Administrator Documentation</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<?php
if (isset($_GET['admin'])) {
	$section = 'admin';
}
require('../'.$section.'/pages.inc.php');


echo '<a href="../'.$section.'/index.php" target="_top">Back to Chapters</a>';

foreach ($_pages as $file => $title) {
	readfile('../'.$section.'/'.$file);
}
?>
</body>
</html>
