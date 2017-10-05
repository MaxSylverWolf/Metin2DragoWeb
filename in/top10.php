
<?php 
if($for == 1) {
require_once("config.php"); $database = mysql_select_db("player"); $query33 = mysql_query("SELECT * FROM player WHERE name NOT LIKE '[GM]%' AND name NOT LIKE '[GA]%'  AND name NOT LIKE '[HA]%' AND name NOT LIKE '[SGM]%' ORDER BY level desc, exp desc limit 10"); $i = 1; while($player = mysql_fetch_array($query33)) if($player["id"] != 273 && $player["id"] != 273 AND $player["id"] != 273 && $player["id"] != 273 AND $player["id"] != 273 && $player["id"] != 273 AND $player["id"] != 273 && $player["id"] != 273) { echo "<tr><td class=\"t-rank\">$i</td><td class=\"t-name\"><a href=profile.php?id=".$player['id'].">".$player["name"]."</a></td><td class=\"t-lvl\">".$player["level"]."</td></tr>"; $i++; } }
if($for == 2) {
require_once("../config.php"); 
$database = mysql_select_db("player"); 
$query33 = mysql_query("SELECT * FROM player ORDER BY level DESC limit 10"); 
$i = 1; 
while($player = mysql_fetch_array($query33)) 
if($player["id"] != 273 && $player["id"] != 273) {
 echo "<tr><td class=\"t-rank\">$i</td><td class=\"t-name\"><a href=../profile.php?id=".$player['id'].">".$player["name"]."</a></td><td class=\"t-lvl\">".$player["level"]."</td></tr>"; 
 $i++; } }
?>
