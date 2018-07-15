<?php
	include('get_ruspini.php');
	include('genetika.php');
	$populasi = array(array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		// array(rand(4,40),rand(53,72),rand(86,117),rand(90,29),rand(28,63),rand(120,29),rand(64,83),rand(4,30)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(4,40),mt_rand(53,72),mt_rand(86,117),mt_rand(90,29),mt_rand(28,63),mt_rand(120,29),mt_rand(64,83),mt_rand(4,30)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),
		// array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29)),

		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
		// array(rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29),rand(0,29)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					// array(rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160),rand(0,120),rand(0,160)),
					array(mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29),mt_rand(0,29))
					);
	
	$populasiBaru= array();
	$answer=array();
	$populasiawal=array();
	$populasiawal = $populasi[0];
	for ($i=0; $i < 100; $i++) { 
		$sumFitValue=0;
		$fitValue=array();
		for ($j=0; $j <sizeof($populasi) ; $j++) { 
			$sumFitValue+=$fitValue[$j]=getFitness($populasi[$j]);
		}
		print_r("Pembangkitan Awal Populasi pada setiap Generasi");
		echo"<br>";
		print_r("Individu 1 :");
		print_r($populasi[0]);
		echo"<br>";
		print_r("Individu 2 :");
		print_r($populasi[1]);
		echo"<br>";
		print_r("Individu 3 :");
		print_r($populasi[2]);
		echo"<br>";
		print_r("Individu 4 :");
		print_r($populasi[3]);
		echo"<br>";
		print_r("Individu 5 :");
		print_r($populasi[4]);
		echo"<br>";
		print_r("Individu 6 :");
		print_r($populasi[5]);
		echo"<br>";
		print_r("Individu 7 :");
		print_r($populasi[6]);
		echo"<br>";
		print_r("Individu 8 :");
		print_r($populasi[7]);
		echo"<br>";
		print_r("Individu 9 :");
		print_r($populasi[8]);
		echo"<br>";
		print_r("Individu 10 :");
		print_r($populasi[9]);
		// echo"<br>";
		echo"================================================================================";
		echo"<br>";
		print_r("Jumlah nilai fitness 1 :");
		print_r($fitValue[0]);
		echo"<br>";
		print_r("Jumlah nilai fitness 2 :");
		print_r($fitValue[1]);
		echo"<br>";
		print_r("Jumlah nilai fitness 3 :");
		print_r($fitValue[2]);
		echo"<br>";
		print_r("Jumlah nilai fitness 4 :");
		print_r($fitValue[3]);
		echo"<br>";
		print_r("Jumlah nilai fitness 5 :");
		print_r($fitValue[4]);
		echo"<br>";
		// print_r("Jumlah nilai fitness 6 :");
		// print_r($fitValue[5]);
		// echo"<br>";
		// print_r("Jumlah nilai fitness 7 :");
		// print_r($fitValue[6]);
		// echo"<br>";
		// print_r("Jumlah nilai fitness 8 :");
		// print_r($fitValue[7]);
		// echo"<br>";
		// print_r("Jumlah nilai fitness 9 :");
		// print_r($fitValue[8]);
		// echo"<br>";
		// print_r("Jumlah nilai fitness 10 :");
		// print_r($fitValue[9]);
		// echo"<br>";
		print_r($sumFitValue);
		echo"<br>";
		$selected=Randomroullete($sumFitValue,$fitValue);

		$populasi=RiseNewPopulation($selected,$populasi);
		echo"=======================Roulette Mesin=========================";
			echo"<br>";
		print_r("Pembangkitan Setelah Mesin roullete");
		echo"<br>";
		print_r($populasi[0]);
		echo"<br>";
		print_r($populasi[1]);
		echo"<br>";
		print_r($populasi[2]);
		echo"<br>";
		print_r($populasi[3]);
		echo"<br>";
		print_r($populasi[4]);
		echo"<br>";
		// print_r($populasi[5]);
		// echo"<br>";
		// print_r($populasi[6]);
		// echo"<br>";
		// print_r($populasi[7]);
		// echo"<br>";
		// print_r($populasi[8]);
		// echo"<br>";
		// print_r($populasi[9]);
		// echo"<br>";
		echo"================================================================================";
			echo"<br>";


		$populasiBaru=Crossover($populasi);
		$populasiBaru=mutation($populasiBaru);
		 echo"========================Setelah Mutasi==========================";
		 	echo"<br>";
		print_r("Pembangkitan Setelah Mutasi");
		echo"<br>";
		print_r($populasi[0]);
		echo"<br>";
		print_r($populasi[1]);
		echo"<br>";
		print_r($populasi[2]);
		echo"<br>";
		print_r($populasi[3]);
		echo"<br>";
		print_r($populasi[4]);
		echo"<br>";
		// print_r($populasi[5]);
		// echo"<br>";
		// print_r($populasi[6]);
		// echo"<br>";
		// print_r($populasi[7]);
		// echo"<br>";
		// print_r($populasi[8]);
		// echo"<br>";
		// print_r($populasi[9]);
		// echo"<br>";
		echo"================================================================================";
		echo"<br>";
		if($i<99){
		 	$populasi=Elitisme($populasi,$populasiBaru);
		 echo"========================Setelah Elistim==========================";
		 	echo"<br>";
		print_r("Pembangkitan Setelah Elistism");
		echo"<br>";
		print_r($populasi[0]);
		echo"<br>";
		print_r($populasi[1]);
		echo"<br>";
		print_r($populasi[2]);
		echo"<br>";
		print_r($populasi[3]);
		echo"<br>";
		print_r($populasi[4]);
		echo"<br>";
		// print_r($populasi[5]);
		// echo"<br>";
		// print_r($populasi[6]);
		// echo"<br>";
		// print_r($populasi[7]);
		// echo"<br>";
		// print_r($populasi[8]);
		// echo"<br>";
		// print_r($populasi[9]);
		echo"<br>";
		echo"================================================================================";
		echo"<br>";
	}
		else{
		 	$answer=solusi_terbaik($populasi,$populasiBaru);
		 
		 	print_r("Individu Terbaik sebagai Solusi  :");
		 	print_r($answer);
		}
	}


	



?>