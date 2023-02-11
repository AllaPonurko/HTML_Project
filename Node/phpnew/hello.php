<?php
echo "Привет мир!"."</br>";
$ar4 = array("yellow"=>"banana", "red"=>"cherry", "green"=>"apple");
echo "Length of array is ".count($ar4)."</br>";
print_r($ar4);
echo "<hr>";
var_dump(json_encode($ar4));
phpinfo();