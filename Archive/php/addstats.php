<?php
//Connect to database
require_once("coachDB.php");

//If date does not match opponent then try again

//Store posted data
$selectedPlayer = $_POST["Player"];
$selectedPlayerID = $_POST["PlayerID"];
$selectedGame = $_POST["Game"];
$selectedDate = $_POST["Date"];
$selectedGameID = $_POST["GameID"];
$ab = $_POST["AB"];
$k = $_POST["K"];
$go = $_POST["GO"];
$h = $_POST["H"];
$double = $_POST["Double"];
$hr = $_POST["HR"];
$rbi = $_POST["RBI"];
$r = $_POST["R"];

//Add stats to database from form
$addStats = $coachDB->query("INSERT INTO Stats VALUES (
	'".$selectedPlayerID."',
	'".$selectedGameID."',
	'',
	'".$ab."',
	'".$k."',
	'".$go."',
	'".$h."',
	'',
	'".$double."',
	'".$hr."',
	'".$rbi."',
	'".$r."'
	)");

//Close database connection
$coachDB->close();

//Prompt successfully add
echo "Successfully added.";

//Redirect to homepage
echo '<script type="text/javascript">
           window.location = "http://coach.perspectiveva.com/"
      </script>';
?>