<?php
$a = 12.2;
var_dump($a);

$b = 10;
var_dump($b);

$s = "Shawmitra";
var_dump($s);

$bool = true;
var_dump($bool);

$ar = array(10, 20, 30, 40);
var_dump($ar);

class student
{
    function department()
    {
        return "physics";
    }
    function deteils()
    {
        echo $this->department();
    }
}
$st = new student();
$st->deteils();

?>