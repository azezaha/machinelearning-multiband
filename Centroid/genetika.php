<?php


//individu 8
$populasiBaru= array();
$answer=array();


	function getFitness(array $individu){
		global $dataset;
		$nilaiFitness=0;
		//var_dump($data['x']);
		for ($i=0; $i < 4 ; $i++) { 
			$mindis=999;
			foreach ($dataset as $data) {
				//var_dump($data['a']);
				$ans=sqrt(pow(($data['x']-$individu[$i*4]), 2)+pow(($data['y']-$individu[$i*4+1]), 2)+pow(($data['a']-$individu[$i*4+2]), 2)+pow(($data['b']-$individu[$i*4+3]), 2)+pow(($data['c']-$individu[$i*4+4]), 2));
				if($ans<$mindis){
					$mindis=$ans;
				}
			}
			$nilaiFitness+=$mindis;
		}
		return 1/$nilaiFitness;
		print_r($nilaiFitness);
	}

	function Randomroullete($maxVal,array $nilaiFitness){
		$maxVal=$maxVal*1000;
		$pilih=array();
		for ($i=0; $i < 20 ; $i++) { 
			$tmp=mt_rand(0,$maxVal);
			$choice=false;
			$count=0;
			$ambang=0;
			while (!$choice) {
				$ambang+=$nilaiFitness[$count]*1000;
				if($tmp<=$ambang){
					$choice=true;
				}else
					$count++;
			}
			$pilih[$i]=$count;
		}
		return $pilih;
	}

	function RiseNewPopulation(array $pilih,array $populasi){
		$populasiBaru=array();
		for ($i=0; $i < 20; $i++) { 
			$populasiBaru[$i]=$populasi[$pilih[$i]];
		}
		return $populasiBaru;
	}

	function Crossover(array $populasi){
		for ($i=0; $i < 10; $i++) { 
			if(mt_rand(1,10) < 8){
				 $min=mt_rand(0,6);
				 $max=mt_rand($min,7);
				for ($j=$min; $j <=$max ; $j++) { 
					$tmp=$populasi[$i*2][$j];
					$populasi[$i*2][$j]=$populasi[$i*2+1][$j];
					$populasi[$i*2+1][$j]=$tmp;
				}
			}
		}
		return $populasi;
	}

	function mutation(array $populasi){
		foreach ($populasi as $p) {
			if(mt_rand(1,10) < 2){
				$r=mt_rand(0,7);
				if(mt_rand(1,10)<6){
					if($p[$r]==0)
						$p[$r]=$p[$r]+2;
					else
						$p[$r]=$p[$r]-2;
				}else{
					if($p[$r]==160)
						$p[$r]=$p[$r]-2;
					else
						$p[$r]=$p[$r]+2;
				}
			}
		}
		return $populasi;
	}

	function Elitisme(array $old, array $new){
		$gabunganPopulasi=array_merge($old,$new);
		$nilaiFitness=array();

		for ($i=0; $i < sizeof($gabunganPopulasi); $i++) { 
			$nilaiFitness[$i]=getFitness($gabunganPopulasi[$i]);
		}

		for ($i=0; $i < sizeof($gabunganPopulasi); $i++) { 
			for ($j=$i+1; $j < sizeof($gabunganPopulasi); $j++) { 
				if($nilaiFitness[$i] < $nilaiFitness[$j]){
					$tmpFitness=$nilaiFitness[$i];
					$nilaiFitness[$i]=$nilaiFitness[$j];
					$nilaiFitness[$j]=$tmpFitness;

					$tempIndividu=$gabunganPopulasi[$i];
					$gabunganPopulasi[$i]=$gabunganPopulasi[$j];
					$gabunganPopulasi[$j]=$tempIndividu;
				}
			}

		}
		//rsort($gabunganPopulasi);
		$terpilih=array();
		for ($i=0; $i < sizeof($gabunganPopulasi)/2; $i++) { 
			array_push($terpilih, $gabunganPopulasi[$i]);
		}

		return $terpilih;
	}

	function solusi_terbaik(array $old, array $new){
		$gabunganPopulasi=array_merge($old, $new);
		$nilaiFitness=array();
		$ans=0;
		$tmp=0;
		for ($i=0; $i < sizeof($gabunganPopulasi) ; $i++) { 
			$nilaiFitness[$i]=getFitness($gabunganPopulasi[$i]);
		}

		for ($i=0; $i < sizeof($nilaiFitness); $i++) { 
			if($nilaiFitness[$i]>$tmp){
				$tmp=$nilaiFitness[$i];
				$ans=$i;
			}
		}
		//Rsort($gabunganPopulasi);
		return $gabunganPopulasi[$ans];
	}


?>