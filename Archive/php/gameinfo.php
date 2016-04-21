<?php
//Connect to database
require_once("coachDB.php");

//Query accessing all data storing stats into array

$gameStats = $coachDB->query("SELECT * FROM Player INNER JOIN Stats ON Player.PlayerID=Stats.PlayerID");

//Concatination of database information into json format
$json = "";
//Loop displaying all queried data
foreach($gameStats as $playerStats){
    if ($json != "") {$json .= ",";}
    $json .= '{"PlayerID":"'  . $playerStats["PlayerID"] . '",';
    $json .= '"Name":"'   . $playerStats["Name"]        . '",';
	$json .= '"Number":"'   . $playerStats["Number"]        . '",';
    $json .= '"AVG":"'. ($playerStats["At Bats"]/$playerStats["H"])     . '",'; 
	$json .= '"AB":"'. $playerStats["At Bats"]     . '",'; 
	$json .= '"K":"'. $playerStats["Strike Outs"]     . '",'; 
	$json .= '"GO":"'. $playerStats["Ground Outs"]     . '",'; 
	$json .= '"H":"'. $playerStats["Hits"]     . '",'; 
	$json .= '"Single":"'. $playerStats["Singles"]     . '",'; 
	$json .= '"Double":"'. $playerStats["Doubles"]     . '",'; 
	$json .= '"HR":"'. $playerStats["Home Runs"]     . '",'; 
	$json .= '"RBI":"'. $playerStats["Runs Batted In"]     . '",'; 
	$json .= '"R":"'. $playerStats["Runs"]     . '"}'; 
}
//Specifies json title
$json ='{"stats":['.$json.']}';

//Disconnect from database
$coachDB->close();

//Display json data
echo($json);
?>

