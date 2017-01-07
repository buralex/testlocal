<?php
    define("DB_HOST", "localhost");
	define("DB_LOGIN", "alexman");
	define("DB_PASSWORD", "");
	define("DB_NAME", "blueMasters");
	
	
	

	class DBConnection	{
	    static $conn;
	
	    public static function connect() {
	        if(empty(self::$conn)){
	            self::$conn = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die("Connection failed: " . $conn->connect_error); 
	            mysqli_set_charset(self::$conn, 'utf8');
				//if ($conn->connect_error) {
				//die("Connection failed: " . $conn->connect_error);
				//} 
	        }
	    }
	}

	DBConnection::connect();

