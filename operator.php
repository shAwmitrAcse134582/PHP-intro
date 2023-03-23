<!-- there are 7 operator in PHP
1.Arithmatic operator(+,-,/,%)
2.Assignment operator(=)
3.Comparision operator(===,!==,<,>)
4.Increment/Decrement operator(++,--)
5.string operator
6.Logical operator(||,&&)
7.Array operator -->
<?php
$a = 5;
$b = 10;
echo $a + $b;
echo "<br/>";
if ($a == $b)
    echo "Equal value";
else
    echo "Not equal";
echo "<br/>";

$s = "shawmitra";
$t = "Das";
$z = $s . $t;
echo $z;
echo "<br/>";

$ar = array(1, 2, 3, 4, 5);
$arr = array(6, 7, 8, 9);

var_dump(($ar + $arr));

$p = array("name" => "shawmitra", "roll" => "20CSE033");
var_dump($p);

?>