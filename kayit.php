<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="340" height="193" border="0">
    <tr>
      <td>resim</td>
      <td><label for="textfield"></label>
      <input type="text" name="r" id="textfield" /></td>
    </tr>
    <tr>
      <td>marka</td>
      <td><label for="textfield2"></label>
      <input type="text" name="m" id="textfield2" /></td>
    </tr>
    <tr>
      <td>urun adi</td>
      <td><label for="textfield3"></label>
      <input type="text" name="u" id="textfield3" /></td>
    </tr>
    <tr>
      <td>fiyat</td>
      <td><label for="textfield4"></label>
      <input type="text" name="f" id="textfield4" /></td>
    </tr>
    <tr>
      <td>kategori id</td>
      <td><label for="textfield5"></label>
      <input type="text" name="k" id="textfield5" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Kaydet" /></td>
    </tr>
  </table>
</form>
<?php
$resim=$_POST["r"];
$marka=$_POST["m"];
$urunadi=$_POST["u"];
$fiyat=$_POST["f"];
$kid=$_POST["k"];
$baglan=@mysql_connect("localhost","root","");
$vtsec=@mysql_select_db("uygunticaret",$baglan);
$ekle = mysql_query("insert into urunler(resim,marka,urun_adi,fiyat,kategori_id)values('$resim','$marka','$urunadi','$fiyat','$kid')",$baglan);
?>
</body>
</html>