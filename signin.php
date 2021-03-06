
<?php 
     session_start();
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <link rel="shortcut icon" href="img/computer.png" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Save Your Trips</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
		<link rel="stylesheet" href="css/menu.css">
        <!--For Plugins external css-->
        <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->
        <!-- <link rel="stylesheet" href="assets/css/roboto-webfont.css" /> -->
        <!--Theme custom css -->
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
        <!--Theme Responsive css-->
        <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
            <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="https://www.facebook.com/TDStore-376692499457246/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="social-contact">
                                <?php

                                        if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
                                            echo '<a href="signup.php"><i class="fa fa-user-plus"></i>Đăng kí</a>';
                                            echo '<a href="signin.php"><i class="fa fa-sign-in"></i>Đăng nhập</a>';
                                        }else{
                                             echo '<i style="color: #fff; font-size: 15px;">Hi,'.$_SESSION["name"].'</i>';
                                             echo ' ';
                                             echo '<a href="logout.php"><i class="fa fa-sign-in"></i>Đăng xuất</a>';
                                        }
                                       
                                    ?>     
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /container -->
            </section>
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo3.jpg" alt="Logo" /></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">My Timeline</a></li>
                        </ul>
                 </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
            </nav>
<?php

	$sErr= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if( isset( $_POST["login"]) ) {
	    $_user = $_POST['nA'];
	    $_pass = $_POST['nB'];
	    // kiểm tra user
	require 'sqldb.php';
	$sql = "SELECT * from user";
	$result = mysqli_query($conn, $sql);
	if(!$result){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result) > 0) {

	    while($row = mysqli_fetch_assoc($result)) {
	      $user = $row["username"];
	      $pass = $row["password"];
	      $fname = $row["fullname"];
	      if( $_user == $user && $_pass == $pass ){
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = $fname;
	        header("Location: index.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	$sql2 = "SELECT * from admin";
	$result2 = mysqli_query($conn, $sql2);
	if(!$result2){
	  die( "Can't query data".mysqli_error($conn) );
	}

	if (mysqli_num_rows($result2) > 0) {

	    while($row2 = mysqli_fetch_assoc($result2)) {
	      $name = $row2["username"];
	      $passadmin = $row2["password"];
	     
	      if( $_user == $name && $_pass == $passadmin ){
	      	$_SESSION["admin"] = "ready";
	        $_SESSION["login_status"] = "ready";
	        $_SESSION["name"] = 'Admin';
	         header("Location:index.php");
	    }else{
	        $sErr= "Username hoặc Password bị sai hoặc chưa tồn tại.";
	    }    
	      }
	} 
	mysqli_close($conn);
	//end kiem tra
	//end kiem tra
	  }
	}
?>
 <?php
    if( $sErr != ""){
      echo '<script language="javascript">';
      echo 'alert("'.$sErr.'")';
      echo '</script>';
    }   
?>
<hr>
<div class="container">
	<div class="signup-container">
		<h3 style="text-align: center;padding-bottom: 10px;">Đăng Nhập</h3>
			<form class="form" id="signup" data-toggle="validator" action="signin.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</span>
						<input type="text" class="form-control"  placeholder="username" name="nA" required>	
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</span>
						<input type="password" class="form-control" placeholder="password" name="nB" required>
					</div>
				</div>
				<button type="submit" value="login" name="login">Đăng nhập</button>
	      		<p class="message">Not registered? <a href="signup.php">Create an account</a></p>
			</form>
		</div>
	</div>
   <!--Footer-->
                <footer id="footer" class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-wrapper">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-brand">
                                        <img src="/img/lazyguys.png" alt="logo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
                <script src="assets/js/vendor/bootstrap.min.js"></script>
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/modernizr.js"></script>
                <script src="assets/js/main.js"></script>
                <script type="text/javascript">
                  $('.message a').click(function(){
                   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                });
                </script>
            </body>
        </html>