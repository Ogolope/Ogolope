<?php 
//Connection using PDO
$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "test_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

/* AWA MELVINE., 2017. Complete user registration system using PHP and MySQL database .[online]. Codewithawa.com. Available from: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database [Accessed 24 March 2022]*/