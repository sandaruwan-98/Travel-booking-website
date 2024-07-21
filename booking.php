<?php include_once('inc/connection.php');     ?>

<?php

$quanty = $_POST['quantity'];
$dest =$_POST['destination'];

$fulname =$_POST['fname'];
$email =$_POST['email'];
$phone =$_POST['pno'];
$checkin =$_POST['chkin'];
$checkout =$_POST['chkout'];
$cardname =$_POST['cname'];
$cardnum =$_POST['ccnum'];
$cardexp =$_POST['expyear'];
$cardexpmonth =$_POST['expmonth'];
$cardCVV =$_POST['cvv'];
$cardbranch =$_POST['branch'];


$destcost;


if(isset($_POST['destination'])){
    switch ($dest) {
        case "Sigiriya and Polonnaruwa":
            $destcost = 200;
            break;
        case "The Dambulla Cave Temple":
            $destcost = 400;
            break;
        case "Yala National Park":
            $destcost = 450;
            break;
        case "Arugam Bay":
            $destcost = 250;
            break;
        case "Galle":
            $destcost = 220;
            break;
        case "Jaffna":
            $destcost = 200;
            break;
        case "Temple Of Tooth At Kandy":
            $destcost = 400;
            break;
        case "Nuwara Eliya":
            $destcost = 300;
            ;
            break;
        default:
            $destcost = 200;
    }
}
$ammount = ((int)$quanty * $destcost);

//insert data to the db
if(!empty($fulname)|| !empty($email)|| !empty($phone)|| !empty($checkin)|| !empty($checkout)|| !empty($quanty)|| !empty($dest)|| !empty($cardname)|| !empty($cardexp)|| !empty($cardexpmonth)|| !empty($cardCVV )|| !empty($cardbranch)|| !empty($cardnum)){
	//inserting valus to the database
	$INSERT="INSERT into bookings (full_name, email, contactno, people_qty,check_in,chech_out,destination,ammount,card_name,card_number,card_xp_year,card_xp_month,card_cvv,card_branch) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		//prepare statement
		$stmt=$connection->prepare($INSERT);
		$stmt->bind_param("ssssssssssssss",$fulname, $email, $phone, $quanty, $checkin, $checkout, $dest, $ammount, $cardname, $cardnum, $cardexp, $cardexpmonth,$cardCVV,$cardbranch);
		$stmt->execute();

    $quary = "UPDATE bookings SET booked_date=NOW()";
    $quary .= "WHERE email='{$email}'  LIMIT 1";

    $result_set = mysqli_query($connection, $quary);

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookingsuccess.css">
    <title>Booking success</title>
</head>
<body>
    <div class="login">

        <form action="index.php" method="post">
            <fieldset>
                <h1>Booking Successfull!</h1>
                    <p>
                        <label for ="Full Name">Full Name:&nbsp;&nbsp;&nbsp;<?php echo  $fulname; ?></label>
                    </p>
                    <p>
                        <label for ="Email">Email:&nbsp;&nbsp;&nbsp;<?php echo  $email; ?></label>
                    </p>
                    <p>
                        <label for ="Contact No">Contact No:&nbsp;&nbsp;&nbsp;<?php echo  $phone; ?></label>
                    </p>
                    <p>
                        <label for ="No of peoples">No of peoples:&nbsp;&nbsp;&nbsp;<?php echo  $quanty; ?></label>
                    </p>
                    <p>
                        <label for ="check In">check In:&nbsp;&nbsp;&nbsp;<?php echo  $checkin; ?></label>
                    </p>
                    <p>
                        <label for ="Check Out">Check Out:&nbsp;&nbsp;&nbsp;<?php echo  $checkout; ?></label>
                    </p>
                    <p>
                        <label for ="Destination">Destination:&nbsp;&nbsp;&nbsp;<?php echo  $dest; ?></label>
                    </p>
                    <p>
                        <label for ="Total Ammount">Total Ammount:&nbsp;&nbsp;&nbsp;$<?php echo  $ammount; ?>.00</label>
                    </p>
                    <p>
                        <button type="submit" name="submit">Confirm</button>
                    </p>

            </fieldset>

    </div>
</body>
</html>

