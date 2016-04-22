<?php
//Connect to database
require_once("coachDB.php");

//Query accessing all data storing stats into array

//$gameStats = $coachDB->query("SELECT * FROM Player INNER JOIN Stats ON Player.PlayerID=Stats.PlayerID");

$gameStats = $coachDB->query("SELECT Player.PlayerID, Player.Name, Player.Number, SUM( AtBats ) AS AtBats, SUM( StrikeOuts ) AS StrikeOuts, SUM( GroundOuts ) AS GroundOuts, SUM( Hits ) AS Hits, SUM( Doubles ) AS Doubles, SUM( RunsBattedIn ) AS RunsBattedIn, SUM( HomeRuns ) AS HomeRuns, SUM( Runs ) AS Runs
FROM Stats
INNER JOIN Player ON Stats.PlayerID = Player.PlayerID GROUP BY Name;");

//Concatination of database information into json format
$json = "";
//Loop displaying all queried data
foreach($gameStats as $playerStats){
    if ($json != "") {$json .= ",";}
    $json .= '{"PlayerID":"'  . $playerStats["PlayerID"] . '",';
    $json .= '"Name":"'   . $playerStats["Name"]        . '",';
	$json .= '"Number":"'   . $playerStats["Number"]        . '",';
    $json .= '"AVG":"'. ($playerStats["AtBats"]/$playerStats["H"])     . '",'; 
	$json .= '"AB":"'. $playerStats["AtBats"]     . '",'; 
	$json .= '"K":"'. $playerStats["StrikeOuts"]     . '",'; 
	$json .= '"GO":"'. $playerStats["GroundOuts"]     . '",'; 
	$json .= '"H":"'. $playerStats["Hits"]     . '",'; 
	$json .= '"Single":"'. $playerStats["Singles"]     . '",'; 
	$json .= '"Double":"'. $playerStats["Doubles"]     . '",'; 
	$json .= '"HR":"'. $playerStats["HomeRuns"]     . '",'; 
	$json .= '"RBI":"'. $playerStats["RunsBattedIn"]     . '",'; 
	$json .= '"R":"'. $playerStats["Runs"]     . '"}'; 
}
//Specifies json title
$json ='{"stats":['.$json.']}';

//Disconnect from database
$coachDB->close();

//Display json data
echo($json);
?>

