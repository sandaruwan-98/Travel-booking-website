<?php session_start(); ?>
<?php include_once('inc/connection.php');     ?>
<?php
            $id=$_GET['deleteid'];

            $sql="DELETE FROM users WHERE id=$id";
            
            //prepare statement
             $result=mysqli_query($connection,$sql);

             if($result){
                header('location:users.php');
             }

?>