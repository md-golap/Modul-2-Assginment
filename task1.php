<?php 
//for loop
function isEven ($start,$end,$step){
    for($i=$start;$i<=$end;$i+=$step){
        echo $i . "\n" ;
    }
}
echo isEven(0,20,2);

//while loop

function even($start,$end,$step){
    $t=$start;
    while($t<$end){
        $t+=$step;
        echo $t.PHP_EOL;
    }
}
even(0,20,2);

//do...while loop

function even_($start,$end,$step){
    $x=$start;
    do{
        $x+=$step;
        echo $x.PHP_EOL;
    }while($x<$end);
}
even_(0,20,2);