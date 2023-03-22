<?php
// echo "hello!";
// $name = "Shawmitra das dwip";
// $age = 21;
// $weight = 70;
// echo "Name is " . $name . "and age is: " . $age;

function isPrime($v)
{
    for ($i = 2; $i * $i < $v; $i++) {
        if ($v % $i == 0) {
            return 0;
        } else
            return 1;
    }
}

$age = array(18, 19, 20, 21, 20, 23, 24, 18, 25);
$sum = 0;
foreach ($age as $x) {
    if (isPrime($x)) {
        $sum += $x;
    }

}
echo $sum;
?>