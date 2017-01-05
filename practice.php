<?php



// function nexseed($greeting) {
//   echo $greeting . 'seedくん';
// }

// echo nexseed('こんにちは');

// echo "<br>"."<br>";

// function moji(){
//   echo 'かきくけこ';
// }

// echo 'あいうえお';
// echo "<br>"."<br>";

// moji();
// echo "<br>"."<br>";

// echo 'さしすせそ';
// echo "<br>"."<br>";



// echo "<br>"."<br>";

// function aisatsu($name){
// 	echo '初めまして、' . $name . 'さん！';
//   	echo 'お元気ですか？';
// }

// aisatsu('修平');

// echo "<br>"."<br>";

// function nexseed($greeting, $name) {
//     echo $greeting . '、' . $name . 'さん';
// }

// nexseed('こんばんは', 'seed');

function nexseed($greeting, $name) {
    return $greeting . '、' . $name . 'さん';
}

echo nexseed('こんばんは', 'seed');
echo "<br>"."<br>";

//演習問題１
function multiplication($num1, $num2) {
  $result = $num1 * $num2;
  return $result;
}

// 関数の戻り値をそのまま出力する場合
echo '乗算の結果は' . multiplication(30, 20) . 'です';
echo "<br>"."<br>";

// 変数「$sum」に戻り値を格納して出力する場合
$sum = multiplication(30, 20);
echo '合計は' . $sum . 'です';
echo "<br>"."<br>";

//演習問題２
function average($num1, $num2) {
    $ave = ($num1 + $num2) / 2;
    if ($ave < 10) {
        return 0;
    } else {
        return $ave;
    }
}

echo average(40, 30);
echo "<br>"."<br>";


//演習問題３
function shopping($wallet, $change) {
    return $wallet - $change;
}

echo shopping(400, 300);
echo "<br>"."<br>";

//演習問題４
function maximum($num1, $num2) {
    if ($num1 >= $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

echo maximum(3, 9);
echo "<br>"."<br>";
// 
// function smart($num1, $num2){
//     if ($num1 >= $num2) {
//      $result = $num1;
//     } else {
//      $result = $num2;
// }

// echo smart(10,20);
?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP練習</title>
    </head>
    <body>
        
        <br>

        

        </form>
    </body>
</html>


