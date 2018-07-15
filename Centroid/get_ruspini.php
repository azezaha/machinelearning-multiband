<?php
	$txt_file   = file_get_contents('coba.csv');
	$rows       = explode("\n", $txt_file);
	$dataset	=array(array());
	$i=0;
	foreach($rows as $row => $data){
	    //get row data
	    
	    $row_data = explode(',', $data);
	    $dataset[$i]['x']		= $row_data[0];
	    $dataset[$i]['y']		= $row_data[1];
	    $dataset[$i]['a']		= $row_data[2];
	    $dataset[$i]['b']		= $row_data[3];
	    $dataset[$i]['c']		= $row_data[4];
	    $dataset[$i]['d']		= $row_data[5];
	   //	$dataset[$i]['class'] 	= $row_data[2];
	    $i++;
	}
?>