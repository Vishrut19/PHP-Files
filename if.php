<?php
// $isMale = true;
// $isTall = true;
// if ($isMale && $isTall) {
//     echo "You are a tall male";
// }elseif ($isMale && ! $isTall) {
//     echo "You are a short male";
// }elseif (! $isMale && $isTall) {
//     echo "You are a tall female";
// }else{
//     echo "You are Female";
// }

function getMax($num1,$num2){
    if ($num1 > $num2) {
        return $num1;
    }else {
        return $num2;
    }
}
echo getMax(200,3);
?>