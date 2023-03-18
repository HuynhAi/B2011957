<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
    $t = date('H');
    echo'Bay gio la: ' .$t . ' gio';
    $s='';
    if($t<11)
        $s='Sang';
    elseif($t<17)
        $s='Chieu';
    else
        $s='Toi';
    echo'<br> chuc buoi '. $s .' vui ve';
?>