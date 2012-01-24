<?php
function divby3($in) {
	$num = 0;
	foreach(preg_split('//', $in, -1, PREG_SPLIT_NO_EMPTY) as $n) $num+=$n;
	if (strlen($num) > 1) return divby3($num);
	else return (in_array($num,array(3,6,9))?1:0);
}


echo divby3(501);