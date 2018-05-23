<?php 

$details = R::find('about', 1);
// print_r($details);

$aboutName = $details [1]['name'];
$aboutDescription = 	$details [1]['description'];


// echo "Hi this is module Main and main page";

include ROOT. "templates/_parts/_header.tpl";
include ROOT. "templates/main/main.tpl";
include ROOT. "templates/_parts/_footer.tpl";

?>