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
    <title>Contact us administration</title>
</head>
<body>
    <header>
		<div class="appname">Travel Booking System</div>
		<div class="logedin">Welcome <?php echo $_SESSION['first_name']; ?>!|<a href="logout.php">Log_out</a></div>
	</header>

    <div id="head" class="container-fluid p-3 bg-info"><h3 class="text-center"><strong>CONTACT US FORM ADMINISTRATION</strong></h3></div>
    <div id="navi" class="text text-info">
    </div>

    <div id="content" class="text-center">
    
   <div class="container">
   <button class="btn btn-primary my-5"><a href="users.php" class="text-light">User Administration</a></button> 
   <button class="btn btn-primary my-5"><a href="bookingcontrol.php" class="text-light">Bookings</a></button>  
    <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Contact Id</th>
              <th scope="col">User Name</th>
              <th scope="col">User Email</th>
              <th scope="col">Contact No</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
              <th scope="col">Date</th>
              <th scope="col">Oparation</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            //create connection
            $SELECT="SELECT * FROM contact";

            //prepare statement
            $result=mysqli_query($connection,$SELECT);
            
            if($result){            
            while($row=mysqli_fetch_assoc($result)){
            
                $id=$row['contact_id'];
                $conname=$row['contact_name'];
                $conemail=$row['contact_email'];
                $conno=$row['contact_no'];
                $msgsubject=$row['Message_subject'];
                $msgbody=$row['Message_body'];
                $lastlogedin = $row['Date'];
                
                
                echo ('<tr>
                              <th scope="row">'.$id.'</th>
                              <td>'.$conname.'</td>
                              <td>'.$conemail.'</td>
                              <td>'. $conno.'</td>
                              <td>'.$msgsubject.'</td>
                              <td>'.$msgbody.'</td>
                              <td>'.$lastlogedin.'</td>
                              <td>
                              <button class="btn btn-danger"><a href="contactdelete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
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