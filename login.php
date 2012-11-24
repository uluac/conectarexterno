<?php
	if(isset($_POST['name'])){
		if($_POST['name']=='Carlos'){
			if($_POST['password']=='123'){
				$env = 1;	
			}else{
				$env = -1;	
			}
		}else{
			$env = -2;
		}
	}else{
		$env = 0;	
	}
	echo json_encode($env);
?>