<!DOCTYPE html>
<html>
<body style="background-color:black;color:white">
</body>
</html>

<?php
$x = 10;
$x = "hello";
$y = 20;
$z = $y + 10;
$x = $x.$y;
$t = true;

echo $x;
echo $y;

if ($t == true) {
    echo "T is True";
}else{
    echo "T is False";
}
for ($i = 0; $i <10;$i++){
//    echo "<h2>i=".$i."</h2>";
//    echo "<p>i=$i</p>";
}

$arr = []; // array
$arr [0] = 50;
$arr [] = 125;
$arr [] = 225;
$arr [] = 25;
$arr [] = "world";

foreach ($arr as $key=>$item) {
    //$item <=> $arr[i]
    echo "<h3> key: $key = value: $item</h3>";
}
$sv = [];
$sv ["name"] = "hlong";
$sv ["age"] = 18;
$sv ["address"] = "hanoi";
echo $sv ["name"];
echo $sv ["age"];

foreach ($arr as $key=>$value){
    echo "key: $key = value: $value";
}

function sumAB($a,$b){
    echo "<p>".$a + $b."</p>";
}

sumAB(5,7);