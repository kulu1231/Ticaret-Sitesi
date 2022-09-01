<?php
ob_start();
header('content-type: text/html; charset=utf8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"/> 

<title>Ayrıntı</title>
<style type="text/css">
*
{
	margin:0px;
	padding:0px;
	list-style:none;
	font-family:Tahoma, Geneva, sans-serif;
	text-decoration:none;
	
}
#footer {
	position: absolute;
	width: 100%;
	height: 50px;
	z-index: 2;
	top: 1790px;
	background-color: #3A485B;
	text-align: center;
	font-size: 36px;
	line-height: 50px;
	color: #FFFFFF;
	float: right;
	left: 0px;
}
#ustbanner {
	position: relative;
	width: 100%;
	height: 150px;
	z-index: 999;
	border-bottom:1px solid black;
	position:fixed;
	background-color:#FFF;
	
}
#resim
{
	position: absolute;
	width:auto;
	left: 14px;
	top: 10px;
}
#resim2
{
	position: absolute;
	width: auto;
	left: 269px;
	top: 5px;
}
#menu {
	position: absolute;
	width: 900px;
	height: 48px;
	z-index: 1;
	left: 615px;
	top: 104px;
}
#menu ul li
{
	float:left;
}
#menu ul li a
{
	display:block;
	text-decoration:none;
	font-size:15px;
	width:120px;
	height:30px;
	text-align:center;
	color:black;
	background-color:#FFF;
	box-shadow: 2px 2px 6px rgba(0, 0, 1, 0.5);
	line-height:30px;
	
	
}
#menu ul li a
{
	display:block;
	text-decoration:none;
	font-size:15px;
	width:120px;
	height:30px;
	text-align:center;
	color:black;
	background-color:#FFF;
	box-shadow: 2px 2px 6px rgba(0, 0, 1, 0.5);
	line-height:30px;
	
	
}
#menu ul li a:hover
{
	background-color:#f49140;
	color:white;
	
}
#kapsayici {
	position: relative;
	width: 100%;
	height: 1300px;
	z-index: 2;
}
#giris {
	position: absolute;
	width: 350px;
	height: 90px;
	z-index: 3;
	left: 1100px;
	top: 3px;
}
#ara {
	position: absolute;
	width: 321px;
	height: 76px;
	z-index: 3;
	left: 645px;
	top: 4px;
}
#kate {
	position: absolute;
	width: 274px;
	height: 620px;
	z-index: 3;
	border-right: 1px solid black;
	background-color:#FFF;
	border-bottom:1px solid black;
	top:151px;
	background-color:#FFF;
	box-shadow: 2px 2px 6px rgba(0, 0, 1, 0.5);
}
#kate ul li a
{
	display:block;
	text-align:center;
	text-decoration:none;
	height:50px;
	line-height:50px;
	color:black;
	border-bottom:1px solid #9FF;
}
#kate ul li a:hover
{
	background-color:#f49140;
	color:white;
	
}
#rek {
	position: absolute;
	width: 1063px;
	height: 585px;
	z-index: 3;
	left: 288px;
	top: 163px;
}
#slid {
	position: absolute;
	margin: auto;
	width: 1010px;
	height: 115px;
	z-index: 2;
	background-color: #00FF00;
	left: 20px;
	line-height: 100px;
	font-size: 60px;
	text-align: center;
	top: 432px;
}
#footer2 {
	position: absolute;
	width: 100%;
	height: 400px;
	z-index: 2;
	top: 1390px;
	background-color: #666666;
	float: right;
	left: 0px;
}
#calismazaman {
	position: absolute;
	width: 300px;
	height: 254px;
	z-index: 1;
	left: 9px;
	top: 9px;
	font-family: Arial, Helvetica, sans-serif;
}
.zz
{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
	font-weight: bold;
}
#calismazaman2 {
	position: absolute;
	width: 300px;
	height: 254px;
	z-index: 2;
	left: 337px;
	top: 9px;
	font-family: Arial, Helvetica, sans-serif;
}
#calismazaman3 {
	position: absolute;
	width: 381px;
	height: 254px;
	z-index: 3;
	left: 661px;
	top: 9px;
}
#sosyalmedya {
	position: absolute;
	width: 290px;
	height: 254px;
	z-index: 4;
	left: 1054px;
	top: 9px;
}
#kapsayici #icerik #footer2 #sosyalmedya table tr td center a .fab.fa-instagram.fa-2x {
	color: #F00;
}
#kapsayici #icerik #footer2 #sosyalmedya table tr td center a .fab.fa-twitter.fa-2x {
	color:lightblue;
}
.resim{
	width:300px;
	border:1px solid black;
	height:224px;
	text-align:Center;
	margin-bottom:10px;
	 transition: transform .2s;
	
}
.marka{
width:300px;
text-align:center;
background-color:red;
color:white;
margin-bottom:10px;
}
.satinal{
width:300px;
text-align:center;

}
.fiyat{

text-align:center;
width:300px;
background-color:lightgray;
margin-bottom:10px;
	
	
}
* {box-sizing: border-box;}
.vtkap{
	position:relative;
	margin-bottom:10px;	
	float:left;
	padding:10px;
	margin:10px;
	
}
.resim {
  position: relative;
  float:left;
}

.img-magnifier-glass {
  position: absolute;
  border: 0px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 100px;
  height: 100px;
}


</style>
<script type="text/javascript">
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /* Create magnifier glass: */
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");

  /* Insert magnifier glass: */
  img.parentElement.insertBefore(glass, img);

  /* Set background properties for the magnifier glass: */
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;

  /* Execute a function when someone moves the magnifier glass over the image: */
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);

  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /* Prevent the magnifier glass from being positioned outside the image: */
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /* Set the position of the magnifier glass: */
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /* Display what the magnifier glass "sees": */
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

</head>
<body>

<div id="kapsayici">
<div id="ustbanner">
  
  <div id="resim"><img src="images/ayakk.png" width="238" height="124" /></div>
<div id="resim2"><img src="images/bilgi.fw.png" width="338" height="139" /></div>

<div id="menu">
  <ul>
    <li><a href="index.php">Ana Sayfa</a></li>
    <li><a href="kadin.php">Kadın</a></li>
    <li><a href="erkek.php">Erkek</a></li>
    <li><a href="cocuk.php">Çocuk</a></li>
    <li><a href="spor.php">Spor</a></li>
    <li><a href="hak.php">Hakkımızda</a></li>
  
  </ul>
</div>

<div id="giris"><?php


	


?><br><a href="giris.php" style="color:#f49140;">Giriş Yap veya Kaydol</a></div>
<div id="ara">
  <form id="form1" name="form1" method="post" action="">
    <table width="210" height="54" border="0" cellspacing="10">
      <tr>
        <td><label for="textfield"></label>
          <input type="text" name="ara" id="textfield" style="width:200px;height:30px;" /></td>
        <td><input type="submit" name="arabutton" id="button" value="ARA" style="width:100px;height:30px;" /></td>
      </tr>
    </table>
  </form>
</div>
</div>
<div id="kate">
  <ul>
     <li><a href="#" style="background-color:#000; color:#FFF;">Kategoriler</a></li>
            <li><a href="topuklu.php">Topuklu Ayakkabı</a></li>
            <li><a href="spor.php">Spor Ayakkabı</a></li>
            <li><a href="babet.php">Babet</a></li>
            <li><a href="sandalet-terlik.php">Sandalet / Terlik</a></li>
            <li><a href="bot.php">Bot</a></li>
            <li><a href="nike.php">Nike</a></li>
            <li><a href="adidas.php">Adidas</a></li>
            <li><a href="puma.php">Puma</a></li>
            <li><a href="lescon.php">Lescon</a></li>
            <li><a href="reebook.php">Reebook</a></li>
            <li><a href="kinetix.php">Kinetix</a></li>
  </ul>
</div>
<div id="rek">

  <?php
  include("baglanti.php");
$id=(mysql_real_escape_string(abs(intval($_GET['Kimlik']))));
	$listele=mysql_query("select * from urunler where Kimlik='$id'",$baglan);
	
$goster = mysql_fetch_assoc($listele);
$resim=$goster["resim"];
$urunadi=$goster["urun_adi"];
$fiyat=$goster["fiyat"];
$marka=$goster["marka"];
echo "<div class=vtkap>";
echo "<div class=resim>"."<img id='myimage' src=images/$resim width=201 height=214 />"."</div>";
echo "<div style=position:absolute;background-color:white;left:350px;width:500px;><b>$urunadi</b><br><br>$marka<br><br><font color=green><b>$fiyat</b></font><br><br>[Sepete Ekle]"."</div>";
//echo "<div class=satinal>"."<a href='ayrinti.php?sorgu=$id'><img src='images/satinal.PNG' width='101' height='36' /></a>"."</div>";

echo "</div>";


?>
<script type="text/javascript">
/* Execute the magnify function: */
magnify("myimage", 3);
/* Specify the id of the image, and the strength of the magnifier glass: */ 
</script>
  </div>
   <div id="footer2">
    <div id="calismazaman"><span class="zz">Çalışma Zamanları</span><hr color="#FF0000" />
      <table width="265" border="0" cellspacing="10">
        <tr>
          <td width="132">Pazartesi - Pazar</td>
          <td width="99">10:00 - 22:00</td>
        </tr>
      </table>
      <br />
    </div>
    <div id="calismazaman2"><span class="zz">Adres</span><hr color="#FF0000" />
    
    <table width="200" border="0" cellspacing="10">
  <tr>
    <td>Uygun Ticaret</td>
  </tr>
  <tr>
    <td>Aksaray Mah. No:33/A</td>
  </tr>
  <tr>
    <td>31000 Antakya - Hatay</td>
  </tr>
  <tr>
    <td>Türkiye</td>
  </tr>
  <tr>
    <td>0212 854 38 55</td>
  </tr>
  <tr>
    <td>Google Maps</td>
  </tr>
</table>

    
    </div>
	
    <div id="calismazaman3"><span class="zz">Center Uygulamasını İndir</span><hr color="#FF0000" />
      <table width="364" border="0" cellspacing="10">
        <tr>
          <td><img src="images/google-play.png" width="165" height="46" /></td>
          <td><img src="images/Ekran Alıntısı.PNG" width="165" height="46" /></td>
        </tr>
      </table>
    </div>
    <div id="sosyalmedya"><span class="zz">Sosyal Medya</span><hr color="#FF0000" />
    <table width="94" border="0" cellspacing="0">
  <tr>
    <td width="20"><center><a href="#"><i class="fab fa-facebook-f fa-2x"></i></a></center></td>
    <td width="22"><center><a href="#"><i class="fab fa-instagram fa-2x"></i></a></center></td>
    <td width="29"><center><a href="#"><i class="fab fa-twitter fa-2x"></i></a></center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
        </div>
        </div>
  <div id="footer">Uygun Ticaret &copy; Tüm Hakları Saklıdır.</div>
</div>

</body>
</html>