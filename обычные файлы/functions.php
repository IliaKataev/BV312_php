<?php 
function AddNumbers($n1, $n2){
    return ($n1 + $n2);
}

function IncNumberByTen($n1){
    $n1+= 10;
    echo "Вывод функции: $n1 <br>";
}

function IncNumberByTenRef(&$n1){
    $n1+= 10;
    echo "Вывод функции: $n1 <br>";
}

function ChangeColor($color){
    global $title;
    echo "<h1 style='color:".$color.";'>".$title."</h1>";
}

function AddNumberColor($n1, $n2, $color='#EE33FF'){
    echo "Sum is <span='color:$color;'>($n1+$n2)</span>";
}
?>