<?php session_start(); ?>
<?php include_once('inc/connection.php');     ?>
<?php 
	//checking if a praticular user is loged in 
	if(!isset($_SESSION['user_id'])){
	header('Location:index.php');
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="user.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2/css/bootstrap.min.css"/>
    <title>users</title>
</head>
<body>
    <header>
		<div class="appname">Travel Booking System</div>
		<div class="logedin">Welcome <?php echo $_SESSION['first_name']; ?>!|<a href="logout.php">Log_out</a></div>
	</header>

    <div id="head" class="container-fluid p-3 bg-info"><h3 class="text-center"><strong>USER ADMINISTRATION</strong></h3></div>
    <div id="navi" class="text text-info">
    </div>

    <div id="content" class="text-center">
    
   <div class="container">
   <button class="btn btn-primary my-5"><a href="useradd.php" class="text-light">Add user</a></button> 
   <button class="btn btn-primary my-5"><a href="bookingcontrol.php" class="text-light">Bookings</a></button>
   <button class="btn btn-primary my-5"><a href="contactuscontrol.php" class="text-light">Contact Us</a></button>  
    <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Password</th>
              <th scope="col">gender</th>
              <th scope="col">Last Login</th>
              <th scope="col">Oparation</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            //create connection
            $SELECT="SELECT * FROM users";

            //prepare statement
            $result=mysqli_query($connection,$SELECT);
            
            if($result){            
            while($row=mysqli_fetch_assoc($result)){
            
                $id=$row['id'];
                $firstname=$row['First_name'];
                $lastname=$row['Last_name'];
                $email=$row['email'];
                $password=$row['password'];
                $gender=$row['gender'];
                $lastlogedin = $row['Last_login'];
                
                
                echo ('<tr>
                              <th scope="row">'.$id.'</th>
                              <td>'.$firstname.'</td>
                              <td>'.$lastname.'</td>
                              <td>'. $email.'</td>
                              <td>'.$password.'</td>
                              <td>'.$gender.'</td>
                              <td>'.$lastlogedin.'</td>
                              <td>
                              <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"  class="text-light">Update</a></button>
                              <button class="btn btn-danger"><a href="userdelete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
                              </td>
                        </tr>'); 
            }
            
            }
        
          ?>
          </tbody>     
    </table>
</div>
</div>
</body>
</html>