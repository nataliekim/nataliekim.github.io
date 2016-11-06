<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style/style.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
  <script src="scripts/loginValidation.js"></script>
    <title>MentorVitae</title>
</head>
<body>
<?php
  include("files/layout.php");
  createNav($mainUrls, $logoURL_index);
?>
  <div class="content">
    <div class="content-box-image">
      <p>Bring the power of mentorship to your organization.</p>
    </div>

<div class="content-box-small">
    <p>Solving the major main points and inefficiencies of mentorship, your alumni and others will love using
this software to stay engaged and give back to your community. StartupTree Mentorship provides you with measurable
results from your existing mentorship network or alternately, makes it easy for you to get a mentorship program off
the ground leveraging best practices. No longer will you have to guess whether or not the mentor introduction resulted
in a meaningful interaction. Our software allows you to invite qualified mentors to your network, gain oversight into
approving mentor requests, tools for mentors/mentees to scheduled meetings, and more. Did we already mention we provide
you with data insights on all of the above? It’s an all-in-one solution to effectively grow your mentors network. And yes,
we have a native mobile application for the entire Mentorship experience.</p>

</div>

    <div id= "features">
    <div class="content-box">
      <h1>Features</h1>
      
<ul class = "features">
  <li>Unlimited Mentor Seats</li>
  <li>Mentor Session Management</li>
  <li>Mentor Invitation</li>
  <li>Native Mobile Application</li>
  <li>Mentor Matchmaking<li>
  <li>Oversight</li>
  <li>Email and Push Notifications</li>
  <li>Meeting Scheduling with Calendar Integration</li>
  <li>Session Cancellation</li>
  <li>Insight</li>
  <li>Mentor Notes and Sharing</li>
  <li>Preferred Contact Method Preferences</li>
</ul>

    </div>
    </div>

    <a id= "pricing">
    <div class="content-box-small">
      <h1>Pricing</h1>
      <table class = "price"><tr><td><s>$599</s></td><td>$499</td></tr>
      </table>
      <h4>Contact us for the pricing solution that's best for your program.</h4>
    </div>
    </a>

    <a id= "examples">
    <div class="content-box">
      <h1>Examples</h1>
      <h4>Here is a peek at our interface. Request a demo today to see our software in action.</h4>
      <p>
      <img class="example" src = "assets/screenshot_1.png" alt="screenshot 1">
      <img class="example" src = "assets/screenshot_2.png" alt="screenshot 2">
      <img class="example" src = "assets/screenshot_3.png" alt="screenshot 3">
      </p>
    </div>
    </a>

    
    <div class="content-box">
      <a id= "demo">
      <h1>Demo</h1>
</a><p>Request a demo today to learn more about how we can bring the power of mentorship to your organization. </p>
    <form action = "files/contactform.php"><input type="submit" value="Request a Demo" class="button"></form>
    </div>
    


  <?php
    $curURL = 'files/';
      createFooter($curURL);
    ?>


  </div>

</body>


