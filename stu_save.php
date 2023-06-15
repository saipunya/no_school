<?php 
require('functions.php');
    $code = $_POST['stu_code'];
    $sex = $_POST['stu_sex'];
    $name = $_POST['stu_name'];
    $born = $_POST['stu_born'];

    $res = $mysqli->query("INSERT INTO tbl_student(stu_code,stu_sex,stu_name,stu_born) VALUES('$code','$sex','$name','$born')");
    if(!$res){
        echo "ไม่สามารถบันทึกได้";
    }else{
        echo "บันทึกเรียบร้อยแล้ว";
    }

?>
