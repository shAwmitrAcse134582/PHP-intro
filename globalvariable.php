<!-- global Variable
1.$GLOBALS
2.$_SERVER
3.$_REQUEST
4.$_POST
5.$_GET
6.$_FILE
7.$_ENV
8.$_COOKIE
9.$_SESSION -->


<?php
$x = 5;
$y = 10;
function sum()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
sum();
echo $z;

echo $_SERVER['PHP_SELF'];
echo "<br/>";
echo $_SERVER['HTTP_USER_AGENT'];

?>