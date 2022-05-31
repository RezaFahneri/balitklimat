<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laptop</title>
</head>
<body>
	<?php
	//membuat claass
	class Laptop{
		//properti dari class laptop
		var $merek;
		var $ukuran_layar;
		//membuat method untuk manggil class
		function cetakLaptop(){
			return $this->merek." ";
		}
	}
	//membuat objek dari class laptop (instansiasi)
	$beli_Laptop = new Laptop();

	//set properti / Memasukkan nilai properti kedalam objek 
	$beli_Laptop->merek="HP";
	
	//supaya tampil maka di echo
	echo $beli_Laptop->cetakLaptop();
	?>
	<div class="container">
		<img src="assets/images/logoasn.png" alt="" style="width: 120px;">
	</div>
</body>
</html>