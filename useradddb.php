<?php session_start(); ?>
<?php include_once('inc/connection.php');     ?>
<?php 
	//checking if a praticular user is loged in 
	if(!isset($_SESSION['user_id'])){
	header('Location:index.php');
	}	

//submitting the data to the database

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password = $_POST['password'];

if(!empty($firstname)|| !empty($lastname)|| !empty($gender)|| !empty($email)|| !empty($password)){
	//inserting valus to the database
	$INSERT="INSERT into users (First_name, Last_name, gender, email, password ) values(?, ?, ?, ?, ?)";

		//prepare statement
		$stmt=$connection->prepare($INSERT);
		$stmt->bind_param("sssss",$firstname, $lastname, $gender, $email, $password);
		$stmt->execute();

		//echo("New record added sucessfully!");
		header('location:users.php');
}
?>
