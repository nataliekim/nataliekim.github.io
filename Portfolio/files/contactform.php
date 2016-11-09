<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <title>MentorVitae - Request a Demo</title>
<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- Fonts --> 
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'/>
	<link href= 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>       
<!-- CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media ="screen">
    <link rel="stylesheet" href="../style/style.css" />
<!-- JS --> 
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  	<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>	
  	<script src="../scripts/demoValidation.js"></script>	
</head>

<body>


<!-- Mobile Navigation -->
    <div class = "navcontainer">
	  <?php
  		include("layout.php");
  		createReturn($formUrls, $logoURL_other);
		?>
  	</div>

<!-- Primary Content --> 

<div class="content">

	<div class="contact-content-box">
	<h2>Demo Request</h2>
		<div class="contactbox">
			<div class="contactform">
				<form method="post" action = "contactform.php" onsubmit=" return demoValidation()">
					<!--	Display the contact table		-->
					<table class="contact-form">
						<tr><td>Name:</td><td><input type="text" name = "name" id = "name" placeholder = "Name" required autofocus></td></tr>
						<tr><td>Email:</td><td><input type="text" name = "email" id = "email" placeholder = "Email" required></td></tr>
						<tr><td>Company:</td><td><input type="text" name = "company" id = "company" placeholder = "Company" required></td></tr>
						<tr><td>Title:</td><td><input type="text" name = "title" id = "title" placeholder = "Title" required></td></tr>
					<!--				<tr><td>Discovery:</td><td><input type="text" name = "discovery" id = "discovery" required></td></tr>-->
						<tr><td>Discovery:</td><td><input type="radio" name = "discovery" value = "Other University" required>Other University</td></tr>
						<tr><td></td><td><input type="radio" name = "discovery" value = "Web Search" required>Web Search</td></tr>
						<tr><td></td><td><input type="radio" name = "discovery" value = "Conference" required>Conference</td></tr>
						<tr><td></td><td><input type="radio" name = "discovery" value = "Newsletter" required>Newsletter</td></tr>
						<tr><td></td><td><input type="radio" name = "discovery" value = "Others" required>Others</td></tr>
						<tr><td><input type="checkbox" name="agreement" id="agreement" value = "check" required>I would like to send this information to MentorVitae.
						</td><td></td></tr>
						<tr><td><button class="button" type="submit" name="sendDemo" id = "sendDemo">Request</button></td><td></td></tr>
					</table>
				</form>
			</div>
		</div>

	<?php
		if(isset($_POST['sendDemo'])){
	        //if demo request button is clicked get all of the values first
			$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
			$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
			$discovery = $_POST['discovery'];

			// send a remind email to Startuptree
			$msg = 'A new customer info: 1.Name: '.$name.' 2.Email: '.$email.' 3.Company: '.$company.' 4.Title: '.$title.' 5.Discovery: '.$discovery;
            $to = "contact@mentorvitae.com";
            $subject = "Demo Request";
           	$status = mail($to, $subject, $msg);
            if($status){
				echo "<p>Your email has been sent successfully!</p>";
				//send a confirm email to customers
				$msg1 = 'This is a confirmation email from MentorVitae. We have received your email!';
				$to1 = $email;
				$subject1 = "Demo Request Confirm";
				mail($to1, $subject1, $msg1);
			}

			//insert the contact info into Contact form
			require_once 'config.php';
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$result = $mysqli->query("INSERT INTO Contact (Name, Email, Company, Title, Discovery, DateSubmitted, ReadStatus) VALUES (\"$name\", \"$email\", \"$company\", \"$title\", \"$discovery\", NOW(), 0)");

			//pop up a survey window
			//reference: http://www.nigraphic.com/blog/java-script/how-open-new-window-popup-center-screen
			echo "<script language=\"javascript\">
				window.location.href = '../index.php';
				var width = 600;
				var height = 400;
				var left = (screen.width - width) / 2;
				var top  = (screen.height - height) / 2;
				window.open('survey.php', 'Survey','toolbar = no, location = no, directories = no, status = no, menubar = no, scrollbars = no, resizable = no, copyhistory = no, width = '+width+', height = '+height+', top = '+top+', left = '+left);
			</script>";
		}
	?>


	</div>
		<?php
		  $curURL = '';
	      createFooter($curURL);
	    ?>
</div>

</body>
</html>
