<?php 
$s1 = "night";
$s2 = "thing";

if(strlen($s1) !== strlen($s2)){
    echo "no\n";
    exit;
}

$a1 = mb_str_split($s1);
$a2 = mb_str_split($s2);

sort($a1);
sort($a2);

if($a1 === $a2){
    echo "yes";
} else{
    echo "no";
}
?>