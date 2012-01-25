<?php
function getFiles($dir, $ignore = array()) {
	if (!is_dir($dir))return "Failure: Not a DIR ($dir)";
	$d = opendir($dir);
	$out = array();
	//comment
	while($f = readdir($d)) {
		if ($f == '..' || $f == '.' || in_array($f,$ignore))continue;
		if (is_dir($dir."/".$f))array_push($out,$f);
	}
	return $out;
}
$fi = getFiles('./');
sort($fi);
echo "<h3>Problems</h3><ul>";
foreach($fi as $dir) {
	echo "<li><a href='$dir'>Problem #$dir</a>   ".(file_exists("$dir/php.php")?"<a href='$dir/php.php'>Entry Exists</a>":'')."</li>";
}
echo "</ul>";