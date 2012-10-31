<?
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];

	//the example of inserting data with variable from HTML form
	//input.php
	mysql_connect('mysql-user-master.stanford.edu', 'ccs147goizueta', 'nookohte');//database connection
	mysql_select_db("c_cs147_goizueta");
	//inserting data order
	$order = "INSERT INTO Users
	            (Username, Password)
	            VALUES
	            ('$Username',
	            '$Password')";

	//declare in the order variable
	$result = mysql_query($order);  //order executes
	if($result){
	    session_register("$Username");
		session_register("$Password");
		session_start();
		header("location:users.php");
	} else{
	    echo "You fucked up.";
	    //needs to check if register is good
	}
?>