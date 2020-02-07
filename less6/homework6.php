<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()){
    printf("Connect failed : %s\n", mysqli_connect_error());
    exit();
}
$massivGroup = [];
$read = "SELECT * FROM test_user";

if ($result = $mysqli->query($read)) {
    while ($obj = $result->fetch_assoc()) {
        $massivGroup[] = $obj;
    }п
    $result->close();
}
$mysqli->close();

function messege($name){
    return 'Поздравляю, '.$name .' с прекрасным днем весны!';
}
foreach ($massivGroup as $arr){
    if ($arr ['gender'] =='ж'){
        echo messege($arr['last_name'])."<br>";
    }
}
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////
function col(){
    echo func_num_args();

}
col(12, 6, 123);
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////
function data($a){
    for ($i = 1; $i <= $a; $i++){
        switch ($a) {
            case ($a == 1):
                echo 'понедельник';
                break;
            case ($a == 2):
                echo 'вторник';
                break;
            case ($a == 3):
                echo 'среда';
                break;
            case ($a == 4):
                echo 'четверг';
                break;
            case ($a == 5):
                echo 'пятница';
                break;
            case ($a == 6):
                echo 'суббота';
                break;
            case ($a == 7):
                echo 'воскресенье';
                break;

        }
        break;
    }
    return 0;
}
$data = date('w');
data($data);
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////
function data1($a){
    $arr = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    $data = date('w');
    foreach ($arr as $key => $value){
        switch ($arr){
        case ($data == $key):
            echo $arr[$data];
            break;
        }
    }
    return 0;
}
data1($data);
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////
function data2($a){
    $arr = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    $count = count($arr);
    $data = date('w');
    $i = 0;
    while ($i++<$count){
    switch ($arr){
        case ($data == $i):
            echo $arr[$i];
            break;
    }
}
return 0;
}
data2($data);
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////
$arr = [22, 33, 7, 44, 88];
$count = count($arr);
$min = $max = $arr[0];
$indexMin = $indexMax = 0;
for ($i = 1; $i <= $count; $i++) {
    if ($arr[$i] > $max) {
        $indexMax = $i;
        $max = $arr[$i];
    }else
        if ($arr[$i] == $min){
            $indexMin = $i;
            $min = $arr[$i];
        }
}
echo "Максимальное число $arr[$indexMax] <br>";
echo "Минимальное число $arr[$indexMin] <br>";
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////
$arr = [22, 33, 7, 44, 88];
$count = count($arr);
$min = $max = $arr[0];
$indexMin = $indexMax = 0;
$i = 0;
while($i++ <= $count) {
    if ($arr[$i] > $max) {
        $indexMax = $i;
        $max = $arr[$i];
    }else
        if ($arr[$i] == $min){
            $indexMin = $i;
            $min = $arr[$i];
        }
}
echo "Максимальное число $arr[$indexMax] <br>";
echo "Минимальное число $arr[$indexMin] <br>";
echo "<br>";
//////////////////////////////////////////////////////////////
$arr = [22,33,44,88];
$min = $max = $arr[0];
$indexMin = $indexMax = 0;
foreach ($arr as $key => $value){
    if ($arr[$key] > $max) {
        $indexMax = $key;
        $max = $arr[$key];
    }else
        if ($arr[$key] == $min){
            $indexMin = $key;
            $min = $arr[$key];
        }
}
echo "Максимальное число $arr[$indexMax] <br>";
echo "Минимальное число $arr[$indexMin] <br>";
//////////////////////////////////////////////////////////////
$arr = [6, 5, 4, 1, 0 , 77, 45];
$count = count($arr);

for ($i = 0; $i <= $count; $i++){
    for ($j = $i + 1; $j <= $count; $j++){
        if ($arr[$i] > $arr[$j]) {
            $smena = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $smena;
        }
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
//////////////////////////////////////////////////////////////
$arr = [4, 5, 6, 1, 0 , 45, 77];
$count = count($arr);

$i = 0;
while ($i < $count){
    $j = $i + 1;
    while ($j < $count){
        if ($arr[$i] >= $arr[$j]){
            $smena = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $smena;
        }
        $j++;
    }
    $i++;
}
echo "<pre>";
print_r($arr);
//////////////////////////////////////////////////////////////
$arr = [4, 5, 6, 1, 0 , 45, 77];
foreach ($arr as $key => $value) {
    foreach ($arr as $k => $v)
        if ($arr[$key] < $arr[$k]){
            $smena = $arr[$k];
            $arr[$k] = $arr[$key];
            $arr[$key] = $smena;
        }
}
echo "<pre>";
print_r($arr);
echo "<br>";
//////////////////////////////////////////////////////////////////
$array = ['string', 'age', 'name', 'programmer'];
$massiv = ['integer', 'february', 'teamlead', 'middle'];
$len = count($array);
$len1 = count($massiv);

for ($i = 0; $i <= $len; $i++) {
    for ($j = 0; $j <= $len1; $j++){
        if ($array[$i] > $massiv[$j]) {
            $str = strlen($array[$i]);
            $str1 = strlen($massiv[$j]);

        }
    }
}








/////////////////////////////////////////////////////////////////////
function kurer($z){
    $x = 9; //этажность дома.
    $y = 4; //кол квартир на этаж.


    $k = $z - 1; //уменьшаем искомую кв на -1
    $l = $x * $y; // сразу посчитаем кол квартир на подьезд

    $p = $k / $l + 1; //вычесляем нужный подьезд
    $e = ($k - ((int)$p - 1) * $l) / $y + 1; //вычесляем нужный этаж

    echo (int)$p, "<br>", (int)$e; // приводим к int  т.к. нужно целое число без дробной части и округления
return 0;
}
kurer(52);
echo "<br>";
echo "<br>";
///////////////////////////////////////////////////////////////////////////////

$siti = 'харьков';
$sities = substr($siti, 0, -4);
$arr = ['киев', 'воронеж', 'житомир', 'ромны', 'никополь', 'львов', 'волгоград',
    'донецк', 'калуга', 'ахтырка', 'александрия', 'ялта', 'архангельск', 'кременчуг', 'гадяч',
    'черкассы', 'суммы', 'мелитополь', 'лондон'];
$arr1 = ['ы', 'ъ', 'ь', 'ов'];
foreach ($arr as $key => $value){
    foreach (){
        if (){

        }else{
            $mySiti = substr($value, 0 ). "<br>";
            if ($sities == $mySiti[0]){
                echo $value. "<br>";
            }elseif ($arr != $arr1){
                echo $value. "<br>";
            }
        }
    }

}

echo "<br>";



















?>