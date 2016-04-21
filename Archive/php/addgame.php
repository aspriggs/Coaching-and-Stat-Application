<?php
//Connect to database
require_once("coachDB.php");

//Add game to database from form
$addGame = $coachDB->query("INSERT INTO Game VALUE ('','".$_POST['Opponent']."','".$_POST['Date']."')");

//Close database connection
$coachDB->close();

//Prompt successfully add
echo ("Successfully added");

//Redirect to homepage
echo '<script type="text/javascript">
           window.location = "http://coach.perspectiveva.com/"
      </script>';
?>