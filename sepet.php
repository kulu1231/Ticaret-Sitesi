<?php
ob_start();
header('content-type: text/html; charset=utf8');
include("baglanti.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Alışveriş Sepeti (DEMO) - $prototürk</title>
</head>
<body>

<?php

	/* güvenlik */
	function guvenlik($par){
		return htmlspecialchars(trim($par));
	}
	array_map('guvenlik', $_GET);
	
	/* ürünlerim */
	
	
	$urunler=array(1,2,3,4,5);
	

	
	if ( isset($_GET['sepetim']) ){
		
		echo '<h2>Sepetiniz ('.count($_COOKIE['urun']).')</h2>';
		if ( isset($_COOKIE['urun']) ){
			foreach ( $_COOKIE['urun'] as $urun => $val ){
				echo '<div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px">
					<h2>Ürün '.$urun.'</h2>
					<p>burası ürün açıklaması :)</p>
					<a href="?cikart='.$urun.'">[sepetten çıkart]</a>
				</div>';
			}
		} else {
			echo 'Şuan sepetinizde hiç ürün bulunmuyor!';
		}
		
	} else {
	
		/* sepette kaç tane ürün var? */
		if ( isset($_COOKIE['urun']) ){
			echo 'Şuan sepetinizde <strong>('.count($_COOKIE['urun']).') ürün</strong> bulunuyor! <a href="?sepetim=true">[Sepetimi Göster]</a> / <a href="?bosalt=true">[Sepeti Boşalt]</a>';
		} else {
			echo 'Şuan sepetinizde hiç ürün bulunmuyor!';
		}
		
		/* ürünleri listeleyelim */
		foreach ( $urunler as $urun ){
			echo '<div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px">
				<h2>Ürün '.$urun.'</h2>
				<p>burası ürün açıklaması :)</p>
				'.(isset($_COOKIE['urun'][$urun]) ? '<a href="?cikart='.$urun.'">[sepetten çıkart]</a>' : '<a href="?ekle='.$urun.'">[sepete ekle]</a>').'
			</div>';
		}
	
	}
	
	/* sepete ürün ekle */
	if ( isset($_GET['ekle']) ){
		$id = $_GET['ekle'];
		setcookie('urun['.$id.']', $id, time() + 86400);
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}
	
	/* sepeti boşalt */
	if ( isset($_GET['bosalt']) ){
		foreach ( $_COOKIE['urun'] as $key => $val ){
			setcookie('urun['.$key.']', $key, time() - 86400);
		}
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}
	
	/* sepetten ürün çıkart */
	if ( isset($_GET['cikart']) ){
		setcookie('urun['.$_GET['cikart'].']', $_GET['cikart'], time() - 86400);
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}

?>

</body>
</html>