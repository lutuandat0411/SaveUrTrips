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
                			<hr>
                            <section id=timeline>
                   <h1>LAZY GUYS</h1>
                   <p class="leader"></p>
                   <div class="demo-card-wrapper">
                      <div class="demo-card demo-card--step1">
                         <div class="head">
                            <div class="number-box">
                               <span>01</span>
                            </div>
                            <h2><span class="small">Ha Noi</span> 2014</h2>
                         </div>
                         <div class="body">
                            <p>Quận Hoàn Kiếm là nơi được khách du lịch lựa chọn hàng đầu, không chỉ bởi vị trí trung tâm, mà còn bởi không khí nhộn […]</p>
                            <img src="http://cafefcdn.com/thumb_w/650/2017/hanoi-old-quarter-jpg-1498451747871-47-2-852-1512-crop-1498451758581-1498466151321.jpg" alt="Graphic">
                         </div>
                      </div>

                      <div class="demo-card demo-card--step2">
                         <div class="head">
                            <div class="number-box">
                               <span>02</span>
                            </div>
                            <h2><span class="small">Sai Gon</span> 2015</h2>
                         </div>
                         <div class="body">
                            <p>Nửa năm trước, khi mới về Việt Nam, vài người bạn ngỏ ý với tôi về Sài Gòn. Với một đứa chẳng có gì trong tay cũng chẳng quen ai, lúc ấy tất nhiên....</p>
                            <img src="https://d15gqlu8dfiqiu.cloudfront.net/s3fs-public/styles/banner/public/images/chapters/035512ea-3d2f-4754-9228-90b1f6c0f1e4-2060x1236.jpeg" alt="Graphic">
                         </div>
                      </div>

                      <div class="demo-card demo-card--step3">
                         <div class="head">
                            <div class="number-box">
                               <span>03</span>
                            </div>
                            <h2><span class="small">vung tau </span> 2016</h2>
                         </div>
                         <div class="body">
                            <p>Vũng Tàu vốn đã nổi tiếng bờ biển xanh,cát trắng trải dài mênh mông. Nhưng không phải ai cũng có trải nghiệm du lịch Vũng Tàu bằng xe máy trong vòng 1 ngày.</p>
                            <img src="https://www.vntrip.vn/cam-nang/wp-content/uploads/2017/10/bai-truoc-vung-tau-ve-dem.jpg" alt="Graphic">
                         </div>
                      </div>

                      <div class="demo-card demo-card--step4">
                         <div class="head">
                            <div class="number-box">
                               <span>04</span>
                            </div>
                            <h2><span class="small">da nang</span> 2017</h2>
                         </div>
                         <div class="body">
                            <p>Danatravel chuyên tổ chức Tour du lịch miền trung chất lượng khởi hành hằng ngày, giá rẻ đảm bảo chất lượng phục vụ du khách luôn hài lòng với chúng..</p>
                            <img src="https://www.youvivu.com/blog/wp-content/uploads/2016/06/du-lich-da-nang.Youvivu-800x445.jpg" alt="Graphic">
                         </div>
                      </div>

                      <div class="demo-card demo-card--step5">
                         <div class="head">
                            <div class="number-box">
                               <span>05</span>
                            </div>
                            <h2><span class="small">Quy nhon</span> 2018</h2>
                         </div>
                         <div class="body">
                            <p>Một địa danh thuộc Qui Nhơn, Eo Gió là một vùng thiên nhiên hoang sơ, thuộc miền duyên hải miền Trung Việt Nam. Một bãi biển nhiều đá, đầy nắng gió,...</p>
                            <?php
                                        require "sqldb.php";
                                            $sql = "SELECT * FROM img";
                                            $result = mysqli_query($conn, $sql);
                                            if(!$result){
                                                die("Cann't query data".mysqli_error($conn));
                                            }
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo    '<img class="img-responsive" src="'.$row["image"].'">';
                                                 }
                                            } else {
                                            echo "0 results";
                                            }
                                                mysqli_close($conn);
                            ?> 
                         </div>
                      </div>
                   </div>
            </section>
   <!--Footer-->
                <footer id="footer" class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="footer-wrapper">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-brand">
                                        <img src="/img/lazyguys.jpg" alt="logo" />
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
    </body>
</html>