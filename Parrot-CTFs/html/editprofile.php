<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="css/ad-dashboard.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/profile.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="https://parrot-ctfs.com/favicon.ico" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Dashboard | Parrot CTFs </title>
   </head>
   <div class="menu">
      <div class="logo">PROFILE</div>
      <div class="dropdown" style="float:right;">
         <button class="dropbtn"><i style='color: white;font-size: 150%;'; class="fa fa-bars"></i></button>
         <div class="dropdown-content">
            <a href="/">Home</a>
            <a href="#">Profile</a>
            <a href="/dashboard/">Dashboard</a>
            <a href="/ad/">AD Labs</a>
            <a href="#">Sign Out</a>
         </div>
      </div>
   </div>
   </div>
   <hr>
   <center>
      <div style='float: left; margin-left: 10%; margin-top: 2.5%;' class = 'main-profile'>
         <div class = 'profile-pic'>
            <img class='profile-pic' style='border-radius: 3%;width:50%;height:50%;' src='https://i.imgur.com/sd0Gfgc.png' alt='profile-pic' ><br>
         </div>
         <br>
         <div class = 'profile-info'>
            <h3 style='text-align: center;'>bob | FREE</h3>
            <br>
            <h6 style='color: green;'>ONLINE</h6>
            <form action = "/api/updateprofile.php" method="POST">
               <hr style='background-color: white;width: 15%;'>
               <div class = 'inputs'>
                  <br>
                  <input style='width: 300px;height: 35px;border-radius:5%;' type = 'text' placeholder = ' Username (example123)'><br><br>
                  <input style='width: 300px;height: 35px;border-radius:5%;' type = 'text' placeholder = ' Email (example@domain.com)'><br><br>
                  <input style='width: 300px;height: 35px;border-radius:5%;' type = 'text' placeholder = ' Country (USA)'>
               </div>
               <br>
               <hr style='background-color: white;width: 15%;'>
               <br>
               <input type = "submit" class = 'btn btn-primary' value="Save Changes"></input>&nbsp;&nbsp;&nbsp;&nbsp;<input style='background-color: red;' type = "submit" class = 'btn btn-primary' value="Cancel"></input>
         </div>
         </form>
      </div>
      </div>
      </div>
         <div style='margin-left: -10%;z-index: 9999;' class="vl"></div>
      <div style='z-index: 999;margin-top: -800px;' class="boxes-section">
         <div class="box">
            <h2 style='color: black;margin-top: -5%;' class="d-flex align-items-center mb-3">Downsides of Downgrading</h2>
            <ul style = 'text-align: left;' class="list-group list-group-flush">
               <li style="margin-left: 10%">Losing Access to PRO Boxes</li>
               <li style="margin-left: 10%">Slower Speeds</li>
               <li style="margin-left: 10%">Losing Profile Badge</li>
               <li style="margin-left: 10%">Losing PWNBOX Access</li>
               <li style="margin-left: 10%">Losing Access to Better Boxes</li>
            </ul>
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; window.location = 'https://parrot-ctfs.com/downgrade.php';" style="background-color: red;width: 90%;margin-left: 5%" class="btn btn-primary btn-block mt-4" type="button" data-cf-modified-0beca06387b4810eaeab1d67-="">DOWNGRADE to FREE</button>
         </div>
         <br>
         <br>
         <div class="box">
            <h2 style='color: black;margin-top: -5%;' class="d-flex align-items-center mb-3"> Enroll in Other Programs</h2>
            <p style='color: black'> Coming Soon! </p>
            <ul style = 'text-align: left;' class="list-group list-group-flush">
               <li style="margin-left: 10%">Infosec and Friends</li>
               <li style="margin-left: 10%">AWS Cloud Hunt</li>
               <li style="margin-left: 10%">Become a Beta Tester</li>
            </ul>
            <button onclick="if (!window.__cfRLUnblockHandlers) return false; window.location = 'https://parrot-ctfs.com/enroll.php';" style="background-color: red;width: 90%;margin-left: 5%" class="btn btn-primary btn-block mt-4" type="button" data-cf-modified-0beca06387b4810eaeab1d67-="">Enroll Now!</button>
         </div>
      </div>
   </center>
   </body>
</html>

