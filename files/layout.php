<?php

  $mainUrls = array( 
  "Portfolio" => "#demo", 
  "About" => "#about_content", 
  "Home" => "#features",




  /*"Pricing" => "#pricing",*/
  /*"Home" => "#",*/


    );




    function createNav ($urlList, $logoURL) {



           echo '
              <nav class="navbar navbar-default navbar-static-top">
              ';
          

          echo' 
          <div class="navbar-header">';
          echo '

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>
            
            <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">';

            echo "<div class='nav-container'>
            <ul>";

            foreach($urlList as $pageName => $pageUrl) {
              if ($pageName == "Home"){
                    echo "<li><a href='$pageUrl'>$pageName</a></li>";
                } else{
                    echo "<li><a class='scroll'>$pageName</a></li>";
               }
            };

            echo' </div></ul><div class="sidebox-nav"></div>
            </nav>';


    };



		function createFooter ($curURL) {
			$portalURL = $curURL."portal.php";
			echo "<div class = 'foot'>";
			echo "
			<a href='https://startuptree.co/'>StartupTree</a> |
			<a href=$portalURL>Admin Portal</a>";
			echo "</div>";

    $html = '
      <div class="contactinfo">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-6">
              <p class="ContactPHeader">Connect With Us</p>
              <p class="email"><a href="mailto:contact@MentorVitae.com?Subject=Hello%20again" target="_top">contact@MentorVitae.com</a></p>
              <p class="ContactP">
              <a href="mailto:sales@MentorVitae.com?Subject=Hello%20again" target="_top">Sales: sales@MentorVitae.com</a> 
              <br><a href="mailto:support@MentorVitae.com?Subject=Hello%20again" target="_top">Support: support@MentorVitae.com</a>
              </p>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6">
              <p class="ContactPHeader">Our Locations</p>
              <p class="ContactP">
              <u>Ithaca</u>
              <br>403 College Avenue, First Floor,
              <br>Ithaca, NY 14850
              <br>
              <br><u>Boston</u>
              <br>45 Prospect St,
              <br>Cambridge, MA 02139
              </p>
            </div>
          </div>
        </div
        <p class="copyright">© MentorVitae 2016</p> 
      </div>
    ';

    echo "$html";

		}





?>
