<?php
function df ($myStr, $file = 'test.txt'){
    $date = date("Y-m-d G:i:s");
    $fp = fopen("test.txt", "a+");
    $str = $date ."".print_r($myStr, true);
    fwrite($fp, $str);
    fclose($fp);
}
df('aaaaaaa','test.txt');
echo "<br>";

function units($first, $second, $third, $count = 1)
{
    if ($count - round($count) != 0) {
        $output = $first;
    } else {
        if ($count % 10 == 1 && $count % 100 != 11) {
            $output = $first
        } elseif ($count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 >= 20 || $count % 100 < 10)) {
            $output = $second;
        } else {
            $output = $third;
        }
    }
    return $output;
}
units('ноутбук','ноутбука','ноутбуков','7')
echo "<br>";
echo "<br>";


function myDate($date){
    $month = array(01 => 'January', 02 => 'February', 03 => 'March');
    if ($date == 1) {
        echo $month[01];
    }elseif ($date == 2){
         echo $month[02];
        }elseif  ($date == 3){
    echo $month[03];
        }else echo 'Не повезло не фортануло';
        return 1;
}

myDate(1);
echo "<br>";
echo "<br>";

$a = 10;
$b = 10;

function myNomber(){
    global $a;
    global $b;
    echo $a + $b;
    return 1;
}
myNomber();
echo "<br>";
echo "<br>";

$a = 1;
function oblastVidimocti(){
    $b = 0;
//global $a; //если убрать этот коментарий то код отработает правильно и выводятся 111, а так выводятся 000
//это потому что область видимости функции видит только переменную Б то есть вызывается только она три раза

    echo $b + $a;
    return 1;
}
oblastVidimocti();
oblastVidimocti();
oblastVidimocti();
echo "<br>";
echo "<br>";

function unst($b, $c){
$a = 10;
echo $b. "<br>";//выводит 15
echo $c. "<br>";//выводит 20
echo $a. "<br>";//выводит 10
unset($a);
echo $a; //не выводит
unset($b, $c);
echo $b."<br>".$c; //не выводит
return 1;

}
unst(15, 20);
echo "<br>";
echo "<br>";


$a=1;
//Объявили новую пользовательскую функцию m_func()
function m_func(){
    $b=2;
    echo $a;
    return 1;
}
$c=3;
echo $a.'<br>';
echo $b.'<br>';
echo $c;
m_func();
echo "<br>";


function nombers($a, $b){
    echo $a * $b;
    return 1;
}
nombers(5,8);
echo "<br>";
echo "<br>";

$a = 1;
$b = 2;
$c = 3;
$result = $a * $b * $c;
echo $result;
function ten(&$arg_1, &$arg_2, $arg_3){
    $arg_1 = 5;
    $arg_2 = 10;
    $arg_3 = 20;
    return 1;
}
ten($a, $b, $c);
echo $result;
echo "<br>";
echo "<br>";

function func_num(){
    for ($i = 0; $i < func_num_args(); $i++)
        echo func_get_arg($i);
    return 1;
}
func_num(1, 2, 4, 5); echo "<br>";
func_num(1, 2, 4, 5, 6, 7, 8, 8);
echo "<br>";
echo "<br>";

function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
 }
}
    for ($n = 1; $n <= 16; $n++) {
        echo(fibonacci($n) . ", ");
    }











?>