<?php include('main.php')?>

<!DOCTYPE HTML>
<html>
<head>
<h3>Optimasi Kmeans dengan GA</h3>
	<script type="text/javascript">
		window.onload = function () {
			// CanvasJS.addColorSet("greenShades",
   //              [//colorSet Array

   //              "#2F4F4F",
   //              "#008080",
   //              "#2E8B57",
   //              "#3CB371",
   //              "#90EE90"                
   //              ]);
			var chart = new CanvasJS.Chart("chartContainer", {
				title: {
					text: "Hasil Pembangkitan Centroid dengan GA"
				},
				data: [{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "brown",
					 markerColor: "brown",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}<br>{x}:{y}",
              
				name: "individu kelas 1",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==1)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "blue",
					 markerColor: "blue",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 2",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==2)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "red",
					 markerColor: "red",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 3",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==3)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle",
					legendMarkerColor: "yellow",
					 markerColor: "yellow", 
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 4",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==4)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "square", 
					 legendMarkerColor: "purple",
					 markerColor: "purple",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "Centroid",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						for ($i=0; $i < 4; $i++) {
							echo "{ x: ".$answer[$i*2].", y: ".$answer[$i*2+1]."},";
						}

					?>
					
					]
				}
				]
			});
			chart.render();
		}
		
	</script>
	<script src="canvasjs.min.js"></script>
	<title>Optimasi Pembangkitan Centroid pada Kmeans dengan GA</title>


	<script type="text/javascript">
		window.onload = function () {
			// CanvasJS.addColorSet("greenShades",
   //              [//colorSet Array

   //              "#2F4F4F",
   //              "#008080",
   //              "#2E8B57",
   //              "#3CB371",
   //              "#90EE90"                
   //              ]);
			var chart = new CanvasJS.Chart("chartContainer1", {
				title: {
					text: "Hasil Pembangkitan Centroid dengan GA"
				},
				data: [{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "brown",
					 markerColor: "brown",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}<br>{x}:{y}",
              
				name: "individu kelas 1",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==1)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "blue",
					 markerColor: "blue",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 2",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==2)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "red",
					 markerColor: "red",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 3",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==3)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle",
					legendMarkerColor: "yellow",
					 markerColor: "yellow", 
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "individu kelas 4",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==4)
							echo "{ x: ".$x['x'].", y: ".$x['y']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "square", 
					 legendMarkerColor: "purple",
					 markerColor: "purple",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "Centroid",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						for ($i=0; $i < 4; $i++) {
							echo "{ x: ".$populasiawal[$i*2].", y: ".$populasiawal[$i*2+1]."},";
						}

					?>
					
					]
				}
				]
			});
			chart.render();
		}
	</script>
	<script src="canvasjs.min.js"></script>
	<title>Optimasi Pembangkitan Centroid pada Kmeans dengan GA</title>
</head>

<body>
	<div id="chartContainer" style="height: 500px; width: 90%;"></div>
	<div id="chartContainer1" style="height: 500px; width: 90%;"></div>
		

</body>

</html>