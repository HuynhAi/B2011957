<?php
    // ktra du lieu khi sb 
    if(isset($_POST['sb'])){
        $number = trim($_POST['number']);
        $gt =1;
        for($i=1; $i<=$number; $i++){
            $gt = $gt * $i; 
        }
        echo 'Giai thua cua: ' . $number .' = ' .$gt;
    }
?>