<?php
	$txt_file   = file_get_contents('6Cluster.txt');
	$rows       = explode("\n", $txt_file);
	$dataawal	=array();
	$i=0;
	foreach($rows as $row => $data){
	    //get row data
	    
	    $row_data = explode(',', $data);
	    $dataawal[$i]= $row_data[0];
	 
	    $i++;
	}

  $txt_file   = file_get_contents('hasil_ekstrak.txt');
  $rows       = explode("\n", $txt_file);
  $dataset  =array(array());
  $i=0;
  foreach($rows as $row => $data){
      //get row data
      
      $row_data = explode(',', $data);
      $dataset[$i]['a']   = $row_data[0];
      $dataset[$i]['b']   = $row_data[1];
      $dataset[$i]['c']   = $row_data[2];
      $dataset[$i]['d']   = $row_data[3];
      $dataset[$i]['e']   = $row_data[4];
      $dataset[$i]['f']   = $row_data[5];
     // $dataset[$i]['class']   = $row_data[2];
   
      $i++;
  }
$datapixel=array(array());
	for ($y = 0; $y <32; $y++) { 
              for ($x = 0; $x <32; $x++) { 
      // $datapixel[$y][$x]=$dataset[$x+($y*32)]['x'];
       $datapixel[$y][$x]=$dataawal[$x+($y*32)];
       $result =$dataset[$x+($y*32)]['a'].",".$dataset[$x+($y*32)]['b'].",".$dataset[$x+($y*32)]['c'].",".$dataset[$x+($y*32)]['d'].",".$dataset[$x+($y*32)]['e'].",".$datapixel[$y][$x];
         $string = $result."\n";
          file_put_contents('hasil6cluster.txt', $string,FILE_APPEND);
       	//var_dump($dataset[$x*$y]['x']);
       }
   }
//var_dump($datapixel);

	$gd=imagecreatetruecolor(32, 32);
	$warna1=imagecolorallocate($gd, 255, 0, 0);//merah
	$warna2=imagecolorallocate($gd, 0, 0, 255);//biru
	$warna3=imagecolorallocate($gd, 0, 255, 0);//hijau
	$warna4=imagecolorallocate($gd, 255, 255, 15);//kuning
	$warna5=imagecolorallocate($gd, 64, 0, 128);//ungu
       $warna6=imagecolorallocate($gd, 255, 128, 0);//orange
for ($y = 0; $y <32; $y++) { 
       for ($x = 0; $x <32; $x++) {
       	if( $datapixel[$y][$x]==1){
       		
       			imagesetpixel($gd, $x, $y, $warna1);
       	}
       	elseif( $datapixel[$y][$x]==2){
       			imagesetpixel($gd, $x, $y, $warna2);
       	}
       	elseif( $datapixel[$y][$x]==3){
       			imagesetpixel($gd, $x, $y, $warna3);
       	}
       	elseif($datapixel[$y][$x]==4){
       			imagesetpixel($gd, $x, $y, $warna4);
                     }
              elseif($datapixel[$y][$x]==5){
                            imagesetpixel($gd, $x, $y, $warna5);
       	}
       	else
              imagesetpixel($gd, $x, $y, $warna6);
	}
}
header('Content-Type: image/png');
imagepng($gd);
?>