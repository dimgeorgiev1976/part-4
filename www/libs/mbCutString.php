<?php 	

function mbCutString($string, $length, $postfix = '...', $encoding = 'UTF-8' ){

	if ( mb_strlen($string, $encoding) <= $length ) {
		return $string;
	}

	$temp = mb_substr($string, 0, $length, $encoding);
	$spacePosition = mb_strripos($temp, " ", 0, $encoding);
	$result = mb_substr($temp, 0, $spacePosition, $encoding) . "...";
	return $result;

}


 ?>