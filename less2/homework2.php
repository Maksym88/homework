<?php
$a = 3;
echo $a;
echo "<br>";

$a = 10;
$b = 2;
echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";


$c = 15;
$d = 2;
$result = $c + $d;
echo $result. "<br>";

$a = 10;
$b = 2;
$c = 5;
$result = $a + $b + $c;
echo $result."<br>";

$a = 17;
$b = 10;
$d = 7;
$c = $a+$b;
$result = $d + $c;
echo $result."<br>";
echo "<hr>";

$text = 'Hello, world';
echo $text."<br>";

$text1 = 'Hello,';
$text2 = 'world';
echo $text1.$text2."<br>";
echo "<hr>";

echo 60 * 60;
echo "<br />";
echo 60 * 60 * 24;
echo "<br />";
echo 60 * 60 * 24 * 7;
echo "<br />";
echo 60 * 60 * 24 *7 * 30;
echo "<br />";
echo "<br />";

$var = 1;
$var = $var += 12;
$var = $var -= 14;
$var = $var *= 5;
$var = $var /= 7;
$var = $var += 1;
$var = $var -= 1;
echo $var;
echo "<br />";
echo "<br />";

$hour = 20;
$minuts = 21;
$second = 13;
echo $hour.':'.$minuts.':'.$second;
echo "<br />";

$text3 = 'Я';
$text3 .= $text3. 'хочу';
$text3 .= $text3. 'знать';
$text3 .= $text3. 'php';
echo $text3;
echo "<br />";


$foo = 'bar';
$bar = 10;
$foo = $bar;
echo $foo;
echo "<br />";

$a = 6;
$b = 4;
echo $a + $b. "<br>";
echo $a - $b. "<br>";

$result = $a * $a + $b * $b;
echo $result;
echo "<br>";

$a = 20;
$b = 22;
$c = 24;
$result = ($a + $b + $c) / 3;
echo $result;
echo "<br>";

$x = 1;
$y = 2;
$z = 3;
$result = ($x+1)-2*($z-2*$x-$y);
echo $result;
echo "<br>";

$a = 15;
$result = $a % 3;
echo $result;
echo "<br>";
$result1 = $a % 5;
echo $result1;
echo "<br>";

$a = 20;
$a += $a * 0.3;
echo $a."<br>";
$a = 20;
$a += $a * 1.2;
echo $a."<br>";


$a = 48;
$b = 88;
$a += $a * 0.4;
$b += $b * 0.84;
echo $a."<br>".$b;
echo "<br>";
echo "<br>";
########################################################################

$lang = array('ru'=>array('ru'=>'пн','вт','ср','чт','пт','сб','вс'),'en'=>array('en'=>'mn','ts','wb','th','fr','st','sn'));

if($lang['ru']['ru'] == 'пн'){
    print_r($lang['ru']);
}elseif ($lang['en']['en']=='mn'){
    print_r($lang['en']);
}else echo 'Days week';
echo "<br>";
echo "<br>";

echo ($lang['ru']['ru'] == 'пн')?"вывод дней недели на русской языке":
    ($lang['en']['en']=='mn')?'Days week!':'woooowww!!';
echo "<br>";
echo "<br>";

switch ($lang) {
    case ($lang['ru']['ru'] == 'пн'):
        print_r($lang['ru']);
        break;
    case ($lang['en']['en']=='mn'):
        print_r($lang['en']);
        break;
}
echo "<br>";
echo "<br>";

$month = rand(1, 12);
if (($month > 0) && ($month < 6)){
    echo 'winter, spring';
}elseif (($month > 6) && ($month <=12)) {
    echo 'summer, autumn';
}else echo 'WTF ??';
echo "<br>";
echo "<br>";

echo (($month > 0) && ($month < 6))? 'winter, spring': (($month > 6) && ($month <=12))? 'summer, autumn': 'WTF??';
echo "<br>";
echo "<br>";

switch ($month){
    case (($month > 0) && ($month < 6)):
        echo 'winter, spring';
        break;
    case (($month > 6) && ($month <=12)):
        echo 'summer, autumn';
        break;
}
echo "<br>";
echo "<br>";

$minuts = rand(1,59);
if (($minuts > 0) && ($minuts < 15)){
    echo 'первая четверть';
}elseif (($minuts > 15) && ($minuts <30)) {
    echo 'Вторая четверть';
}elseif (($minuts > 30) && ($minuts <45)) {
    echo 'третья четверть';
}elseif (($minuts > 45) && ($minuts <60)) {
    echo 'четвертая четверть';
}else echo 'WTF ??';
echo "<br>";
echo "<br>";

echo (($minuts > 0) && ($minuts < 15)) ? 'первая четверть' :
    (($minuts > 15) && ($minuts < 30)) ? 'Вторая четверть' :
        (($minuts > 30) && ($minuts < 45)) ? 'третья четверть' :
            (($minuts > 45) && ($minuts < 60)) ? 'четвертая четверть' : 'WTF ??';
echo "<br>";
echo "<br>";

switch ($minuts){
    case (($minuts > 0) && ($minuts < 15)):
        echo 'первая четверть';
        break;
    case (($minuts > 15) && ($minuts < 30)):
        echo 'Вторая четверть';
        break;
    case (($minuts > 30) && ($minuts < 45)):
        echo 'третья четверть';
        break;
    case (($minuts > 45) && ($minuts < 60)):
        echo 'четвертая четверть';
        break;
}
echo "<hr>";
echo "<br>";
echo "<br>";

$a = 5;
if (($a == 0) || ($a == 2)){
    echo $a + 7;
}else{
    echo $a / 10;
    echo "<br>";

}$a = 0;
if (($a == 0) || ($a == 2)){
    echo $a + 7;
}else{
    echo $a / 10;
}
echo "<br>";

$a = -3;
if (($a == 0) || ($a == 2)){
    echo $a + 7;
}else{
    echo $a / 10;
}
echo "<br>";

$a = 2;
if (($a == 0) || ($a == 2)){
    echo $a + 7;
}else{
    echo $a / 10;
}
echo "<br>";
echo "<br>";


$a = 5;
echo (($a == 0) || ($a == 2)) ? $a + 7:$a / 10;
echo "<br>";

$a = 0;
echo (($a == 0) || ($a == 2)) ? $a + 7:$a / 10;
echo "<br>";

$a = -3;
echo (($a == 0) || ($a == 2)) ? $a + 7:$a / 10;
echo "<br>";

$a = 2;
echo (($a == 0) || ($a == 2)) ? $a + 7:$a / 10;
echo "<br>";
echo "<br>";

$a = 5;
switch ($a) {
    case (($a == 0) || ($a == 2)):
        echo $a + 7;
        break;
    default: echo $a / 10;

}
echo "<br>";

$a = 0;
        switch ($a){
            case (($a == 0) || ($a == 2)):
                echo $a / 10;
                break;
            default: echo $a + 7;

}
echo "<br>";

$a = -3;
switch ($a){
    case (($a == 0) || ($a == 2)):
        echo $a + 7;
        break;
    default: echo $a / 10;
}
echo "<br>";

$a = 2;
switch ($a){
    case (($a == 0) || ($a == 2)):
        echo $a + 7;
        break;
    default: echo $a / 10;
}
echo "<br>";
echo "<br>";

$a = 1;
$b = 3;
if (($a<=1) && ($b>=3)){
    echo $a + $b;
}else echo $a - $b;
echo "<br>";

$a = 0;
$b = 6;
if (($a <=1) && ($b >=3)){
    echo $a + $b;
}else echo $a - $b;
echo "<br>";

$a = 3;
$b = 5;
if (($a <=1) && ($b >=3)){
    echo $a + $b;
}else echo $a - $b;
echo "<br>";

$a = 1;
$b = 3;
echo (($a <=1) && ($b >=3)) ? $a + $b:$a - $b;
echo "<br>";


$a = 0;
$b = 6;
echo (($a <=1) && ($b >=3)) ? $a + $b:$a - $b;
echo "<br>";

$a = 3;
$b = 5;
echo (($a <=1) && ($b >=3)) ? $a + $b:$a - $b;
echo "<br>";

$a = 1;
$b = 3;
switch ($a . $b){
    case (($a <=1) && ($b >=3)):
        echo $a + $b;
        break;
    default: echo $a - $b;
}
echo "<br>";

$a = 0;
$b = 6;
switch ($a . $b) {
    case (($a <= 1) && ($b >= 3)):
        echo $a + $b;
        break;
    default:
        echo $a - $b;
}
echo "<br>";

$a = 3;
$b = 5;
switch ($a . $b) {
    case (($a <= 1) && ($b >= 3)):
        echo $a + $b;
        break;
    default: echo $a - $b;
}
echo "<br>";
echo "<br>";

$a = 10;
if ($a % 2 == 0){
    echo 'Fizz';
}else echo 'Buzz';
echo "<br>";

$a = 14;
$b = 28;
$c = 42;

if (($a % 2 == 0) && ($b % 2 == 0) && ($c % 2 == 0)){
    echo 'Fizz';
}elseif (($a % 7 == 0) && ($b % 7 == 0) && ($c % 7 == 0)) {
    echo 'Buzz';
} elseif (($a % 2 == 0) && ($a % 7 == 0)){
    echo 'Fizz-Buzz';
}elseif (($b % 2 == 0) && ($b % 7 == 0)){
    echo 'Fizz-Buzz';
}elseif (($c % 2 == 0) && ($c % 7 == 0)){
    echo 'Fizz-Buzz';
}else echo 'WTF??';
echo "<br>";
echo "<br>";


for ($i = 1; $i <= 30; $i++)
    if ($i % 3 == 0) {
        echo "Fizz  <br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz  <br>";
    } elseif (($i % 3 == 0) && ($i % 5 == 0)) {
        echo "Fizz-Buzz  <br>";
    } else echo $i. "<br>";
?>