<?php

function stringToAsterisks($string){
	if (strlen($string) < 3){
		return "N/A";
	} else {
    	return str_repeat("*", strlen($string)); 
	}
}

require '/var/www/parrot-ctfs.com/html/api/dbconnect.php';
require '/var/www/parrot-ctfs.com/html/api/authcheck.php';
require '/var/www/parrot-ctfs.com/html/api/gen_token.php'; 

$uuid = mysqli_real_escape_string($conn, $_COOKIE['ctf_id']);
$boxID = mysqli_real_escape_string($conn, $_GET['boxID']);

if($boxID == ""){
  header('HTTP/1.1 403 Forbidden', true, 403);
  exit();
}

$action = $_POST['action'];

$sql = "SELECT * FROM `boxes` WHERE boxID = '$boxID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $desc = $row["description"];
        $link = $row["pic_link"];
        $pub = $row["publisher"];
        $catetory = $row["category"];
        $difficulty = $row["difficulty"];

        $boxIP = $row['ip'];

        $userFlag = $row["user_flag"];
        $rootFlag = $row["root_flag"];

        $question1 = $row["question1"];
        $question2 = $row["question2"];
        $question3 = $row["question3"];

        $answer1 = $row["oneanswer"];
        $answer2 = $row["twoanswer"];
        $answer3 = $row["threeanswer"];

        


    }
}

$sql = "SELECT * FROM `users` WHERE uuid = '$uuid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $username = $row["username"];
        $paid = $row["is_paid"];
        $free = $row["is_free"];
        $pfp = $row["pfp_link"];
        $perm_id = $row['perm_id'];
    }
}


$sql = "SELECT * FROM `box_entries` WHERE perm_id = '$perm_id' AND boxID = '$boxID'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  $alreadyFinished = true;
} else {
  $alreadyFinished = false;
}

  $sql = "SELECT * FROM `box_questions` WHERE boxID = '$boxID' AND perm_id = '$perm_id'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $question1Answered = $row["question1Answered"];
          $question2Answered = $row["question2Answered"];
          $question3Answered = $row["question3Answered"];

          $userFlagAnswered = $row["userFlag"];
          $rootFlagAnswered = $row["rootFlag"];

      }
  }

if ($question1Answered == 'true' && $question2Answered == 'true' && $question3Answered == 'true' && $userFlagAnswered == 'true' && $rootFlagAnswered == 'true' && $alreadyFinished == false){
  $sql = "INSERT INTO `box_entries` (`perm_id`, `date`, `boxID`, `userFlag_achieved`, `rootFlag_achieved`) VALUES ('$perm_id', '".date("Y-m-d h:m:s")."', '$boxID', 'true', 'true')";
  $conn->query($sql);
}



?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="https://parrot-ctfs.com/favicon.ico" />
  <title>Parrot CTFS | Home </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/0583ca94dd.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/dashboard.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel = "stylesheet" href = "css/buttons.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">CTFS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Parrot CTFS </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo $pfp; ?>" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-solid fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <!-- the 20% is hard coded --> <!-- POV: *a real dev* why do you hate yourself? -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
              <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a style='margin-top: 13%;margin-left: -10%;background-color: #f4f4f4;' href="/profile.php" class="btn btn-default btn-flat">Profile </a>
                </div>
                <div class="pull-right">
                  <a style='margin-top: 9%;margin-right: 100%;background-color: #f4f4f4;' href="/dashboard" class="btn btn-default btn-flat">Dashboard</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $pfp; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo htmlspecialchars($username, ENT_QUOTES, "UTF-8"); ?><?php

if ($paid == 'true'){
  echo ' <i style="color: #00c0ef;font-size: 80%;" title="You are a paid user" class="fas fa-check-circle"></i>';
}
?></p>
          <!-- Status -->
          <a href="#">VPN:  <?php
          $cURLConnection = curl_init();

          curl_setopt($cURLConnection, CURLOPT_URL, 'http://vpn.parrot-ctfs.com/getvpnstatus.php?username='.$username.'');
          curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 6);
          
         $curlResponse = curl_exec($cURLConnection);
         curl_close($cURLConnection);


        $cURLConnectiontwo = curl_init();

        curl_setopt($cURLConnectiontwo, CURLOPT_URL, 'http://vpn.parrot-ctfs.com:8080/getvpnstatus.php?username='.$username.'');
        curl_setopt($cURLConnectiontwo, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 6);
          
        $curlResponsetwo = curl_exec($cURLConnectiontwo);
        curl_close($cURLConnectiontwo);
          
       if ($curlResponse == 'true'){
        echo '<i class="fa fa-circle text-success"></i>Online (FREE)</a>';
      } else if ($curlResponsetwo == 'true'){
        echo '<i style="color: green;" class="fa fa-circle text-success"></i>Online (PRO)</a>';
      } else {
        echo '<i style="color: red;" class="fa fa-circle text-success"></i>Offline</a>';
       }
  

          ?>
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->
      <br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-solid fa-cloud"></i><span>PWN BOX</span></a></li>
        <li><a href="/api/getvpn.php?plan=free"><i class="fa fa-solid fa-download"></i><span>Download FREE VPN</span></a></li>
        <li><a href="/api/getvpn.php?plan=pro"><i class="fa fa-solid fa-download"></i><span>Download PRO VPN</span></a></li>
        <li><a href="/submitabox"><i class="fa fa-solid fa-file-upload"></i><span>Submit a Box</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-solid fa-flask"></i><span>Lab Machines</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php

            $sql = "SELECT * FROM boxes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  if ($paid == 'true'){
                    echo '<li><a href="/box/?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock-open"></i> '.$row['name'].'</a></li>';
                  } else if($free == 'true' && $row['availability'] == 'paid'){
                    echo '<li><a href="/box/?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock"></i> '.$row['name'].'</a></li>';
                  } else if($free == 'true' && $row['availability'] == 'free'){
                    echo '<li><a href="/box?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock-open"></i> '.$row['name'].'</a></li>';
                  }
                  
                }
            }?>
          </ul>
        </li>

            <style>
              .button1 {
                margin-right: -1px;
              }
              .button2 {
                margin-left: +120px;
              }
            </style>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php
if(isset($_GET['msgText'])){
  $msgText = $_GET['msgText'];
  echo "
  <p style='border: 15px solid red;background-color: red;color: black;width: 90%;float:center;margin-left:5%'class='alert alert-danger'><strong>".htmlspecialchars($msgText, ENT_QUOTES, 'UTF-8')."</strong></p>";
}
?>
      <h1 style='color: white;'>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $link; ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h4>
                      <p class="text-secondary mb-1">Created by: <?php echo htmlspecialchars($pub, ENT_QUOTES, 'UTF-8'); ?></p>
                      <a style='background-color: green;' class="btn btn-info" href="/api/start.php?boxID=<?php echo $_GET['boxID']; ?>">Start</a>
                      <a style='background-color: red;' class="btn btn-info " href="/api/stop.php?boxID=<?php echo $_GET['boxID']; ?>">Stop</a>
                      <a style='background-color: red;' class="btn btn-info " href="/api/reset.php?boxID=<?php echo $_GET['boxID']; ?>">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <b><h5 style='font-weight: bold;' class="mb-0">Box Host:</h6></b>
                    <span class="text-secondary"><div id = "timer_div">N/A</div></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <b><h5 style='font-weight: bold;' class="mb-0">Difficulty:</h6></b>
                    <span class="text-secondary"><?php echo $difficulty; ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <b><h5 style='font-weight: bold;' class="mb-0">Category:</h6></b>
                    <span class="text-secondary"><?php echo $catetory; ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <b><h5 style='font-weight: bold;' class="mb-0">Description:</h6></b>
                    <span class="text-secondary"><?php echo $desc; ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <form action = "/api/finishbox.php" method = "POST">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>"/>
                  <input type = "hidden" name = "boxID" value = "<?php echo $boxID; ?>">
                  <?php

if ($userFlagAnswered == 'true'){
  echo '<div class = "row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>User Flag:</h6></b>
  </div>
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
  <input type="text" class="form-control" id="uflag" name="uflag" placeholder="Completed" readonly disabled>
  </div>
  </div>
  <hr>';
} else {
  echo '<div class="row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>User Flag:</h6></b>
  </div>
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
  <input type="text" class="form-control" id="uflag" name="uflag" placeholder="Format: '.stringToAsterisks($userFlag).'">
  </div>
  </div>
  <hr>';
}

?>

<?php

if ($rootFlagAnswered == 'true'){
  echo '<div class = "row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>Root Flag:</h6></b>
  </div>
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
  <input type="text" class="form-control" id="rflag" name="rflag" placeholder="Completed" readonly disabled>
  </div>
  </div><hr>';
} else {
  echo '<div class = "row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>Root Flag:</h6></b>
  </div>
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
  <input type="text" class="form-control" id="rflag" name="rflag" placeholder="Format: '.stringToAsterisks($rootFlag).'">
  </div>
  </div><hr>';
}

?>
                <?php

if ($question1Answered == 'true'){
  echo '<div class="row">
<div class="col-sm-3">
<h6 class="mb-0"><b>'.htmlspecialchars($question1, ENT_QUOTES, 'UTF-8').'</h6></b>
</div>
    
<div style="margin-top: .8%" class="col-sm-9 text-secondary">
    <input type="text" class="form-control" id="question1" name="question1" placeholder="Completed" readonly disabled>
</div>
</div>
<hr>';
} else {
  echo '<div class="row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>'.htmlspecialchars($question1, ENT_QUOTES, 'UTF-8').'</h6></b>
  </div>
      
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
      <input type="text" class="form-control" id="question1" name="question1" placeholder="Format: '.stringToAsterisks($answer1).'">
  </div>
  </div>
  <hr>';
}

?>

<?php

if ($question2Answered == 'true'){
  echo '<div class="row">
<div class="col-sm-3">
<h6 class="mb-0"><b>'.htmlspecialchars($question2, ENT_QUOTES, 'UTF-8').'</h6></b>
</div>
    
<div style="margin-top: .8%" class="col-sm-9 text-secondary">
    <input type="text" class="form-control" id="question2" name="question2" placeholder="Completed" readonly disabled>
</div>
</div>
<hr>';
} else {
  echo '<div class="row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>'.htmlspecialchars($question2, ENT_QUOTES, 'UTF-8').'</h6></b>
  </div>
      
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
      <input type="text" class="form-control" id="question2" name="question2" placeholder="Format: '.stringToAsterisks($answer2).'">
  </div>
  </div>
  <hr>';
}

?>

<?php

if ($question3Answered == 'true'){
  echo '<div class="row">
<div class="col-sm-3">
<h6 class="mb-0"><b>'.htmlspecialchars($question3, ENT_QUOTES, 'UTF-8').'</h6></b>
</div>
    
<div style="margin-top: .8%" class="col-sm-9 text-secondary">
    <input type="text" class="form-control" id="question3" name="question3" placeholder="Completed" readonly disabled>
</div>
</div>
<hr>';
} else {
  echo '<div class="row">
  <div class="col-sm-3">
  <h6 class="mb-0"><b>'.htmlspecialchars($question3, ENT_QUOTES, 'UTF-8').'</h6></b>
  </div>
      
  <div style="margin-top: .8%" class="col-sm-9 text-secondary">
      <input type="text" class="form-control" id="question3" name="question3" placeholder="Format: '.stringToAsterisks($answer3).'">
  </div>
  </div>
  <hr>';
}

?>
                  <input type = "submit" class="btn btn-primary btn-lg btn-block" name="submit" value = "Submit">
                </div>
              </div>
            </form>
            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer  style='background-color: white;' class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Version 0.1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://parrot-pentest.com">Parrot CTFS/Parrot Pentest, LLC</a></strong> All rights reserved.
  </footer>

      </div>
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<?php
                    if($_GET['action'] == 'start'){
                      echo "<script>
                      var seconds_left = 30;
                    var interval = setInterval(function() {
                        document.getElementById('timer_div').innerHTML = --seconds_left;

                        if (seconds_left <= 0)
                        {
                          document.getElementById('timer_div').innerHTML = '$boxIP';
                          clearInterval(interval);
                        }
                    }, 1000);
                    </script>";
                  }?>

</body>
</html>
