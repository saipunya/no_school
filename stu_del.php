<?php 
require('functions.php');
    $id = $_GET['jid'];

    $res = $mysqli->query("DELETE FROM tbl_student WHERE stu_id=$id");
    if(!$res){
        echo "ลบได้แล้ว";
    }else{
        echo "ลบไม่ได้";
    }

?>
