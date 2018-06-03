<?php
    $lukujono = "8,65,5,32,76,8,43,32,47,9,34,432,8,9,54,2,54,67,7,332,76,8";
    $taulukko = explode(',',$lukujono);
   
	# Pienimmästä suurimpaan
	for($i = 0; $i < count($taulukko); $i++){
		for($j = 0; $j < count($taulukko); $j++){
			
				if($taulukko[$j] > $taulukko[$i]){
					$temp = $taulukko[$j];
					$taulukko[$j] = $taulukko[$i];
					$taulukko[$i] = $temp;
				}
				
		}
		$pienin_suurin = implode(',', $taulukko);
	}

	# Suurimmasta pienimpään
	for($i = 0; $i < count($taulukko); $i++){
		for($j = 0; $j < count($taulukko); $j++){
			
				if($taulukko[$j] < $taulukko[$i]){
					$temp = $taulukko[$j];
					$taulukko[$j] = $taulukko[$i];
					$taulukko[$i] = $temp;
				}
				
		}
		$suurin_pienin = implode(',', $taulukko);
	}

	echo "Järjestys aluksi: $lukujono <br/><br/>";
	echo "Suurimmasta pienimpään: $suurin_pienin <br/><br/>";
	echo "Pienimmästä suurimpaan: $pienin_suurin";
?>
