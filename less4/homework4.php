<?php
$arr = array(12, 23, 44, 57, 88);
$max = max($arr);
echo $max."<br>";
unset ($arr[4]);
$maxx = max($arr);
echo $maxx;
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////////////////////////////////////////
$string_arr = array('maksym', 'hello', 'junior', 'programmer');
$maxLenght = 0;
$myKey = '';
foreach($string_arr as $key => $value) {
    if ($maxLenght <= strlen($value)) {
        $myKey = $key;
        $maxLenght = strlen($value);
        echo $string_arr[$myKey] ."<br>";
        unset($string_arr[$myKey]);
        echo $string_arr[$myKey] ."<br>";
    }
}

//////////////////////////////////////////////////////////////////////////////////////
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
    }
    $result->close();
}
$mysqli->close();

function compare_name($a, $b){
    return strnatcmp($a['first_name'], $b['first_name']);
}
uasort($massivGroup, 'compare_name');

echo "<pre>";
print_r($massivGroup);
echo "</pre>";

foreach ($massivGroup as $value) {
    $pos = strpos($value['tel'], '38095');
    if ($pos == false) {
//        echo 'false';
    } else {
        echo $value['first_name'] . '<br>';
    }
}
//////////////////////////////////////////////////////////////////////////////////////

$string_arr = array('maksym', 'hello', 'junior', 'programmer');
$maxLenght = 0;
$myKey = '';
foreach($string_arr as $key => $value) {
    if ($maxLenght <= strlen($value)) {
        $myKey = $key;
        $maxLenght = strlen($value);
        echo $maxLenght . "<br>";
    }
}
echo $string_arr[$myKey];
?>
