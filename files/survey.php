<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../style/style.css" />
		<script src="../scripts/surveyValidation.js"></script>
		<title>MentorVitae - Survey</title>
	</head>
	<body>
		<div id = "container" >
			<p class="center"><form  method="post" action = "survey.php" onsubmit=" return surveyValidation()">

				<?php
					require_once 'config.php';
					$mysqli0 = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

					//get one questionID randomly
					$result0 = $mysqli0->query("SELECT SurveyID FROM Survey order by rand() limit 1");
					$row0 = $result0->fetch_assoc();
					$chooseSurveyID = $row0['SurveyID'];

					// if there is no survey question, display info,else choose one question to ask
					if($chooseSurveyID == ""){
						print("<h3>Thank you for requesting a demo! There are no survey questions at this time.</h3>");
					}else{
						if(!isset($_POST['submitSurvey'])){
				?>

							<h1>Thank you for requesting a demo!</h1>
							<h3>Please take a moment to help us improve your experience.</h3>
							<table class="survey-question">
								<?php
									// choose one question from databse for the user to answer
									require_once 'config.php';
									$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
									$result1 = $mysqli->query("SELECT * FROM Survey where SurveyID = \"$chooseSurveyID\"");
									$row1 = $result1->fetch_assoc();
									$question = $row1['Question'];
									//print($chooseSurveyID);
									print("<tr>");
									print("<td><p>$question</p></td>");
									print("<td><input type = \"text\" name = \"answer\" id = \"answer\"></td>");
									print("</tr>");

								?>
							</table>
							<br><br>
							<button class="button" type="submit" name="submitSurvey" id = "submitSurvey">Submit</button>
				</form>

			<?php
							//get the contactID from the Contact Table
						 	$result2 = $mysqli->query("SELECT MAX(ContactID) FROM Contact");
						 	$row2 = $result2->fetch_row();
						 	$contactID = $row2[0];
							$resultinsert = $mysqli->query("INSERT INTO Answers (ContactID, SurveyID, Answer) VALUES (\"$contactID\", \"$chooseSurveyID\", ' ')");

					}else{
						require_once 'config.php';
						$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
						//get the answer, surveyID and insert into answer table
						$answer = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_STRING);
						//get the answerID from the Answer Table
						 $result = $mysqli->query("SELECT MAX(AnswerID) FROM Answers");
						 $row = $result->fetch_row();
						 $answerID = $row[0];

						// insert the ContactID, SurveyID, Answer into answer table
						$resultUpdate = $mysqli->query("UPDATE Answers SET Answer = \"$answer\" where AnswerID = \"$answerID\"");

						if($resultUpdate){
							//echo "<script language=\"javascript\">alert('Your survey has been received. Thank you!');</script>";
							//echo "<script language=\"javascript\">location.href='../index.php';</script>";
							echo "<p class=\"center\">Your response has been recorded. Thank you!</p>";
						}
				}
			}
		?>

		</div>
	</body>


</html>
