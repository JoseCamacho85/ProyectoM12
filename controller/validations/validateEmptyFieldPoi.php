<?php

function emptyField ($text) {
	$validation=true;
	if(empty($text)){		
		$validation=false;
	}
	else{
		$validation=true;
	}
	return $validation;
}

?>
