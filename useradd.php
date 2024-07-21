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

    <div id="head" class="container-fluid p-3 bg-info"><h3 class="text-center"><strong>NEW USER REGISTRATION</strong></h3></div>
    <div id="navi" class="text text-info">
    </div>
    <div id="content" class="text-center">
        <h5>Registration</h5>
            <form action="useradddb.php" method="post">
                        <div>
                            <div class="row">
                                <div class="clearfix">&nbsp;</div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><p align="left"> First Name:</p></div>
                                <div class="col-md-4">
                                <input type="text" name="fname" id="fname" class="form-control" required/>
                                </div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
						<div>
                            <div class="row">
                                <div class="clearfix">&nbsp;</div>
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><p align="left"> Last Name:</p></div>
                                <div class="col-md-4">
                                <input type="text" name="lname" id="lname" class="form-control" required/>
                                </div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <div class="clearfix">&nbsp;</div>
                        <div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><p align="left"> Email:</p></div>
                                <div class="col-md-4">
                                <input type="email" name="email" id="email" class="form-control" required/>
                                </div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <div class="clearfix">&nbsp;</div>
                        <div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><p align="left"> Password:</p></div>
                                <div class="col-md-4">
                                <input type="password" name="password" id="password" class="form-control" required/>
                                </div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <div class="clearfix">&nbsp;</div>
                        <div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><p align="left"> Gender: </p></div>
                                <div class="col-md-4">
                                <input type="radio" name="gender" id="male" value="male"required/>Male &nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" id="female" value="female"required/>Female
                                </div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                            <div class="clearfix">&nbsp;</div>
                        <div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-2"></div> 
                                <div class="col-md-4"><button type="submit" class="form-control btn btn-success" name="submit">Submit</button></div> 
                                <div class="col-md-3"></div>
                                <div class="clearfix"></div> 
                            </div>
                        </div>
            </form>
    </div>
</body>
</html>