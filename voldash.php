<?php   
error_reporting(0);
		session_start();

 if(!isset($_SESSION['loginEmail']))
  {
      header('Location: logout_error.php');
      exit();
  }
include('db_connection.php');
include('volunteer_ticket_process.php');
include('volunteer_ticket_process2.php');
?>
<html>

<head>
  <title>Volunteer Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class = "navbar navbar-default">
  	<div class = "container-fluid">
  		<div class = "collapse navbar-collapse">
        <ul class = "nav navbar-nav">
         <li style="float:right"><a href="signedout.php">Logout</a></li>
         <li style="float:right"><a href="index_volunteer.php">Home</a></li>
       </ul>
     </div>
   </div>
 </nav>
</head>

<body>
  <center>
    <img src="./images/georgia-tech-logos.png" alt="Georgia Tech Logo" class="logo img-responsive">
    <br>
	  	  <ul>
  <li><a><strong>Welcome <?php echo $_SESSION['loginEmail']; ?>!</strong></a></li>
</ul>
	  <br>
    <hr>
    <table class="width table borderless">
      <th class="ccol"><a href="">Click here to view current student housing and pickup requests.</a></th>
    </table>

    <hr/>

    <table class="width table borderless">
      <th class="ccol" colspan=2>Your registered student pickup availability:</th>
      <tr>
        <td class="ccol" colspan=2>You are not registerd for any times</td>
      </tr>
    </table>

    <form action="volunteer_ticket_process.php" method="post">
      <table class="width table borderless">
        <th class="ccol" colspan=2>Register a new student pickup availability:</th>
        <tr>
          <td class="lcol">Available date: </td>
          <td><input type="date" name="volPickupDate"></td>
        </tr>
        <tr>
          <td class="lcol">How many students can your vehicle carry? </td>
          <td><input type="number" min=1 name="passengers"></td>
        </tr>
        <tr>
          <td class="lcol">How many round trips will you make? </td>
          <td><input type="number" min=1 name="roundTrips"></td>
        </tr>
        <tr>
          <td class="lcol">Comments: </td>
          <td><textarea rows="4" cols="40" name="comments"></textarea></td>
        </tr>
        <tr>
          <td class="ccol" colspan=2><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>

    <hr/>

    <table class="width table borderless">
      <th class="ccol" colspan=2>Your registered temporary housing availability:</th>
      <tr>
        <td class="ccol" colspan=2>You are not registerd for any dates</td>
      </tr>
    </table>

    <form action="volunteer_ticket_process2.php" method="post">
      <table class="width table borderless">
        <th class="ccol" colspan=2>Register a new temporary housing availability:</th>
        <tr>
          <td class="lcol">Begining available date: </td>
          <td><input type="date" name="volStartHousingDate"></td>
        </tr>
        <tr>
          <td class="lcol">Ending available date: </td>
          <td><input type="date" name="volEndHousingDate"></td>
        </tr>
        <tr>
          <td class="lcol">How many students can you accommodate? </td>
          <td><input type="number" min=1 name="studentsHoused" value=1></td>
        </tr>
        <tr>
          <td class="lcol">Comments: </td>
          <td><textarea rows="4" cols="40" name="comments"></textarea></td>
        </tr>
        <tr>
          <td class="ccol" colspan=2><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>

    <hr/>

    <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>
	</center>
  </body>
  </html>

  <tr>
    <td class="lcol"></td>
    <td></td>
  </tr>
