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
				

<br><br>
#
I. G��wne zalo�enia<br><br>
1. Administrator jest najwa�niejsz� osoba na serwerze ArcaniumMT2.<br>
Jego opinia/zdanie jest ostateczne i niepodwa�alne.<br>

2. Podszywanie sie pod Administratora/Moderatora Gry jest absolutnie zakazane.<br>

3. Zakaz u�ywania jakichkolwiek program�w u�atwiaj�cych gre (hacki, boty itp.).<br>

4. Ca�kowity zakaz u�ywania s��w potocznie uznanych za obra�liwe wobec graczy oraz ich rodzin (rodzina gracza jest nietykalna.<br>
Macie cos do siebie? Nie mieszajcie bliskich do tego).<br>

5. Wymagamy podstaw kultury i etyki. Chamstwo bedzie surowo karane.
<br><br>
#
II. GamePlay<br><br>
1. Nazwa gracza nie mo�e zawiera� s��w potocznie uznanych za obrazliwe, wulgaryzm�w itp.<br>

2. Calkowity zakaz PK na spotach lub w kolejce do nich, na mapach eventowych oraz podczas event�w.<br>
(wyjatkami sa zdarzenia kiedy gracz w wy�ej wymienionych przypadkach jest AFK lub gdy dana osoba psuje graczowi [dotyczy spot�w])<br>

3. Gracz, kt�ry zginie, zejdzie ze spota lub w innych niewyja�nionych okoliczno�ciach zniknie ze spota traci do niego prawo.<br>

4. Wszelkie bugi, b�edy, u�atwienia itp. nale�y zg�asza� Administracji. Nie zg�oszenie ich i korzystanie z nich b�dzie surowo karane!<br>

5. Nazwa gildii nie mo�e zawiera� wulgaryzm�w, s��w uznanych za obra�liwe oraz kojarzacych sie z GameMasterami/Administratorami.<br>

6. Zakaz reklamowania innych serwer�w gier zar�wno na forum jak i na serwerze.<br>

7. Bezwzgl�dny zakaz propagowania tre�ci niezgodnych z prawem lub normami wsp�ycia spo�ecznego (tj. nawo�ywania do nienawi�ci rasowej, propagowania ustroj�w totalitarnych itp.)<br>

8. Zakaz zabijania podczas event�w organizowanych przez Administracje, chyba, �e postanowi� oni inaczej.<br>

9. Zakaz podszywania sie pod innego gracza celem wy�udzenia dost�pu do konta innego gracza, wy�udzenia item�w b�dz innych korzy�ci.<br>

10. Zakaz "odbijania" oraz "ksucia".
<br><br>
#
III. Gracz a GameMaster<br><br>
1. Nie k��� si� lub nie podwa�aj zdania GM. S� to na og� m�dre osoby o bezstronnych pogl�dach.<br>

2. Nie dodawaj GM/Administratora do przyjaci�, nie spamuj mu na PW. GM/GA zazwyczaj blokuje SZEPT i wys�uchuje pr�b graczy na forum. Nie trud� si�.<br>

3. Administrator/GM nie daje item�w ani party.<br>

4. Administrator/GM nie udziela podpowiedzi podczas event�w.<br>

5. Administrator/GM nie ma obowi�zku t�umaczy� sie przed graczem ani uzasadnia� mu swoich decyzji.<br>

<br><br>
#
IV. System Kar i Sk�adanie Skarg<br><br>
1. PK MODE.<br>

a ) pierwszy raz � 3 dni + ostrzezenie,<br>
b ) drugi raz - 7 dni + 2ostrzezenie,<br>
c ) trzeci raz - Ban Permamentny<br>

2. U�ywanie bot�w, hack�w i innych wspomagaczy - Ban Pernamentny<br>

3. Podszywanie si� pod Administratora/GameMastera - 7-14 dni (zale�ne od stopnia natr�ctwa)<br>

4. Handel w DT - Ban Pernamentny<br>

5. Straszenie banem - 3 dni<br>

6. Przeszkadzanie w Eventach - 1-3 dni (zale�ne od stopnia natr�ctwa)<br>

7. Obraza/wulgaryzmy<br>

a ) blokada chatu, 24h za ka�d� sztuk�<br>
b ) w przypadku wyra�nego przegi�cia ban na posta�/konto/IP<br>

8. Obra�anie rodziny gracza/GMa/Administratora - Ban na IP<br>

9. Za gro�by dot. �ycia realnego gracz podlega karze sta�ej blokady konta - Ban Pernamentny<br>

11. Nieznajomo�� regulaminu lub tworzenie nowych punkt�w - ban 2 dni na przeczytanie i zrozumienie obecnie obowi�zujacego<br>

12. Sprzeda� Yang w grze za wysy�anie SMS jest zabronione. - Ban na 7 dni.<br>

13. Blokowanie DTRun, uniemo�liwienie jego wykonania lub ksucie kr�la, podlega karze 72h bana.
<br><br>
Notka:<br><br>
Gracze pi�tro ni�ej maj� wybra� osob�, bij�c� kr�la.<br>
Je�eli kr�l zostanie sksuty, przez inn� osob�, osoba ta podlega karze wy�ej wymienionej.<br>
Bicie graczy w DT jest dozwolone! Nie ma za to blokady!<br>
Skargi na graczy sk�adamy na forum, w odpowiednim dziale.
<br><br>

#
V. Wymiana/handel<br><br>
1. Wymiana i/lub handel itemami podczas ca�ej transakcji nale�y robi� screenshoty, by wszystko by�o po Waszej my�li. <br>
Wszelkie pr�by oszustw b�da karane z najwieksz� surowo�cia.<br>
Za kradzie�e bez udzialu wy�ej wymienionych podmiot�w Administracja nie odpowiada (prosz� pisac do nas na e-mail; kto� zawsze si� znajdzie)<br>
<br>
2. Wprowadzamy nowy system wymiany/sprzeda�y kont.<br>
Aby wymieni� si� kontami, musicie z�apa� dost�pnego GMa.<br>
Podajecie nicki postaci przeznaczonych do transakcji.<br>
GM kontaktuje si� z graczami i potwierdza ch�� wymiany, po czym zmienia has�a dost�powe i<br>
zmienione wysy�a zainteresowanym osobom<br>
(w przypadku sprzeda�y konta GM czeka na potwierdzenie osoby sprzedaj�cej konto i dopiero wtedy podaje haslo graczowi kupuj�cemu).<br>
Ostrzegamy jednoczesnie, �e pr�by jakichkolwiek oszustw ko�czy� si� b�d� do�ywotnim banem IP/Banem HID.<br>
Za wymiane/sprzeda� konta bez zg�oszenia na forum Administracja nie odpowiada.<br>
Po zgloszeniu takiego faktu konto/konta zostaj� do�ywotnio zablokowane bez mo�liwo�ci wyja�niania sprawy.
<br>
3. Za kradzie�e kont z wykorzystaniem hase� Administracja nie odpowiada.<br>
Jednocze�nie Administracja prosi o u�ywanie hase� trudnych do odgadni�cia, z zastosowaniem r�nych wielko�ci liter i dodania paru cyfr.<br>
Przypominamy r�wnie�, �e Administrator/GM nie prosi o podawanie has�a (bo najzwyczajniej w swiecie go nie potrzebuje).<br>
Nie dajcie si� naci�ga�.
<br>
4. Wymiana przedmiot za konto robicie na w�asn� r�ke. Trudno jest wtedy upilnowa� dw�ch graczy wymieniaj�cych si�. GM nie b�dzie odpowiada� na zg�oszenia dot. wymiany przedmiotu za konto.
<br>
5. Wymiana lub sprzeda� na serwisach typu "Allegro" jest zabroniony. Podlega to banowi permamentnemu.<br>

6. Handel przedmiotami i kontami z poza serwera ArcaniumMT2 s� zabronione oraz b�dzie karane Banem konta.
<br><br>
#
VI. Item-Shop, oraz konta V.I.P<br><br>
1. Item-Shop powsta� z my�l� o utrzymaniu i dalszym rozwoju serwera ArcaniumMT2.<br>

2. Granie na serwerze jest calkowicie DARMOWE na wszystkich etapach gry.<br>

3. Wp�aty pieni�ne w IS sa DOBROWOLNE<br>

4. Z�ote Monety s� jedynie form� podzi�kowania za dokonanie wp�aty na utrzymanie serwera
<br><br>

#
VII. S�owem ko�cowym<br><br>
Niniejszy regulamin obowi�zuje z dniem jego publikacji.<br>
Gra na serwerze zobowi�zuje do znania i przestrzegania regulaminu.<br>
Nieznajomo�� regulaminu nie zwalnia od kary za jego z�amanie.<br>
Administracja zastrzega sobie prawo do zmiany/aktualizacji Regulaminu.<br>
O zmianach/aktualizacjach b�dziecie informowani na stronie g��wnej serwera. <br>
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