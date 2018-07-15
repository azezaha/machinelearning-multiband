<?php include('getdata.php')?>
<!DOCTYPE HTML>
<html>
<head>
<!--<h3>Klusterisasi Multiband Image Clustering</h3>-->
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
					text: "Clustering Multiband menggunakan Kmeans dengan Optimasi GA"
				},
				data: [{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "red",
					 markerColor: "red",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}<br>{x}:{y}",
              
				name: "Cluster 1",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==1)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
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
              
				name: "Cluster 2",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==2)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
						}

					?>
					
					]
				},

				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "green",
					 markerColor: "green",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "Cluster 3",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==3)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
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
              
				name: "Cluster 4",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==4)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
						}

					?>
					
					]
				},

				{
					type: "scatter",
					markerType: "circle", 
					legendMarkerColor: "purple",
					 markerColor: "purple",
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "Cluster 5",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==5)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
						}

					?>
					
					]
				},
				{
					type: "scatter",
					markerType: "circle",
					legendMarkerColor: "orange",
					 markerColor: "orange", 
              toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				name: "Cluster 6",
				showInLegend: true,  
					dataPoints: [
					<?php 
						
						foreach($dataset as $x){
							if($x['class']==6)
							echo "{ x: ".$x['x'].", y: ".$x['b']."},";
						}

					?>
					
					]
				},
				// {
				// 	type: "scatter",
				// 	markerType: "square", 
				// 	 legendMarkerColor: "purple",
				// 	 markerColor: "purple",
    //           toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong><br>{x}:{y}",
              
				// name: "Centroid",
				// showInLegend: true,  
				// 	dataPoints: [
				// 	// <?php 
						
				// 	// 	for ($i=0; $i < 4; $i++) {
				// 	// 		echo "{ x: ".$answer[$i*2].", y: ".$answer[$i*2+1]."},";
				// 	// 	}

				// 	// ?>
					
					
				// 	]
				// }
				]
			});
			chart.render();
		}
	</script>
	<script src="canvasjs.min.js"></script>
	<title>Pembangkitan Centroid pada Kmeans dengan Optimasi GA</title>
</head>

<body>
<div class="card">
 			 
 			    
  				<div class="container">
   			 
  </div>
</div>
<div id="chartContainer" style="height: 400px; width: 90%;"></div>

	
</div>
</body>
<style>
.chartContainer{
	padding : 10px;
}
.card {
    /* Add shadows to create the "card" effect */
    //box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    padding : 20px;
    width: 100%;
    height : 20%;
}

/* On mouse-over, add a deeper shadow */

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
.card_bottom {
    /* Add shadows to create the "card" effect */
    //box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    padding : 20px;
    width: 90%;
    //height : 20%;
}

/* On mouse-over, add a deeper shadow */


/* Add some padding inside the card container */
.container_bottom {
    padding: 2px 16px;
    height : 100px;
}


</style>
</html>