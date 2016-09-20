<?php
/**
while的使用
可以方便的输出n行*
*/
$new_line = "<br/>";


$i = 10;

while ($i > 0) {
	echo "*" . $new_line;
	// $i = $i - 1;
	$i--;
}


$count = 1;
$count++;   //  $count = $count + 1