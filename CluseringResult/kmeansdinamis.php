<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <form method="post" >

  <h1>Aplikasi Algoritma Clustering K-Means</h1>
  <h3>jumlah centroid:</h3>
  <input type="text" name="jumlahCentroid" > 
   <h3>Batas Minimal Random:</h3>
  <input type="text" name="MinRandom" >
   <h3>Batas Maximal Random:</h3>
  <input type="text" name="MaxRandom" >
  <br><br>
  <input type="submit" name="submit" value="submit">
</form> -->


<?php
error_reporting(0);
// if(isset($_POST['submit']))
// {
	
// 	$K = $_POST['jumlahCentroid'];
// 	$max = $_POST['MaxRandom'];
// 	$min = $_POST['MinRandom'];


	$txt_file   = file_get_contents('hasil_ekstrak.txt');
	$rows       = preg_split("/\r\n|\n\r/", $txt_file);
	$dataset	=array();
	$data       =array();
	$i=0;
	foreach($rows as $row => $data){
	    //get row dataset
	    
	    $row_data = explode(',', $data);
		$jum_data = count($row_data);

			//echo "awal centroid ".($i+1)." : ".$centroid[$i][0].", ".$centroid[$i][1]."<br/>";
			$row_data['index']=$i;
			array_push($dataset, $row_data);

	   //  $dataset[$i]['x']		= $row_data[0];
	   //  $dataset[$i]['y']		= $row_data[1];
	   // // $datasetset[$i]['class'] 	= $row_data[2];
	     $i++;
	}

// $csvdataset = file_get_contents('dataset.csv');
// $lines = explode("\n", $csvdataset);
// $dataset = array(array());
// foreach ($lines as $line) {
//     $dataset[] = str_getcsv($line);

// }
//print_r($dataset);


//tentukan K
$K = 6;
$centroid = array();
$newCentroid = array();
//centroid 1	
$centroid[0][0]=2;
$centroid[0][1]=1;
$centroid[0][2]=9;
$centroid[0][3]=25;
$centroid[0][4]=6;
//centroid 2
$centroid[1][0]=6;
$centroid[1][1]=5;
$centroid[1][2]=11;
$centroid[1][3]=10;
$centroid[1][4]=10;
//centroid 3
$centroid[2][0]=1;
$centroid[2][1]=6;
$centroid[2][2]=11;
$centroid[2][3]=20;
$centroid[2][4]=21;
//centroid 4
$centroid[3][0]=14;
$centroid[3][1]=22;
$centroid[3][2]=29;
$centroid[3][3]=9;
$centroid[3][4]=3;

$centroid[4][0]=1;
$centroid[4][1]=5;
$centroid[4][2]=9;
$centroid[4][3]=9;
$centroid[4][4]=6;

$centroid[5][0]=10;
$centroid[5][1]=17;
$centroid[5][2]=18;
$centroid[5][3]=19;
$centroid[5][4]=20;
//bangkitkan K random centroid
// for ($i=0; $i < $K; $i++) { 
// 	for ($j=0; $j < $jum_data; $j++) { 
// 			$centroid[$i][$j] =  rand($min,$max);

// 			//echo "awal centroid ".($i+1)." : ".$centroid[$i][0].", ".$centroid[$i][1]."<br/>";
// 			echo "centroid ".($i+1)."Data ".($j+1)."==".$centroid[$i][$j]."<br/>";
// 			}

// }
//hitug jarak
//var_dump($centroid);
	//echo("</br>");
$jumlah_looping_perdata = $jum_data;
echo($jumlah_looping_perdata."<br/");
$jmlLooping = 0;
do {
	$jmlLooping++;

	//looping cari tiap dataset pada masing-masing centroid  
	for ($i=0; $i < sizeof($dataset); $i++) { 
		$jarakMin = 1000; //init jarakMin
		//echo("nilai i".$i);
		//looping cari jarak dataset[$i] ke tiap centroid
		//$dist=array();
		for ($j=0; $j < sizeof($centroid); $j++) { 
			//distance antara dataset[$i] dan centroid[$j]
				//echo "| ".$dataset[$i][$j]."| "." | " ." ". " ".$dataset[$i][$j]."| "." ==  ".($j+1)."|"."<br/>";
				//echo("nilai j".$j);
				$jarak_awal = 0;
			for ($m=0; $m < $jumlah_looping_perdata; $m++){
				//echo("nilai m".$m);
					// echo " | " .$dataset[$i][$m]. " - " .$centroid[$j][$m]. " = " ;
					// $jarak_awal = $dataset[$i][$m] - $centroid[$j][$m];
					// echo($jarak_awal."<br/>");
					// $jarak_awal = 0;
				$jarak_awal = sqrt(pow($jarak_awal,2)+pow(($dataset[$i][$m]-$centroid[$j][$m]),2));

		
				}
				$dist = sqrt ($jarak_awal);
				//echo("Contoh variabel vardump dist");
				//var_dump($dist);
				//echo('<h1>'.$dist.'</h1>');
			//$dist = sqrt(pow($dataset[$i][$j] - $centroid[$j][0], 2) + pow($dataset[$i][$j] - $centroid[$j][1], 2));
			
			
			//jika jarakMin lebih besar dari dist
			if ($jarakMin > $dist) {
				//ganti jarakMin dengan dist terbaru
				$jarakMin = $dist;

				//$dataset[$i][2] adalah centroid pada $dataset[$i]
				$dataset[$i][$jumlah_looping_perdata] = $centroid[$j];
				
			}
		}
	}

	//inisialisasi newCentroid dengan nilai 0
	$jmldatasetCent = array();

	for ($i=0; $i < sizeof($centroid); $i++) { 
		for ($j=0; $j < $jum_data; $j++) { 
			$newCentroid[$i][$j] =  0;
			
			//echo "awal centroid ".($i+1)." : ".$centroid[$i][0].", ".$centroid[$i][1]."<br/>";
			//echo "centroid ".($i+1)."Data ".($j+1)."==".$centroid[$i][$j]."<br/>";
			}$jmldatasetCent[$i] = 0;
}

	// for ($i=0; $i < sizeof($centroid); $i++) {
	// 	$newCentroid[$i] = array(0,0,0,0);
	// 	$jmldatasetCent[$i] = 0;
	// }

	for ($i=0; $i < sizeof($dataset); $i++) {
		$cent = $dataset[$i][$jumlah_looping_perdata]; 
		for ($j=0; $j < sizeof($centroid); $j++) { 
			if ($cent == $centroid[$j]) {
				for ($k=0; $k < $jumlah_looping_perdata; $k++){
					$newCentroid[$j][$k] += $dataset[$i][$k];
				}
				// $newCentroid[$j][0] += $dataset[$i][$j];
				// $newCentroid[$j][1] += $dataset[$i][$j];

				$jmldatasetCent[$j]++;
			}
		}
	}

	for ($i=0; $i < sizeof($newCentroid); $i++) { 
		if ($jmldatasetCent[$i]>0) {
			 for ($k=0; $k < $jumlah_looping_perdata; $k++){
				$newCentroid[$i][$k] = $newCentroid[$i][$k]/ $jmldatasetCent[$i];
			 //$newCentroid[$i][0] = $newCentroid[$i][0] / $jmldatasetCent[$i];
			// $newCentroid[$i][1] = $newCentroid[$i][1] / $jmldatasetCent[$i];
			}
		}
	}

	for ($i=0; $i < sizeof($dataset); $i++) { 
		$cent = $dataset[$i][2];
		for ($j=0; $j < sizeof($centroid); $j++) { 
			if ($cent == $centroid[$j]) {
				$dataset[$i][$jumlah_looping_perdata] = $newCentroid[$j];
			}
		}
	}

	$sama = true;
	$ceksama = 0;
	for ($i=0; $i < $K; $i++) { 
		 for ($m=0; $m < $jumlah_looping_perdata; $m++){
			if ($newCentroid[$i][$m] != $centroid[$i][$m])
				$ceksama++;
		
		}
		if($ceksama > 0){
			$sama = false;
		}
	}

	$centroid = $newCentroid;

	for ($i=0; $i < sizeof($centroid); $i++) { 
		 for ($m=0; $m < $jumlah_looping_perdata; $m++){
		echo "Hasil Eucludian ".($i+1)."Data ".($m+1)."==".$centroid[$i][$m]."<br/>";
		}
		
	}echo "  <br/>";
	echo "  <br/>";



} while (!$sama);

//echo "Jumlah Looping Reposition Centroid = ".$jmlLooping."<br/><br/>";
echo "  <br/>";
echo "  <br/>";
echo " Cluster <br/>";

for ($i=0; $i < sizeof($dataset); $i++) { 
	$cent = $dataset[$i][$jumlah_looping_perdata];
	for ($j=0; $j < sizeof($centroid); $j++) {
			
		if ($cent == $centroid[$j]) {
			echo "| Data ke ".($i+1)."| "." | " ." ". "| "." ==  ".($j+1)."|"."<br/>";
			$result =$j+1;
			$string = $result."\n";
			file_put_contents('6Cluster.txt', $string,FILE_APPEND);
			//echo "Dataset ".$dataset[$i][$i+1]."| "." | " ." ". "| "." ==  ".($j+1)."|"."<br/>";	
		}
	}
}
//}

?>
