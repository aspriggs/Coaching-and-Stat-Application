<?php
//Connect to database
require_once("coachDB.php");

//Query accessing all data storing stats into array

$playerInfo = $coachDB->query("SELECT * FROM Player");

//Concatination of database information into json format
$json = "";
//Loop displaying all queried data
foreach($playerInfo as $player){
    if ($json != "") {$json .= ",";}
    $json .= '{"PlayerID":"'  . $player["PlayerID"] . '",';
    $json .= '"Name":"'   . $player["Name"]        . '",';
	$json .= '"Number":"'. $player["Numbers"]     . '"}'; 
}
//Specifies json title
$json ='{"players":['.$json.']}';

//Disconnect from database
$coachDB->close();

//Display json data
echo($json);
?>

