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
      <h1 class="bottom_under_img_header">BOX CREATOR TOS </h1>
      <br>
      <h1 class="main2" style="color: yellow; text-decoration: underline red; font-size: 20px;"> IMPORTANT! Please Read This Carefully </h1>
      <br>
      <p> This is a Binding Agreement between Parrot CTFs and the Users of the platform <br>
         By submitting a box YOU AGREE TO THESE TERMS AND CONDITIONS. In case of <br>
         disagreement with the terms and conditions of use, the User must not submit a box. <br>
      </p>
      <br>
      <div class="submiting">
         <h4 class="main2">Machine Requirments</h4>
         <br>
         <p>- Make sure your exported machine is in VMDK, OVF, OVA, or QCOW2 formated <br>
            <br>
            - Make sure the VM size is less than 10GB all together makes for easier tranfer <br>
            <br>
            - The OS does not matter we accept both unix and windows based machines <br>
            <br>
            - Must have a full writeup ready to pass along to the parrot CTFs representative <br>
            <br>
         </p>
      </div>
      <div class="rights">
         <h4 class="main2">Box rights and disclaimers</h4>
         <br>
         <p> As soon as you submit the box and we accecpt it you no longer have the rights to that box and it  cannot leave <br> Parrot-CTFs platform 
            if it is found on other platforms we will go after them and the submiter and they will be banned <br> from submiting anymore boxes. the box 
            creator is credited for making the box on the platform in the box menu <br> but has no claim on the box or rights to it after submision.
      </div>
      <br>
      <h4 class="main2"> Single boxes and Series boxes</h4>
      <br>
      <p> For all series boxes they must be hosted either on parrot ctfs or somewhere else entirely the mix match of <br> boxes will not be accepted to avoid intellectual property
         and copy right issues issues amoung <br> the varied CTF platforms. 
         <br><br>
         For all single boxes they can only be hosted here and cannot be hosted on other platforms side by side this <br> platform.
         this is also to avoid avoid intellectual property and copy right issues issues. your box will <br> not be accepted if they are 
         on another platform.
         <br><br>
      <h4 class="main2">Difficulty and Category </h4>
      <br>
      <p> Dificulty is decided by the collection of the Parrot-CTFs team and the submitter based on a variety of things <br><br>
         Some examples are: <br>
         - How many vulnerable servives are there <br>
         - How many users are on the system <br>
         - How old the system is <br>
         <br>
         Category is decided based of what the biggest vulnerabilty is on the system and what it is based off of by the <br> Parrot-CTFs team. 
         <br><br>
      <h4 class="main2">Monetary Rewards </h4>
      <br>
      <p> Parrot-CTFs does not offer monetary rewards for making, completing, or joining boxes/competitions on Parrot-CTFs<br> as a platform.
         If you see someone trying to offer monetary rewards for anything that does not come directly <br> from parrot-ctfs report it to support@parrot-ctfs.com 
         and treat it as a scam. We will not be held responsible<br> for loss of money or otherwise. Gambling, bribing, and paying people to play our machines before
         during or after is <br> strictly prohibited. NO MATTER THE REASON FOR IT.
        
         <br>
         <br>
      <h4 class="main2">Box Creator</h4>
          <br>
          <p> We offer our own platform for box creation and submision there is no need to have your own resources you can use <br> our own infrastructure to create boxes for us
          <a href="https://creator.parrot-ctfs.com"> Box Creator </a> </p> 
           <br>
         <br>
          <br>
         <br>
   </body>
    

       


    <!-- 
      all my end stuff here 
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