<?php
//Connect to database
require_once("coachDB.php");

//Add game to database from form
//$addGame = $coachDB->query("INSERT INTO Game VALUE ('','".$_POST['Opponent']."','".$_POST['Date']."')");

$playerName = $_POST["Player"];

//Close database connection
$coachDB->close();

//Prompt successfully add
echo $playerName;

//Redirect to homepage
?>