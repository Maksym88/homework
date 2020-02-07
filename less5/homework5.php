<?php
$str = '12345';
echo array_sum(str_split($str));
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////////////////////
$numbers = '123876453487657621244';
echo mb_substr_count($numbers, 5);
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////////////////////
function delenie($a){
    for ($i = 1; $i <= $a; $i++){
        if ($a % $i == 0){
            echo "$i - Делит без остатка. <br>";
        }//else echo "$i - Это число не делит $a без остатка. <br>";
    }
    return 1;
}

delenie(40);
//////////////////////////////////////////////////////////////////
function fIO($fio){
    $full_name =  explode(" ", $fio);
    echo mb_convert_case($full_name[0], MB_CASE_TITLE).' '.
        mb_convert_case (substr($full_name[1],0, 2),MB_CASE_TITLE). '.'.
        mb_convert_case(substr($full_name[2],0, 2), MB_CASE_TITLE).'.';

    return 1;
}
fIO("зубенко михаил петрович");
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////////////////////
$arr = ['Харьков', 'Киев', 'Воронеж', 'Житомир', 'Ромны', 'Никополь', 'Львов',
    'Волгоград', 'Донецк', 'Калуга', 'Ахтырка', 'Александрия', 'Ялта', 'Архангельск',
    'Кременчук', 'Гадяч', 'Черкассы', 'Суммы', 'Мелитополь', 'Лондон'];

$myCity = 'Волгоград';
$lWord = ''; // моя пустая переменная в которую будет приходить исключение букв ь - ы.
$town = preg_split('//u', $myCity, null, PREG_SPLIT_NO_EMPTY); //город введенный пользователем
$count = count($town); // считаем количество букв для хода цикла
for ($i = 0; $i < $count; $i++) { //перебираем заданый город  по буквам
    if ($town[$i] == 'ь' || $town[$i] == 'ы' || $town[$i] == 'ъ') {
        $lWord = $town[$i - 1]; //исключаем букву
    } else {
        $lWord = $town[$i]; //иначе все ок
    }
}

for ($i = 0; $i < count($arr); $i++) {  // город из масива
    $strLow = mb_strtolower($arr[$i]); // приводим все строки в нижний регистр
    $progTown = preg_split('//u', $strLow, null, PREG_SPLIT_NO_EMPTY);
    if ($progTown[0] == $lWord) { // если первая буква города с массива равна городу
        echo $arr[$i]; // выводим город
        unset($arr[$i]); // удаляем город
        break; // прерываем цикл чтобы на выдавало только один город
    }
}


echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////////////
define("MY_NUMBER", 5);
for ($i = 1; $i <=100; $i++){
    if ($i % MY_NUMBER == 0){
        echo $i."<br>";
    }//else echo "$i - не делится на MY_NOMBER";
}
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////////////
function prost($n, $f){
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $f++;
            }
        }
        if ($f <= 2) {
            echo $i . "<br>";
        }
        $f = 0;
    }
    return 1;
}
prost(100, 0);
echo "<br>";
echo "<br>";
////////////////////////////////////////////////////////////////////
function if_natural($n){
    if($n == 0 || $n == 1)return false;
    for($d = 2; $d * $d <= $n; $d++) {
        if($n % $d == 0)return false;
    }
    return true;
}
for($i = 0;$i <= 100; $i++) {
    if(!if_natural($i)) echo "<strike>$i <br></strike>";
    else echo "$i <br>";
}








?>