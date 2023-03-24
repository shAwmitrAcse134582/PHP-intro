<!-- There are three types of array
1.Indexed array
2.Associative array
3.Multidimentional Array -->


<?php
// Indexed Array
$a = array(1, 2, 3, 4, 5, 6);
$a[6] = 7;
echo $a[6];
echo count($a);
echo "<br/>";
for ($i = 0; $i < count($a); $i++) {
    echo $a[$i];
}
//associative array
$age = array("shawmitra" => "22", "ashik" => "25", "sharif" => "30");
foreach ($age as $m => $value) {

    echo "key= " . $m . ",value=" . $value;
    echo "<br/>";
}
//multidimentional array
$cars = array(

    array("BMW", 15),
    array("volvo", 30),
    array("Saab", 50),
);

for ($row = 0; $row < 3; $row++) {
    echo "<p>row number $row</p>";

    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }

    echo "</ul>";

}

?>