<?php
	// // подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
	
	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	
    if ($_SERVER['REQUEST_METHOD']=="POST" || isset($_POST["title"]) || isset($_POST["author"]) || isset($_POST["pubyear"])|| isset($_POST["price"])) {
    	$title = test_input($_POST["title"]);
    	$author = test_input($_POST["author"]);
    	$pubyear = test_input($_POST["pubyear"]);
    	$price = test_input($_POST["price"]);
    }
    
    addItemToCatalog($title, $author, $pubyear, $price);
  
  if ($_SERVER['REQUEST_METHOD']=="POST" || isset($_POST["title"]) || isset($_POST["author"]) || isset($_POST["pubyear"])|| isset($_POST["price"])) {
    	
    	header("Location: add2cat.php");
        exit;
        die;
    }
    

    
    // echo "$title";
    // echo "test";
