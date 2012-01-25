<pre><?php
function divby0($in) { return 'ERROR'; }
function divby1($in) { return 1; }
function divby2($in) { return (pow(-1,$in) == 1?1:0); }
function divby3($in) {
	do {
		$num = 0;
		for ($i=0;$i<strlen($in);$i++) $num = $num + substr($in,$i,1);
		$in = $num;
	} while(strlen($num) > 1);
	return (in_array($num,array(3,6,9))?1:0);
}
function divby4($in) { return (substr($in,-2)%4==0?1:0); }
function divby5($in) { return (in_array(substr($in,-1),array(0,5))?1:0); }
function divby6($in) { return (divby2($in)?(divby3($in)?1:0):0); }
function divby7($in) {
	do {
		$num = (3 * substr($in,0,strlen($in)-1)) + substr($in,-1);
		$in = $num;
	} while (strlen($num) > 1);
	return ($num == 7)?1:0;
}
function divby8($in) { return (substr($in,-3)%8==0?1:0); }
function divby9($in) {
	do {
		$num = 0;
		foreach(preg_split('//', $in, -1, PREG_SPLIT_NO_EMPTY) as $n) $num+=$n;
	} while (strlen($num) > 1);
	return ($num == 9)?1:0;
}
function divby10($in) { return (substr($in,-1) == 0?1:0); }


$nu = $_GET['n'];
echo "$nu\n_____\n0: ";
echo divby0($nu);
echo "\n1: ";
echo divby1($nu);
echo "\n2: ";
echo divby2($nu);
echo "\n3: ";
echo divby3($nu);
echo "\n4: ";
echo divby4($nu);
echo "\n5: ";
echo divby5($nu);
echo "\n6: ";
echo divby6($nu);
echo "\n7: ";
echo divby7($nu);
echo "\n8: ";
echo divby8($nu);
echo "\n9: ";
echo divby9($nu);
echo "\n10: ";
echo divby10($nu);