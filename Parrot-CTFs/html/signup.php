<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Parrot CTFs | Sign Up</title>
      <meta name="description" content="Parrot CTFs - A CTF platform for all fields of IT - Signup">
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
                  <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer">
                     <span>Close </span>
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
               <div class="navbar-header d-flex align-items-center">
                  <a class="navbar-brand text-uppercase text-reset" href="index.php">
                     <div class="brand-text brand-big"><img src="img/parrot-ctf-removebg-preview.png" height="62.5"></div>
                  </a>
               </div>
               <ul class="list-inline mb-0">
                  </li>
                  </li>
                  <li class="list-inline-item merch px-lg-2">
                     <a class="nav-link text-sm text-reset px-1 px-lg-0" href="https://shop.parrot-ctfs.com">
                        <span class="d-none d-sm-inline-block">Merchandise</span>
                  <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="https://discord.parrot-ctfs.com"> <span class="d-none d-sm-inline-block">Join our Discord</span>
                                   <use xlink:href="#disable-1"> </use>
                  </svg></a></li>
                  <li class="list-inline-item logout px-lg-2">
                     <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="/login.php">
                        <span class="d-none d-sm-inline-block">Login</span>
                        <use xlink:href="#disable-1"> </use>
                        </svg>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <center>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-header">
               </div>
               <div class="card-body pt-0">
                  <img src="/img/parrot-ctf-removebg-preview.png" width="325px" style="margin-right: 10%;">
                  <form class="form-horizontal" method='post' action='/api/signup.php'>
                     <div class="row gy-2 mb-4">
                        <label class="col-sm-3 form-label" for="inputHorizontalElTwo">Username</label>
                        <div class="col-sm-5">
                           <input class="form-control" name='username' name='username' id="inputHorizontalElTwo" type="text" placeholder="Username">
                        </div>
                     </div>
                     <div class="row gy-2 mb-4">
                        <label class="col-sm-3 form-label" for="inputHorizontalElOne">Email</label>
                        <div class="col-sm-5">
                           <input class="form-control" name='email' name='email' id="inputHorizontalElOne" type="email" placeholder="Email Address">
                        </div>
                     </div>
                     <div class="row gy-2 mb-4">
                        <label class="col-sm-3 form-label" for="inputHorizontalElTwo">Password</label>
                        <div class="col-sm-5">
                           <input class="form-control" name='password' id="inputHorizontalElTwo" type="password" placeholder="Pasword">
                        </div>
                     </div>
                     <div class="row gy-2 mb-4">
                        <label class="col-sm-3 form-label" for="inputHorizontalElTwo">Confirm it</label>
                        <div class="col-sm-5">
                           <input class="form-control" name = 'confirmpassword' id="inputHorizontalElTwo" type="password" placeholder="Confirm Password">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-9 ms-auto">
                           <input class="btn btn-primary" type="submit" value="Register" style="margin-right: 100%; ">
      </center>
      </div>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      <section class="pt-0">
         </div>
         </div>
      </section>
      <!-- Page Footer-->
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
         
         
         
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   </body>
</html>