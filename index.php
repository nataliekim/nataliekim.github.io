<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Natalie</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media ="screen">
    <link rel="stylesheet" href="style/style.css" />
    <!-- Lokesh Dhakar | http://lokeshdhakar.com -->
    <link rel="stylesheet" href="lightbox/dist/css/lightbox.min.css">

    <!-- Fonts --> 
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'/>
    <link href= 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <!-- JS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>-->
</head>

<body>

<div class="loader">
<button class="button"> Welcome </button>
</div>

<!-- Mobile Navigation -->

 <!-- <?php

?>-->

<div class="nav_container">
  <div class= "nav_block">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">  
            <li><a class="contact_nav scroll" href="#contact">Contact</a></li>  
            <li><a class="work_nav scroll" href="#workcontent">Portfolio</a></li>
            <li><a class="about_nav scroll" href="#about">About</a></li>
            <li><a class="home_nav scroll" href="#home">Home</a></li>
        </ul>
    </nav>
  </div>
</div>

<!-- End Navigation --> 
<!-- Home Content -->
<div class="home_page">
  <div id="home" class="homecontent">
     <div class="name_box">

      <div class="container">
        <div class="row">
          <h1>Natalie
          <br>
          Kim</h1>
         <!-- <p class="p_header">a front-end developer and UI/UX designer studying at Cornell University.</p>-->         
        </div>
      </div>

    </div>
  </div>

  <!-- ABOUT SECTION --> 
  <div id="about" class="about_content">

  <div class="row">
      <div class="col-md-6" style="background: white; min-height: 450px;">
        <h4>About</h4>
        <div id="border" style="width:10%;"></div>
        <p class="p_header">I am currently a Senior at Cornell University studying Economics & Information Science. Upon graduation, I hope to attain a Master of Professional Studies in <b>Information Science.</b>
        </p>

      </div>
      <div class="col-md-6" style="background: whitesmoke; min-height:350px;">
        <p class="about_p">I am a
          <br><b>front-end engineer</b>,
          <br>but I'm also interested
          <br>in <b>UI/UX design</b> & <b>product management</b>
          <br>
          <button class="button" value="Open Work Order" onClick="window.open('../assets/ResumePic.pdf');">resume</button>
        </p>
      </div>
  </div>
  </div>

  <!-- END ABOUT --> 

  <!-- Portfolio SECTION --> 
  <div class="workcontent" id= "portfolio">
   <div class="name_box">
    <div class="row">
    <h6>Portfolio</h6>
      <div class="col-sm-1 work" style="margin-left: 95px;">
        <a><h3 id="work">Work</h3></a>
      </div>
      <div class="col-sm-1 personal">
        <a><h3 id="personal">Personal</h3></a>
      </div>
      <div class="col-sm-1 current">
        <a><h3 id="current">Current</h3></a>
      </div>
    </div>
    <!-- Work Content --> 
    <div id ="work_content" class="container">
      <div class="row">

<!-- Mentor Vitae --> 
        <div class="col-sm-3">
          <div id ="card1" class="cards">  
            <a href="../assets/MV1.png" data-lightbox="mv">
              <img class="card_img" src="../assets/MV1.png" alt="mv1">
            </a>
            <a class="card_img" href="../assets/MVAfter1.png" alt="after1" data-title="After my redesign" data-lightbox="mv"></a>
            <a class="card_img" href="../assets/MVAfter2.png" alt="after2" data-title="After my redesign" data-lightbox="mv"></a>
            <a class="card_img" href="../assets/MVBefore1.png" alt="before1" data-title="Before my redesign" data-lightbox="mv"></a>
            <a class="card_img" href="../assets/MVBefore2.png" alt="before2" data-title="Before my redesign" data-lightbox="mv"></a>
            <a class="card_img" href="../assets/MV3.png" alt="mv2"  data-lightbox="mv"></a>

            <div class="card_info">
              <h2>MentorVitae Redesign</h2>
              <div id="border"></div>
              <p class="card_text">Rebuilt layout of <a href="#" onclick='window.open("http://mentorvitae.com");return false;'>mentorvitae.com</a> and made the site mobile-responsive.</a></p>
            </div>

          </div>
        </div>
<!-- StartupTree --> 
        <div class="col-sm-3">
          <div id ="card2" class="cards">
            <a href="../assets/InviteMentors.png" data-lightbox="Manage">
              <img class="card_img" src="../assets/InviteMentors.png" alt="MM1">
            </a>
            <a class="card_img" href="../assets/RecommendMentors.png" alt="MM2" data-title="After my redesign" data-lightbox="Manage"></a>
            <a class="card_img" href="../assets/ViewMentors.png" alt="MM3" data-title="After my redesign" data-lightbox="Manage"></a>  
            <div class="card_info">
              <h2>StartupTree Mentors Redesign</h2>
              <div id="border"></div>
              <p class="card_text">Rebuilt the entire Manage Mentors page to allow admin to recommend mentors for users and be able to view mentors on the site. </p>
            </div>
          </div>          
        </div>

        <div class="col-sm-3">
          <div id="card3" class="cards">
            <a href="../assets/MentorMetrics.png" data-lightbox="Misc">
              <img class="card_img" src="../assets/MentorMetrics.png" alt="Metrics" data-title="Metrics Page">
            </a>
            <a href="../assets/MessageBox.png" class="card_img" alt="Message" data-lightbox="Misc" data-title="Message Box"></a>
            <div class="card_info">
              <h2>Misc Projects</h2>
              <div id="border"></div>
              <p class="card_text">Created the Mentor Metrics page from scratch with collaboration from the backend team, and also built the message box for the full site. </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div id ="card4" class="cards">
            <a href="../assets/OldDash.png" data-lightbox="Dashboard" data-title= "After my redesign">
              <img class="card_img" src="../assets/OldDash.png" alt="Dash1">
            </a>
            <a class="card_img" href="../assets/OldDashboard.png" alt="Dash2" data-title="Before my redesign" data-lightbox="Dashboard"></a>
            <div class="card_info">
              <h2>Dashboard Redesign</h2>
              <div id="border"></div>
              <p class="card_text">Redesigned both the mentor and mentee dashboards. </p>
            </div>
          </div>
        </div>

      </div>
    </div>
<!-- Personal Content --> 
    <div id = "personal_content" class="container">
      <div class="row">

        <div class="col-sm-4">
          <div id ="cardp1" class="cards">  
           <a class="card_img" href="../assets/URO1.png" alt="URO1" data-lightbox="URO" data-title="Public View of Site">
              <img class="card_img" src="../assets/UROMain.png" alt="UROMain">     
            </a>
            <a class="card_img" href="../assets/URO2.png" alt="URO2" data-lightbox="URO" data-title="Admin View of Site"></a>
            <a class="card_img" href="../assets/URO3.png" alt="URO3" data-lightbox="URO" data-title="Login and Sign Up Functionalities"></a>

            <div class="card_info">
              <h2>URO Project</h2>
              <div id="border"></div>
              <p class="card_text">Built frontend interface on this site for local client (Ultimate Re-entry Opportunity) with the ability of adding news events to a newsfeed, login/signup, and adding ads using PHP.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div id ="cardp1" class="cards">  
            <a href="../assets/2300p3.png" data-lightbox="2300p3">
              <img class="card_img" src="../assets/2300p3.png" alt="2300">
            </a>

            <div class="card_info">
              <h2>Photo Album Project</h2>
              <div id="border"></div>
              <p class="card_text">Used PHP to develop backend/frontend for a site where users can login to upload photos, view albums, and search through galleries.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div id ="cardp2" class="cards">
            <a href="../assets/2300p2.png" data-lightbox="2300p2">
              <img class="card_img" src="../assets/2300p2.png" alt="2300">
            </a>
            <a class="card_img" href="../assets/2300p2_2.png" alt="2300p2_2" data-lightbox="2300p2"></a>
            <a class="card_img" href="../assets/2300p2_3.png" alt="2300p2_3" data-lightbox="2300p2"></a>
            <div class="card_info">
              <h2>Music Catalog Project</h2>
              <div id="border"></div>
              <p class="card_text">Used PHP to develop backend/frontend for a simple site where users can add songs to a directory, search within the directory, and view the list of songs. </p>
            </div>
          </div>          
        </div>

      </div>
    </div>
<!-- Current Content --> 
    <div id = "current_content" class="container">
      <div class="row" style="
    padding-left: 150px;"">
        <div class="col-sm-6">
          <div id ="card1" class="cards">  
            <a href="../assets/MV1.png" data-lightbox="no">
              <img class="card_img" src="../assets/MV1.png" alt="no1">
            </a>
            <a class="card_img" href="../assets/MV2.png" alt="no2" data-lightbox="no"></a>
            <a class="card_img" href="../assets/MV3.png" alt="no3" data-lightbox="no"></a>
            <div class="card_info">
              <h2>CURRENT STUFFn</h2>
              <div id="border"></div>
              <p class="card_text">Redesigned layout of mentorvitae.com</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div id ="card2" class="cards">
            <img class="card_img" src="../assets/homecover.jpg" alt="Card1">
            <div class="card_info">
              <h2>Card1</h2>
              <div id="border"></div>
              <p class="card_text">YO THIS I my card</p>
            </div>
          </div>          
        </div>

      </div>
    </div>
<!-- End Section --> 

    </div>
  </div>

<!-- PORTFOLIO END SECTION --> 

<div class= "contact_content" id ="contact">
  <h1>HI</h1>
</div>







</div>

  <script src="lightbox/dist/js/lightbox-plus-jquery.min.js">
  </script>
</body>
</html>