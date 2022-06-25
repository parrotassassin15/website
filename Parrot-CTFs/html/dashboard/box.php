
<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

require '/var/www/staging.parrot-ctfs.com/html/api/dbconnect.php';
require '/var/www/staging.parrot-ctfs.com/html/api/authcheck.php';

function stringToAsterisks($string){
	if (strlen($string) < 3){
		return "N/A";
	} else {
    	return str_repeat("*", strlen($string)); 
	}
}

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
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parrot CTFs | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Choices.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/0583ca94dd.js" crossorigin="anonymous" type="1d671b5efc0baefaf4f46f02-text/javascript"></script>

    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer"><span>Close </span>
                  <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
                    <use xlink:href="#close-1"> </use>
                  </svg>
            </div>
            <div class="row w-100">
              <div class="col-lg-8 mx-auto">
                <form class="px-4" id="searchForm" action="#">
                  <div class="input-group position-relative flex-column flex-lg-row flex-nowrap">
                    <input class="form-control shadow-0 bg-none px-0 w-100" type="search" name="search" placeholder="What are you searching for...">
                    <button class="btn btn-link text-gray-600 px-0 text-decoration-none fw-bold cursor-pointer text-center" type="submit">Search</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between py-1">
          <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="https://parrot-ctfs.com/index.php">
              <div class="brand-text brand-big"><img src="img/parrot-ctf-removebg-preview.png" height="62.5"></div></a>
            <button class="sidebar-toggle">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                    <use xlink:href="#arrow-left-1"> </use>
                  </svg>
            </button>
          </div>
          <ul class="list-inline mb-0">
      
             
          
            </li>
            </li>
            <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="https://discord.parrot-ctfs.com"> <span class="d-none d-sm-inline-block">Join our Discord</span>
            
            <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="user.php"> <span class="d-none d-sm-inline-block">My Profile</span>
            
                <use xlink:href="#disable-1"> </use>
              </svg></a></li>
            <li class="list-inline-item logout px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="#"> <span class="d-none d-sm-inline-block">Sign out</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#disable-1"> </use>
                    </svg></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center p-4"><img class="avatar shadow-0 img-fluid rounded-circle" src="/img/parrot.webp" alt="...">
          <div class="ms-3 title">
            <h1 class="h5 mb-1">Parrot</h1>
            <p class="text-sm text-gray-700 mb-0 lh-1">VPN: <i style="color: red;" class="fa fa-circle text-success" aria-hidden="true"></i> Online </p>
          </div>
        </div><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
        <ul class="list-unstyled">
              <li class="sidebar-item active"><a class="sidebar-link" href="index.php"> 
                      <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#real-estate-1"> </use>
                      </svg><span>Home </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="tables.html"> 
                      <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#hamburger-1"> </use>
                      </svg><span>Pwn Box </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="charts.html"> 
                      <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#sales-up-1"> </use>
                      </svg><span> Your VPN </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
                      <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#survey-1"> </use>
                      </svg><span>Submit a Box </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
                      <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#checkmark-1"></use>
                      </svg><span>Lab Machines </span></a>
                <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <?php

$sql = "SELECT * FROM `boxes`";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {
    if ($paid == 'true'){
      echo '<li><a class="sidebar-link" href="/dashboard/box.php?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock-open" aria-hidden="true" style="margin-right: 3px;"></i>'.$row['name'].'</a></li>';
    } else if($free == 'true' && $row['availability'] == 'paid'){
      echo '<li><a class="sidebar-link" href="/dashboard/box.php?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock" aria-hidden="true" style="margin-right: 3px;"></i>'.$row['name'].'</a></li>';
    } else if($free == 'true' && $row['availability'] == 'free'){
      echo '<li><a class="sidebar-link" href="/dashboard/box.php?boxID='.$row["boxID"].'"><i class="fa fa-solid fa-lock-open" aria-hidden="true" style="margin-right: 3px;"></i>'.$row['name'].'</a></li>';
    }
    
  }
}
?> 
                </ul>
              </li>
              
        </ul>
        
      </nav>
      <div class="page-content">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
              <div class="container-fluid">
                <h2 class="h5 mb-0"><?php echo $name; ?> Box</h2>
              </div>
            </div>
            <section>
              <div class="container-fluid">
                <div class="row gy-4">
                  <div class="col-md-3 col-sm-6">
                    <div class="card mb-0">
                      <div class="card-body">
                        <div class="d-flex align-items-end justify-content-between mb-2">
                          <div class="me-2">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                  <use xlink:href="#user-1"> </use>
                                </svg>
                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">Total Boxes</p>
                          </div>
                          <p class="text-xxl lh-1 mb-0 text-dash-color-1">13</p>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card mb-0">
                      <div class="card-body">
                        <div class="d-flex align-items-end justify-content-between mb-2">
                          <div class="me-2">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                  <use xlink:href="#checkmark-1"> </use>
                                </svg>
                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">Completed Boxes</p>
                          </div>
                          <p class="text-xxl lh-1 mb-0 text-dash-color-2">0</p>
                        </div>
                        <div class="progress" style="height: 3px">
                          <div class="progress-bar bg-dash-color-2" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card mb-0">
                      <div class="card-body">
                        <div class="d-flex align-items-end justify-content-between mb-2">
                          <div class="me-2">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                  <use xlink:href="#survey-1"> </use>
                                </svg>
                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">Completion Rate</p>
                          </div>
                          <p class="text-xxl lh-1 mb-0 text-dash-color-3">0%</p>
                        </div>
                        <div class="progress" style="height: 3px">
                          <div class="progress-bar bg-dash-color-3" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card mb-0">
                      <div class="card-body">
                        <div class="d-flex align-items-end justify-content-between mb-2">
                          <div class="me-2">
                                <svg class="svg-icon svg-icon-sm svg-icon-heavy text-gray-600 mb-2">
                                  <use xlink:href="#paper-stack-1"> </use>
                                </svg>
                            <p class="text-sm text-uppercase text-gray-600 lh-1 mb-0">CTF Streak</p>
                          </div>
                          <p class="text-xxl lh-1 mb-0 text-dash-color-4">2</p>
                        </div>
                        <div style="height: 3px;">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            
    
           
        

      
        <section class="pt-0">
          <div class="container-fluid">
            <div class="row gy-4">
              <div class="col-lg-6">
                  
                <div class="card">
                  <div class="card-body" style="height: 790px; min-width: 100%; width: 100%;">
                    <div class="row gx-5" style="height: 245px;">
                      <div class="col-6 border-sm-end border-dash-dark-1" style="min-width: 100%; width: 100%;">
                        <p class="text-uppercase text-sm fw-light mb-2">Box Details
                        </p> 
                        <div class="card-body">

                          <div class="d-flex flex-column align-items-left text-center ">
        
                           
                            
                            <div class="card-body" style="width: 100%;">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="<?php echo $link; ?>" alt="Admin" class="square" width="130">
                                <div class="mt-3">
                                  <h4><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h4>
                                  <p class="text-secondary mb-1">Created by: <?php echo htmlspecialchars($pub, ENT_QUOTES, 'UTF-8'); ?></p><br>
                                                    <a href="/api/start.php?boxID=<?php echo $_GET['boxID']; ?>"><button style="background-color: green;" id="myBtn" class="btn btn-info"> Start</button> </a>
                                                    <a href="/api/stop.php?boxID=<?php echo $_GET['boxID']; ?>"><button style="background-color: red;" id="myBtn" class="btn btn-info ">Stop</button> </a>
                                                    <a href="/api/reset.php?boxID=<?php echo $_GET['boxID']; ?>"><button style="background-color: red;" id="myBtn" class="btn btn-info ">Reset</button> </a>
                                </div>
                              </div>
                                            <hr>
                                            <div style="text-align: left;">
                                            <strong> Box Host: </strong>
                                            <p style="color: white;">N/A</p>
                                            <hr>
                                            <strong> Difficulty: </strong>
                                            <p style="color: white;"><?php echo $difficulty; ?></p>
                                            <hr>
                                            <strong> Category: </strong>
                                            <p style="color: white;"><?php echo $catetory; ?></p>
                                            <hr>
                                            <strong> Description: </strong>
                                            <p style="color: white;"><?php echo $desc; ?></p>
                                          </div>
                
                            </div>
        
                          </div>
        
                        </div>
                      </div>
                     
                        <div class="d-flex justify-content-center text-center">
                          

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card" style="width: 100%;">
                  <div class="card-body" style="height: 100%;width: 100%;">
                    <p class="text-uppercase text-sm fw-light mb-2">Box Questions
                    </p>
                    <br>
                    
                    <div class="card-body">
                      <?php

                      if ($userFlagAnswered == 'true'){
                        echo '<div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">User Flag: </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="uflag" id="uflag" value="" placeholder="Completed" readonly disabled>
                        </div>
                      </div>';
                      } else {
                        echo '<div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">User Flag: </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" id="uflag" name="uflag" placeholder="Format: '.stringToAsterisks($userFlag).'">
                        </div>
                      </div>';
                      }
                      ?>
                                    <hr>

                                    <?php

                      if ($rootFlagAnswered == 'true'){
                        echo '<div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Root Flag: </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" name="rflag" class="form-control" value="" placeholder="Completed" readonly disabled>
                        </div>
                      </div>
                                    <hr>';
                      } else {
                        echo '<div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Root Flag: </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="text" class="form-control" name="rflag" value="" placeholder="Format: '.stringToAsterisks($userFlag).'">
                        </div>
                      </div>
                                    <hr>';
                      }
                      ?>

                      <?php

                      if ($question1Answered == 'true'){
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question1, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Completed" readonly disabled>
                      </div>
                    </div>
                                  <hr>';
                      } else {
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question1, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Format: '.stringToAsterisks($answer1).'">
                      </div>
                    </div><hr>';
                      }

                      ?>

                      <?php

                      if ($question2Answered == 'true'){
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question2, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Completed" readonly disabled>
                      </div>
                      </div>
                                  <hr>';
                      } else {
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question2, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Format: '.stringToAsterisks($answer2).'">
                      </div>
                      </div><hr>';
                      }

                      ?>

                      <?php

                      if ($question3Answered == 'true'){
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question3, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Completed" readonly disabled>
                      </div>
                      </div>
                                  <hr>';
                      } else {
                      echo '<div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">'.htmlspecialchars($question3, ENT_QUOTES, 'UTF-8').'</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="" placeholder="Format: '.stringToAsterisks($answer3).'">
                      </div>
                      </div><hr>';
                      }

                      ?>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary"><br><hr>
                              <input type="button" class="btn btn-primary px-4" style="width: 100%; color: white; background-color: black; border: white;" value="Submit">
                      </div>
                                    
                    
                        
                        </div>
                      </div>
                    </div>
    
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      
      
        
      
        <section class="pt-0">
        
            </div>
          </div>
        </section>
         <!-- Page Footer-->
         <!-- BACKGROUND MUSIC -->
        <audio src="/music/audio-ctf-box.mp3" autoplay loop></audio>
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
          <div class="container-fluid text-center">
            <p class="mb-0 text-dash-gray">2022 &copy;  <a href="https://parrot-pentest.com">Parrot CTFS/Parrot Pentest, LLC</a>  All rights reserved.</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }

      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      var graphData = {
  type: "radar",
  data: {
    labels: [
      "Web Exploitation",
      "SQLi Injection",
      "Bruteforcing",
      "Network Exploitation",
      "Account Cracking",
      "Network Sniffing",
      "Man in the Middle"
    ],

    datasets: [
      {
        label: "Your Performance",
        fill: true,
        lineTension: 0,
        backgroundColor: "rgba(75,192,192,0.3)",
        borderColor: "rgba(75,192,192,1)",
        borderCapStyle: "butt",
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: "miter",
        pointBorderColor: "rgba(75,192,192,1)",
        pointBackgroundColor: "rgba(75,192,192,0.5)",
        pointBorderWidth: 2,
        pointHoverRadius: 8,
        pointHoverBackgroundColor: "rgba(75,192,192,1)",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 10,
        data: [38, 45,49, 20, 30, 48, 50],
        spanGaps: false
      },
 
    ]
  },
  options: {
    scale: {
      ticks: {
        min: 0, // suggestedMin: 0,
        max: 50, //suggestedMax: 50
        stepSize: 10
      }
    },
    animation: {
      duration: 2000,
      easing: "easeOutElastic"
    },
    responsive: true
  }
}


function tweakLib(){
  C2S.prototype.getContext = function (contextId) {
    if (contextId=="2d" || contextId=="2D") {
        return this;
    }
    return null;
  }

  C2S.prototype.style = function () {
      return this.__canvas.style
  }

  C2S.prototype.getAttribute = function (name) {
      return this[name];
  }

  C2S.prototype.addEventListener =  function(type, listener, eventListenerOptions) {  
    console.log("canvas2svg.addEventListener() not implemented.")
  }
}


var context = document.getElementById("radarCanvas").getContext("2d");


var radarChart = new Chart(context, graphData); // Works fine

// tweak the lib according to sspecht @ https://stackoverflow.com/questions/45563420/exporting-chart-js-charts-to-svg-using-canvas2svg-js
tweakLib();
// deactivate responsiveness and animation
graphData.options.responsive = false;
graphData.options.animation = false;

// canvas2svg 'mock' context
var svgContext = C2S(500,500);


// new chart on 'mock' context fails:
var mySvg = new Chart(svgContext, graphData);
// Failed to create chart: can't acquire context from the given item

console.log(svgContext.getSerializedSvg(true));

    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
