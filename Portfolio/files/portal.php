<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MentorVitae</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media ="screen">
    <link rel="stylesheet" href="../style/style.css" />

    <!-- Fonts --> 
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'/>
    <link href= 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>

    <!-- JS --> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="../scripts/smoothscroll.js"></script>
      <script src="../scripts/loginValidation.js"></script>
      <script src="../scripts/loginValidation.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <script src="../boostrap/js/bootstrap.js" type="text/javascript"></script>

    <title>MentorVitae</title>
</head>
<body>
<!-- Mobile Nav --> 

 <div class = "navcontainer">
  <?php
  include("layout.php");
  createReturn($formUrls, $logoURL_other);
	?>
</div>

<!-- Primary Content --> 
  <div id="portal">


    <div class="portal-box-small">

    <!-- =======	The following part is for login and logout =======	-->
    <?php
      $post_username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $post_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            // If the session has been set, users can decide whether to log out
      if ( isset( $_SESSION[ 'logged_user' ] ) ) {
        $olduser = $_SESSION[ 'logged_user' ];
        // If logout button did not been clicked, it will show on the website, else unset session to log out
        if(!isset($_POST['logoutSubmit'])){
    ?>
    	<div class="logbox">
          <form  method="post"  action = "portal.php">
            <button class="button" type="submit" name = "logoutSubmit" id  = "logoutSubmit">Log Out</button>
          </form>
         </div>
    <?php
        }else{
          unset( $_SESSION[ 'logged_user' ] );
          echo "<script language=\"javaScript\">alert(\"Successfully logged out!\");</script>";
          //after each commit the website will refresh
          echo "<script language=\"javascript\">location.href='portal.php';</script>";
        }

      }else{
        //if the session has not start, judge whether login button is clicked
        if ( !isset($_POST['loginSubmit'])) {
          //$newpassword = password_hash( 'startuptree', PASSWORD_DEFAULT);
          //print("<h3>postpassword: startuptree, hashedpassword: $newpassword</h3>");
          //postpassword: administer, postedpassword: startuptree, hashedpassword: $2y$10$sIUfBRML9k3Mb2eqzpYPhuzdZPo2ASD/84PIUqfeDQ/Lc87nbhGnW

    ?>
    <h2 class="login">Login</h2>
    	<div class="logbox">

	    	<div class="loginform">

	          <form method="post"  action = "portal.php" onsubmit= "return loginValidation()">
	            <p>
	            <span class="glyphicon glyphicon-user" aria-hidden="true"></span></p> 
	            <input type= "text" name= "username" class="inputsearch" maxlength="255" placeholder="Username" required autofocus><br> 
	            <p><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></p> <input type="password" name= "password" class="inputsearch" placeholder="Password" required > <br><br><br>
	            <button class="logbutton" type="submit" name = "loginSubmit" id = "loginSubmit">Login</button>
	          </form>
	          </div>
         </div>

    <?php }else{
          require_once 'config.php';
          $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
          $result = $mysqli->query("SELECT * FROM Login WHERE Username = \"$post_username\"");
          if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $password = $row[ 'Password' ];
            if(password_verify( $post_password, $password )){
              $_SESSION['logged_user'] = $post_username;

              echo "<script language=\"javaScript\">alert(\"Successful login!\");</script>";
              echo "<script language=\"javascript\">location.href='portal.php';</script>";
            }else{
              echo "<script language=\"javaScript\">alert(\"Password is wrong, please input again!\");</script>";
              echo "<script language=\"javascript\">location.href='portal.php';</script>";
            }
          }else{
            echo "<script language=\"javaScript\">alert(\"Username is not found, please input again!\");</script>";
            echo "<script language=\"javascript\">location.href='portal.php';</script>";

          }
        }
      }
    ?>
	</div>
	



	  <?php
		if ( isset( $_SESSION[ 'logged_user' ] ) ) {
	   ?>
			<a name="contact" id="customers">
			<div class="content-box">
			  <h1>Contact Information</h1>

			  <form action="portal.php" method="post">
				<label>Sort by:  </label>
  				<input type="checkbox" name="sort[]" value="Name"> Name
				<input type="checkbox" name="sort[]" value="Email"> Email
  				<input type="checkbox" name="sort[]" value="Company"> Company
				<input type="checkbox" name="sort[]" value="Title"> Title
				<input type="checkbox" name="sort[]" value="DateSubmitted"> DateSubmitted
				<input type="checkbox" name="sort[]" value="ReadStatus"> ReadStatus
  				<br>
  				<button class="button" type="submit" name="sortSubmit" id = "sortSubmit">Sort</button>
			  </form>

			  <?php
				$order = "";
				//connect to the database
				require_once 'config.php';
				$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				// set ReadStatus of all of the contact choosen to 1
				if(isset($_POST['viewSubmit']) && !empty($_POST['view'])){
					foreach ($_POST['view'] as $view) {
						$contactID = $view;
						$result0 = $mysqli->query("UPDATE Contact SET ReadStatus = 1 WHERE ContactID = $contactID");
					}
				}

				// Qyery the database according to the checkbox values
				if(isset($_POST['sortSubmit']) && !empty($_POST['sort'])){
					foreach ($_POST['sort'] as $sort) {
						if($order == ""){
							$order = $sort;
						}else{
							$order .= ", ".$sort;
						}
					}
					#echo "$order";
					$result = $mysqli->query("SELECT * FROM Contact order by $order");
				}else{
					$result = $mysqli->query("SELECT * FROM Contact");
				}


			    // Here is a table to display all of the contact info
			    print("<form action=\"portal.php\" method=\"post\">");
				print( "<table class = 'survey-results'>");
				print("<tr><th>Name</th><th>Email</th><th>Company</th><th>Title</th><th>Discovery</th><th>Date Submitted</th><th>Read?</th><th>Mark as Read</th></tr>");

				while($row = $result->fetch_assoc()) {
					$contactID = $row['ContactID'];

			    	$name = $row['Name'];
					$email = $row['Email'];
					$company = $row['Company'];
					$title = $row['Title'];
					$discovery = $row['Discovery'];
					$date = $row['DateSubmitted'];
					$readStatusInt = $row['ReadStatus'];
					$readStatus = '';
					$class = "unread";

					if($readStatusInt == 0){
						$readStatus = "No";
					}else{
						$readStatus = "Yes";
						$class = "read";
					}

					print("<tr class = $class><td>$name</td><td>$email</td><td>$company</td><td>$title</td><td>$discovery</td><td>$date</td><td>$readStatus</td><td><input type=\"checkbox\" name=\"view[]\" value = $contactID></td></tr>");
				}
				print( "</table>");
				print("<br><button class=\"button\" type=\"submit\" name=\"viewSubmit\" id = \"viewSubmit\">Update</button>");
				print("</from>");

			  ?>
			</div>
			</a>

			<a name= "survey" id="survey">
			<div class="content-box">
			  <h1>Survey Results</h1>

			  <?php
				//connect to the database
				require_once 'config.php';
				$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				$result1 = $mysqli->query("SELECT * FROM Survey");

			    //Here is the table to display survey questions and answers. Only questions that is answered will appear
				print( "<table class = 'survey-results'>");
				print("<tr><th>Question</th><th>Answers</th></tr>");

			    //get the question and answers from Survey table and Answer table
				while($row1 = $result1->fetch_assoc()) {
					$surveyID = $row1['SurveyID'];
					$question = $row1['Question'];
					$result2 = $mysqli->query("SELECT * FROM Answers where SurveyID = $surveyID AND Answer != ' '");
					$row_count = $result2->num_rows;

					//only display questions with answer
					if($row_count != 0){
						print("<tr><td>$question</td>");
						print("<td>");
						while($row2 = $result2->fetch_assoc()){
							$answer = $row2['Answer'];
							print("$answer<br>");
						}
						print("</td></tr>");
					}
				}
				print("</table>");
			  ?>
			</div>
			</a>

			<a name = "questions" id="questions">
			<div class = "content-box" id = "addQuesion">
			  <h1>Add Questions</h1>

			  <form action = "portal.php" method = "post" onsubmit = "return questionValidation()">
				  <h3>Add a new question here!</h3>
				  <input type = "text" name = "question" id = "question">
				  <a herf = "#addQuesion"><input type = "submit" name = "addSubmit" value = "Add">  </a>
			  </form>

			  <?php
				$question = filter_input(INPUT_POST, 'question', FILTER_SANITIZE_STRING);
				if (isset($_POST['addSubmit']) ) {

					if($question != ""){
	 					require_once 'config.php';
	 					$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 						$result = $mysqli->query("INSERT INTO Survey (Question) VALUES (\"$question\")");
 						if($result){
							echo "<script language=\"javaScript\">alert(\"Your question has been successfully added!\");</script>";
							echo "<script language=\"javascript\"> window.location.href='portal.php';</script>";
 						}
					}

				}

			 ?>

			</div>
			</a>


	  <?php
		}
		$curURL = '';
       createFooter($curURL);
    ?>

  </div>

</body>

</html>
