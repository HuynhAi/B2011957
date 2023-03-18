<?php
    $x=1;
    echo'while: <br>' ;
    while($x<=5){
        echo'The number is: ' .$x .'<br>';
        $x++;
    }

    echo'do...while:  <br>';
    $x=1;
    do{
        echo'The number is: ' .$x .'<br>';
        $x++;
    } while($x <=5);

    echo'for: <br>';
    
    for($i=0;$i<=10;$i++){
        echo'The number is: ' .$i .'<br>';
    }
    echo'foreach: <br>  ';
    $colors = array('red','green','blue','yellow');
    foreach($colors as $value){
        echo $value .'<br>';
    }
?>