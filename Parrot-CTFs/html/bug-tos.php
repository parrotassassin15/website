<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parrot CTFs | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- added in -->
    <link rel="stylesheet" href="css/style2-index.css">
    

    <!-- Choices.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
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
          <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="index.php">
              <div class="brand-text brand-big"><img src="img/parrot-ctf-removebg-preview.png" height="62.5"></div></a>
         
          </div>
          <ul class="list-inline mb-0">
      
             
          
            </li>
            </li>
            <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="/"> <span class="d-none d-sm-inline-block">Home</span>
            <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="/box-tos.php"> <span class="d-none d-sm-inline-block">Box ToS</span>
            
            <li class="list-inline-item merch px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" href="/bug-tos.php"> <span class="d-none d-sm-inline-block">Bounty ToS</span>
            
                <use xlink:href="#disable-1"> </use>
              </svg></a></li>
            <li class="list-inline-item logout px-lg-2">                 <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="/tos-rules.php"> <span class="d-none d-sm-inline-block">ToS/Rules</span>
                    
                      <use xlink:href="#disable-1"> </use>
                    </svg></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <center>

    <!-- 
      all my shit here 
    -->

    <body>
    <br>
    <div class="logo_img"> <img class="logo_img" src="/img/parrotpentest-logo.png" alt="logo" /> </div>
    <hr color="white">
      <br>
      <h1 class="bottom_under_img_header"> Private Bug Bounty Program </h1>
      <br>
      <h3 class="main2" style="color: yellow; text-decoration: underline red; font-size: 20px;"> IMPORTANT! Please Read This Carefully </h3>
      <center>
         <h2>
            Status: Not Operational 
         </h2>
      </center>
      <br>
      <br>
      <div class="policy">
         <h3 class="bug_header"> Policy: </h3>
         <br>
         <p> 
            Your username should have "testing" somewhere in it to ensure we know why you are there. At 
            <br> all points in testing you should bare in mind there are other users on the platform 
            while you are <br> testing and you should not interfier with their connections. 
      </div>
      </div>
      <div class="bounties">
         <br>
         <h3 class="bug_header"> Bounties: </h3>
         <br>
         <p> We are currently not offering rewards for findings but will in the future! 
         <p>
            <br>
      </div>
      <div class="program_rules">
         <h3 class="bug_header"> Program Rules: </h3>
         <p><br>
            Using Tools that will cause distruption in VPN connections, Box configurations and/or Website  <br>Traffic
            Are strictly prohibited.
      </div>
      <br>
      <div class="scope">
         <h3 class="bug_header"> Scope: </h3>
         <br>
         <table>
            <tr>
               <th> Scope </th>
               <th> Domain </th>
            </tr>
            <tr>
               <td> In Scope </td>
               <td> https://parrot-ctfs.com/ </td>
            </tr>
            <tr>
               <th> Scope </th>
               <th> Domain </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> https://*.parrot-ctfs.com/ </td>
            </tr>
            <tr>
               <th> Scope </th>
               <th> Domain </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> https://parrot-pentest.com/ </td>
            </tr>
         </table>
      </div>
      <br>
      <br>
      <div class="out_scope">
         <h3 class="bug_header"> Out of Scope Vulnerbilities: </h3>
         <br>
         <table>
            <tr>
               <th> Scope </th>
               <th> Vulnerablity </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> Self XSS</td>
            </tr>
            <tr>
               <th> Out of Scope </th>
               <th> Vulnerablity </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> Dos/DDoS </td>
            </tr>
            <tr>
               <th> Scope </th>
               <th> Vulnerablity</th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> Click Jacking </td>
            </tr>
            <tr>
               <th> Scope </th>
               <th> Vulnerablity </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> Social Engineering </td>
            </tr>
            <tr>
               <th> Scope </th>
               <th> Vulnerablity </th>
            </tr>
            <tr>
               <td> Out of Scope </td>
               <td> Physical Vulnerabilities </td>
            </tr>
         </table>
      </div>
      <br>
      <br>
      <div class="safety">
         <h3 class="bug_header"> Safe Harbor: </h3>
         <br> 
         <p> Any activities conducted within our policy will be considered authorized. and we will not initiate legal action against <br> you. If legal
            action is initiated by a third party against you in connection with activities conducted under <br> this policy, we will take steps to make it known 
            that your actions were conducted in compliance with this policy.<br> and please contact bugbounty@parrot-ctfs.com / bugbounty@parrot-pentest.com
            <br>
            <br>
            Thank you for helping keep parrot CTFs from risk of compromise! 
         </p>
      </div>
      <br>
      <br>
      <br>


       


    <!-- 
      all my end shit here 
    -->
      
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