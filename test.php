<?php
        $now = strtotime(date('Y-m-d'));
        $born = strtotime(date('2018-02-27'));
        $all_age =($now - $born)/(60*60*24*365);

        echo $all_age;

?>

