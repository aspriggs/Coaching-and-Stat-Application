<?php
//Connect to database
require_once("coachDB.php");

//Add player to database from form
$addPlayer = $coachDB->query("INSERT INTO Player VALUE ('','".$_POST['Name']."','".$_POST['Number']."')");

//Close database connection
$coachDB->close();

//Prompt successfully add
echo ("Successfully added");

//Redirect to homepage
echo '<script type="text/javascript">
           window.location = "http://coach.perspectiveva.com/"
      </script>';
?>