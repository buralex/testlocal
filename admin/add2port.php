<?php
require "secure/session.inc.php";
require "../inc/lib.inc.php";
require "../inc/config.inc.php";


                  
$folder = new DirectoryIterator("../img/portfolio");
$files_array = [];

foreach ($folder as $finfo) {
	if (!$finfo->isDot() && !$finfo->isDir()) {
	  
	  $key = $folder->getFilename();
	  
	  $files_array[$key] = "";
	}
}
array_multisort(array_keys($files_array), SORT_NATURAL| SORT_FLAG_CASE, $files_array);

var_dump($files_array);


$fThumbs = new DirectoryIterator("../img/portfolio/thumbs");
$f_arr = array();

foreach ($fThumbs as $finfo) {
	if (!$finfo->isDot() && !$finfo->isDir()) {
	  
	  $data = $fThumbs->getFilename();
	  $f_arr[] = $data;
	  
	}
}
natcasesort($f_arr); 
$f_arr = array_values($f_arr);

$cnt = 0;   								// counter for second array ($f_arr)
foreach ($files_array as $key => $file) {
  $files_array[$key] = $f_arr[$cnt];
  $cnt++;
}

foreach ($files_array as $key => $file) {
  addItemToTable($key, $file);
}

var_dump($f_arr);
var_dump($files_array);


       
                  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adding photos to portfolio</title>
</head>
<body>
	<!--<form action="save2cat.php" method="post" onsubmit="myButton.disabled = true; return true;">-->
	<!--	<p>Название: <input type="text" name="title" size="100" required>-->
	<!--	<p>Автор: <input type="text" name="author" size="50" required>-->
	<!--	<p>Год издания: <input type="text" name="pubyear" size="4" required>-->
	<!--	<p>Цена: <input type="text" name="price" size="6" required> руб.-->
	<!--	<p><input type="submit" value="Добавить" name ="myButton">-->
	<!--</form>-->
</body>
</html>