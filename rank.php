<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Site by SylverWolf. All rights reserved. Coded by me too. -->
<head>
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="wpisz po przecinku" />
  <meta name="title" content="Main Menu" />
  <meta name="author" content="SylverWolf" />
  <meta name="description" content="Metin2 Server" />
  <meta name="generator" content="One of the Best Metin2 Server" />
  <ti  <title><?PHP include('in/nazwa.txt'); ?></title>
<style type="text/css" media="all">
@import url(css/style.css);
</style>
<!-- frames all 'round -->
<div class="frame" id="frame-top"></div>

<div class="frame" id="frame-bottom"></div>

<div class="frame" id="frame-left"></div>

<div class="frame" id="frame-right"></div>

<div class="corner" id="frame-c-tl"></div>

<div class="corner" id="frame-c-tr"></div>

<div class="corner" id="frame-c-bl"></div>

<div class="corner" id="frame-c-br"></div>

<!-- end frames -->
<style type="text/css">
<!--
td.leftbg {
	background-image: url(images/leftbg.jpg);
	background-position: top right;
	background-repeat: no-repeat}
	
td.rightbg {
	background-image: url(images/rightbg.jpg);
	background-position: top left;
	background-repeat: no-repeat }
	
body {
	background-color: #000000;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
form,div {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	
input.pass { 
 background-image: url(images/inputbg.gif);  
 border: 0px; 
 font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
 color: #000000; 
 font-size: 8pt; 
 width: 115px;
 height: 17px;
 text-align: center;
 padding-bottom: 0px;
}

input.login {
 background-color: #e5d8ba; 
 color: #000000; 
 border: 1px solid #8a7c60; 
 font-family: Verdana, Arial, Helvetica, sans-serif;
 color: #000000; 
 font-size: 11px; 
 width: 179px;
 height: 20px;
 text-align: left;
 position: inherit;
 padding-bottom: 0px;
}

input.login1 { 
background-image: url(images/inputbg.gif); 
 border: 0px; 
 font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
 color: #000000; 
 font-size: 8pt; 
 font-weight: bold;
 width: 115px;
 height: 17px;
 text-align: center;
 padding-bottom: 0px;
}
.style1 {color: #4b2500; font-weight: bold; font-size: 9pt;}
.style2 {	font-size: 8pt;}
.style3 {	color: #f5ead6;	font-weight: bold;	font-size: 9pt;}

-->
</style>
</head>
<body>
{AJAX}
<body onload="MM_preloadimages('images/lmenu_news1.jpg','images/lmenu_forum1.jpg','images/lmenu_faq1.jpg','images/formleft_.jpg','images/formright_.jpg')">





<table border="0" cellpadding="0" cellspacing="0" width="100%">   
  <tbody><tr>
	<td class="leftbg" width="50%">&nbsp;</td>
	<td valign="top" width="0">
		<img src="images/top_header.jpg" height="248" width="896" border="0">
		<table valign="top" border="0" cellpadding="0" cellspacing="0" width="896">
		  <tbody><tr>

			<td rowspan="2" align="left" valign="top" width="1">
				<div valign="top"><a class="menu" href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('nr001','','images/lmenu_news1.jpg',1)"><img style="cursor: pointer;" src="images/lmenu_news.jpg" name="nr001" id="nr001" border="0" height="28" width="142"></a><br>
<a class="menu" href="/forum" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('nr002','','images/lmenu_forum1.jpg',1)"><img style="cursor: pointer;" src="images/lmenu_forum.jpg" name="nr002" id="nr002" border="0" height="26" width="142"></a><br>
<a class="menu" href="index.php?mod=faq" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('nr003','','images/lmenu_faq1.jpg',1)"><img style="cursor: pointer;" src="images/lmenu_faq.jpg" name="nr003" id="nr003" border="0" height="26" width="142"></a><br>
<a class="menu" href="index.php?mod=library" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('nr040','','images/lmenu_library1.jpg',1)"><img style="cursor: pointer;" src="images/lmenu_library.jpg" name="nr040" id="nr040" border="0" height="26" width="142"></a><br>



<?PHP include('in/menu.php'); ?>



  <tbody><tr>
	<td rowspan="5" width="1"><img src="images/pix.gif" height="10" width="25"></td>
	<td align="left" height="25" valign="bottom" class="status">
<!--Copyright (c) 2010-2011 SylverWolf.--><?php 
if($for == 1) {
include("config.php");
}
if($for == 2)  {
 include("config.php");
 }
$polacz = mysql_query('SELECT count(*) FROM player.player');
$polacz2 = mysql_query('SELECT count(*) FROM account.account ');
$polacz2 = mysql_query('SELECT count(*) FROM account.account ');
   $podlicz = $liczy[0];
$podlicz2 = $liczy2[0];
mysql_select_db("player");
$exe = mysql_query("SELECT COUNT(*) as count FROM player WHERE DATE_SUB(NOW(), INTERVAL 2 MINUTE) < last_play;");
   $online = "Ilo�� graczy online:  $player_online<Br/>";
$konta = "<p class=\"p-record\">Za�o�onych kont  <span>$podlicz2</span></p>";
$chars = "<p class=\"p-record\">Ilo�� postaci  <span>$podlicz</span></p> <Br/>";

?>
<div class="time"><small>
<?php 
echo $online;
?></small></div>
<!-- Server Stats -->
<?php include('in/status.php'); ?>
</div>
  <tr>
	<td align="left" height="18" valign="bottom" class="status">
		<img src="images/pix.gif" border="0" height="5" width="10"><br>Czas: <script language="JavaScript" src="js/time.js" type="text/javascript" ></script><br><img src="images/pix.gif" height="5" width="25">

	</td>
  </tr>
  </tbody>
</table><img src="images/lmenu_serv.jpg" height="23" width="142">
<table background="images/lmenu_blue7.jpg" border="0" cellpadding="0" cellspacing="0" width="142">
  <tbody><tr>
	<td rowspan="4" width="1"><img src="images/pix.gif" height="10" width="25"></td>

  </tr>

  <tr>
	<td align="left" height="20" valign="top"><a class="menu" href="kontakt.php"><img src="images/pix.gif" border="0" height="5" width="10"><br>Kontakt</a></td>
  </tr>



</tbody>
</table>
<img src="images/sidox.jpg" border="0" height="102" width="143"></div>
			</td>
			<td align="left" background="images/content_bg.jpg" valign="top">
<form method='post' name='loginform' action='log.php'>
<table border='0' cellpadding='0' cellspacing='0'>
  <tbody><tr>
	<td rowspan='3' align='left' height='69' valign='top' width='178'>
		<a class='menu' href='register.php' onmouseout='MM_swapImgRestore()' onmouseover="MM_swapImage('nr004','','images/formleft_.jpg',1)"><img src='images/formleft.jpg' name='nr004' id='nr004' border='0' height='23' width='178'></a><br>
		<a class='menu' href='lost.php' onmouseout='MM_swapImgRestore()' onmouseover="MM_swapImage('nr005','','images/formleft1_.jpg',1)"><img src='images/formleft1.jpg' name='nr005' id='nr005' border='0' height='13' width='178'><br></a>
		<img src='images/formleft2.jpg'>
	</td>
	<td align='left' height='1' valign='top' width='120'>

		<div valign='top'><img src='images/formlefttop.jpg' height='4' width='119'></div>
	</td>
	<td rowspan='3' align='left' valign='top' width='19'>
		<img src='images/formmiddle.jpg' height='69' width='19'>
	</td>
	<td align='left' height='1' valign='top' width='120'>
		<div valign='top'><img src='images/formrighttop.jpg' height='4' width='118'></div>
	</td>
	<td rowspan='3' align='left' valign='top' width='192'>

		<span class='menu' href='' onmouseout='MM_swapImgRestore()' onmouseover="MM_swapImage('nr006','','images/formright_.jpg',1)">
		<input type=hidden value=1 name=login_start><input type='image' src='images/formright.jpg' name='nr006' id='nr006' border='0' height='29' width='176'></span><br>
		<img src='images/formright1.jpg'>
	</td>
  </tr>
  <tr>
	<td align='left' background='images/inputbg.gif' height='21' valign='top'>
		<input class='login1' name='login' type='text' maxlength='10'>
	</td>
	<td align='left' background='images/inputbg.gif' height='21' valign='top'>

		<input class='pass' name='pass' type='password' maxlength='10'>
	</td>
  </tr>
  <tr>
	<td valign='top' width='119'><img src='images/formleftbot.jpg' height='44' width='119'></td>
	<td valign='top' width='118'><img src='images/formrightbot.jpg' height='44' width='118'></td>
  </tr></tbody>
</table>
</form><table border="0" cellpadding="0" cellspacing="0" width="100%">
				  <tbody><tr>
					<td width="1">
						<img src="images/pix.gif" alt="" border="0" height="10" width="14">
					</td>
					
					<td align="left" bgcolor="#f2e4bf" valign="top">
				

<p>� <?php $nazwa = $_GET['nazwa'];
                require_once("config.php");
                $database = mysql_select_db("player");
		if(isset($_GET['poz']) && $_GET['poz'] != '') { 
		$poz1 = addslashes($_GET['poz'])-25; $poz = addslashes($_GET['poz']); $poz2 = addslashes($_GET['poz'])+25; 
		} 
		else { 
		$poz1 = '-25'; $poz = '0'; $poz2 = '25'; 
		}
			
$query = mysql_query("SELECT * FROM player ORDER BY level desc, exp desc limit $poz,25");
                 echo "<table class=tb cellpadding=\"2\"  border=\"0\" width=100%>";               
                                          echo "<tr>";
										  echo "<td style=\"background-color: #9b9777; color: black;\"><b>Miejsce</b>";
        echo "<td style=\"background-color: #c5c098; color: black;\"><b>Nazwa postaci</b></td>";
        echo "<td style=\"background-color: #9b9777; color: black;\"><b>Czas</b></td>";
                echo "<td style=\"background-color: #c5c098; color: black;\"><b>Poziom</b></td>";
                echo "<td style=\"background-color: #9b9777; color: black;\"><b>Do�wiadczenie</b></td>";
				echo "<td style=\"background-color: #c5c098; color: black;\"><b>Klasa</b></td>";
				echo "<td style=\"background-color: #9b9777; color: black;\"><b>Kr�lestwo</b></td>";
        echo "</tr>";
$i = $poz+1;
while($player = mysql_fetch_array($query))

             if($player["id"] != 11172 && $player["id"] != 11173 AND $player["id"] != 11177) {
         

                echo "<tr>";
				echo "<td style=\"background-color: #c5c098; color: black;\">".$i."</td>";
        echo "<td style=\"background-color: #c5c098; color: black;\"><a href=profile.php?id=".$player['id'].">".$player["name"]."</a></td>";
        echo "<td style=\"background-color: #c5c098; color: black;\">".$player["playtime"]." min.</td>";                
                echo "<td style=\"background-color: #9b9777; color: black;\">".$player["level"]." </td>";
                echo "<td style=\"background-color: #c5c098; color: black;\">".$player["exp"]."</td>";
if($player['job'] == 0) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Wojownik (M)</td>"; 
}
elseif($player['job'] == 4) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Wojownik (K)</td>"; 
}
if($player['job'] == 1) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Ninja (K)</td>"; 
}
elseif($player['job'] == 5) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Ninja (M)</td>"; 
}
if($player['job'] == 2) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Sura (M)</td>"; 
}
elseif($player['job'] == 6) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Sura (K)</td>"; 
}
if($player['job'] == 3) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Szaman (K)</td>"; 
}
elseif($player['job'] == 7) {
echo "<td style=\"background-color: #9b9777; color: black;\"> Szaman (M)</td>"; 
}

				$query2 = mysql_query("SELECT * FROM player_index WHERE id LIKE '$player[account_id]'");
				while($player2 = mysql_fetch_array($query2))
		if($player2['empire'] == 1) { 
		echo "<td align='center' style=\"background-color: #970100; color: black;\"></td>"; 
		}
		elseif($player2['empire'] == 2) {
		echo "<td align='center' style=\"background-color: #dc9e27; color: black;\"></td>"; 
		}
		else {
		echo "<td align='center' style=\"background-color: #151f6e; color: black;\"></td>"; 
		}
$i++;
}
	$rs=@mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM player "));
	$num=$rs[0];
								echo "</tr>    </table>";
	echo "<center>".($poz1>='0' ? "<a href='?poz=".$poz1."'>[<- Poprzednia strona]</a>&nbsp;&nbsp;" : "").($poz2<$num ? "<a href='?poz=".$poz2."'>[Nastepna strona ->]</a>" : "")."<form action=rank.php>Wyswietl od pozycji: <input name=poz></form> </center>";
	?></p>
				<img src="images/newsbot1.jpg" alt="" height="13" width="586">
					</td>	<img src="images/content_header.jpg" height="41" width="610"><br>

					<td width="1">

						<img src="images/pix.gif" alt="" border="0" height="10" width="10">
					</td>
				  </tr></tbody>
				</table>
			</td>
			<td rowspan="2" align="left" valign="top" width="1">
				
<table background="images/rmenu_top5.jpg" border="0" cellpadding="0" cellspacing="0" height="266" width="143">
  <tbody><tr>
	<td rowspan="6" valign="bottom"><img src="images/pix.gif" height="10" width="45"></td>
	
<!--Copyright (c) 2010-2011 SylverWolf.--><td height='56' valign='bottom'>
		<a style='font-family: Tahoma,Verdana,Arial,Helvetica,sans-serif; font-size: 9pt; color: rgb(0, 0, 0);' href='pinfo.php?name=Adela' target='_blank'><b>SylverWolf</b></a>
	</td>
</tr><tr><td height='30' valign='bottom'>
		<a style='font-family: Tahoma,Verdana,Arial,Helvetica,sans-serif; font-size: 9pt; color: rgb(0, 0, 0);' href='pinfo.php?name=Pavlova' target='_blank'><b>MikroIce</b></a>
	</td>
</tr><tr><td height='27' valign='bottom'>
		<a style='font-family: Tahoma,Verdana,Arial,Helvetica,sans-serif; font-size: 9pt; color: rgb(0, 0, 0);' href='pinfo.php?name=balthamell' target='_blank'><b>Vladimir</b></a>
	</td>
</tr><tr><td height='27' valign='bottom'>
		<a style='font-family: Tahoma,Verdana,Arial,Helvetica,sans-serif; font-size: 9pt; color: rgb(0, 0, 0);' href='pinfo.php?name=Kalis' target='_blank'><b>Sito</b></a>
	</td>
</tr><tr><td height='29' valign='bottom'>
		<a style='font-family: Tahoma,Verdana,Arial,Helvetica,sans-serif; font-size: 9pt; color: rgb(0, 0, 0);' href='pinfo.php?name=MissDeath' target='_blank'><b>Dante</b></a>
	</td>
</tr>	
  <tr>
	<td width="142"><img src="images/pix.gif" height="97" width="40"></td>

  </tr></tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="143">
  <tbody><tr>
	<td width="1"><img src="images/rmenu_bannerleft.jpg" height="353" width="20"></td>
	<td background="images/banner6.jpg"><img src="images/overbanner.gif" height="353" width="119"></td>
	<td width="1"><img src="images/rmenu_bannerright.jpg" height="353" width="4"></td>
  </tr></tbody>
</table>
<img src="images/underbanner.jpg" height="259" width="143">			</td>
		  </tr>

		  <tr>
			<td background="images/content_bg.jpg" valign="bottom"><img src="images/content_bot.jpg" height="135" width="610"></td>
		  </tr>
		  </tr></tbody>
		</table>
	</td>
	<td class="rightbg" width="50%">&nbsp;</td>
  </tr></tbody>
</table>

</body><p align="center" class="notice"><b>ArcaniumMT2<br>Copyright (C)2010-2011, ArcaniumMT2 Server.<br>/Wilczur\</b></p>
</html>