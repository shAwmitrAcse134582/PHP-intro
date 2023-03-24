<?php
$name = array("shawmitra", "arnab", "kawshik", "sajal", "sanad");
sort($name);
for ($i = 0; $i < 5; $i++) {
    echo $name[$i] . " ";
}
echo "<br/>";
$roll = array(2, 3, 4, 5, 1, 8, 5, 6, 9);
sort($roll);
$len = count($roll);
for ($j = 0; $j < $len; $j++) {
    echo $roll[$j] . " ";
}
echo "<br/>";
rsort($roll);
for ($j = 0; $j < $len; $j++) {
    echo $roll[$j] . " ";
    echo "<br/>";
}
$age = array("shawmitra" => "22", "ashik" => "25", "sharif" => "30");
asort($age);
foreach ($age as $key => $value) {

    echo "key= " . $key . ",value=" . $value;
    echo "<br/>";
}
ksort($age);
foreach ($age as $key => $value) {

    echo "key= " . $key . ",value=" . $value;
    echo "<br/>";
}
?>