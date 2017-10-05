<div class="stats">
<table>
<?php
$server_ip = "169.254.11.100";
$ip = gethostbyname($server_ip);
$portlist=array(11002, 13000, 13001);
$onliner=array("Logowanie:", "Postacie:", "¦wiat:");
$i='0';
foreach ($portlist as $port){
echo "<tr><td><p ".($i=='0' ? "class='first'" : "").">".$onliner[$i]."\n</td>";
$online = @fsockopen($ip, $port, $errno, $errstr, 1);
if (!$online) { 
if($for == 1) {
echo "<td><img src='images/off.gif' width='9' height='9' title='".$onliner[$i]."'></p></td></tr>"; 
}
else {
echo "<td><img src='../images/off.gif' width='9' height='9' title='".$onliner[$i]."'></p></td></tr>"; 
}
}
else { 
if($for == 1) {
echo "<Td><img src='images/on.gif' width='9' height='9' title='".$onliner[$i]."'></p></td></tr>"; 
}
else {
echo "<Td><img src='../images/on.gif' width='9' height='9' title='".$onliner[$i]."'></p></td></tr>"; 
}
}
@fclose($online);
$i++;
}
?>
</table>
<!-- sidebar character render -->
<div class="abso">
<div class="char-cont">
<div class="character"></div>
</div>
</div>
</div>

<!-- Online Players -->
<div class="players">

<?php 
echo $konta;
echo $chars;
?>