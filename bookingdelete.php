<?php session_start(); ?>
<?php include_once('inc/connection.php');     ?>
<?php
            $id=$_GET['deleteid'];

            $sql="DELETE FROM bookings WHERE id=$id";
            
            //prepare statement
             $result=mysqli_query($connection,$sql);

             if($result){
                header('location:bookingcontrol.php');
             }

?>