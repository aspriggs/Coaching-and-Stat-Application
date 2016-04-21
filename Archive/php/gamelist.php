<?php
//Connect to database
require_once("coachDB.php");

//Query accessing all game data storing stats into array

$gameList = $coachDB->query("SELECT * FROM Game");

//Concatination of database information into json format
$json = "";
//Loop displaying all queried data
foreach($gameList as $games){
    if ($json != "") {$json .= ",";}
    $json .= '{"GameID":"'  . $games["GameID"] . '",';
    $json .= '"Opponent":"'   . $games["Opponent"]        . ' | '. $games["Date"]     . '"}';
}
//Specifies json title
$json ='{"games":['.$json.']}';

//Disconnect from database
$coachDB->close();

//Display json data
echo($json);
?>

