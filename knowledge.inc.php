<?php 
$a = 15;
$$a = 'переменная a';
$b = 20;
$$b = 'переменная b';
$number = 15;
$number_another = 14;
function in_range($num, $af, $bf) {
	$result = (($num >= $af) && ($num <= $bf)) ? ('число '.$num.' находится между '.$af.' и '.$bf) : ('число '.$num.' либо меньше '.$af.' либо больше '.$bf);
	return $result;
}
