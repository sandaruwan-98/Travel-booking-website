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

    <div id="head" class="container-fluid p-3 bg-info"><h3 class="text-center"><strong>BOOKING ADMINISTRATION</strong></h3></div>
    <div id="navi" class="text text-info">
    </div>

    <div id="content" class="text-center">
    
   <div class="container">
   <button class="btn btn-primary my-5"><a href="users.php" class="text-light">User Administration</a></button>
   <button class="btn btn-primary my-5"><a href="contactuscontrol.php" class="text-light">Contact us</a></button>   
    <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Contact No</th>
              <th scope="col">No of Persons</th>
              <th scope="col">Check In</th>
              <th scope="col">Check out</th>
              <th scope="col">Destination</th>
              <th scope="col">Booked Date</th>
              <th scope="col">Total Ammount</th>
              <th scope="col">Card name</th>
              <th scope="col">Card Number</th>
              <th scope="col">Oparation</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            //create connection
            $SELECT="SELECT * FROM bookings";

            //prepare statement
            $result=mysqli_query($connection,$SELECT);
            
            if($result){            
            while($row=mysqli_fetch_assoc($result)){
            
                $id=$row['id'];
                $fullname=$row['full_name'];
                $email=$row['email'];
                $contactno=$row['contactno'];
                $Qty=$row['people_qty'];
                $chkin=$row['check_in'];
                $chkout = $row['chech_out'];
                $destination=$row['destination'];
                $bookeddate=$row['booked_date'];
                $total = $row['ammount'];
                $cname=$row['card_name'];
                $cnumber=$row['card_number'];
                
                
                
                echo ('<tr>
                              <th scope="row">'.$id.'</th>
                              <td>'.$fullname.'</td>
                              <td>'.$email.'</td>
                              <td>'. $contactno.'</td>
                              <td>'.$Qty.'</td>
                              <td>'.$chkin.'</td>
                              <td>'.$chkout.'</td>
                              <td>'.$destination.'</td>
                              <td>'. $bookeddate.'</td>
                              <td>'.$total.'</td>
                              <td>'.$cname.'</td>
                              <td>'.$cnumber.'</td>
                              <td>
                              <button class="btn btn-danger"><a href="bookingdelete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
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