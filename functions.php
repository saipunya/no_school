<?php
    session_start();
    date_default_timezone_set('Asia/Bangkok');
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'no_school';
    $mysqli = new mysqli($host, $username, $password, $database);
    $mysqli -> set_charset("utf8");
    if($mysqli->connect_error) {
        die($mysqli->connect_error);
    }

    function fullDate ($y){
    
        $days = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
        $months = ['01'=>'มกราคม', '02'=>'กุมภาพันธ์', '03'=>'มีนาคม', '04'=>'เมษายน', '05'=>'พฤษภาคม', '06'=>'มิถุนายน', 
        '07'=>'กรกฎาคม', '08'=>'สิงหาคม', '09'=>'กันยายน', '10'=>'ตุลาคม', '11'=>'พฤศจิกายน', '12'=>'ธันวาคม'];
        $alldate = explode("-",$y); //ชื่อวันเป็นภาษาไทย
        
        $date = date($alldate[2]); //วันที่	 //ลำดับของเดือนแบบไม่มี 0 นำหน้า(1-12)
        $m = date($alldate[1]);
        $month = $months[$m];
        $year = date($alldate[0]) + 543;   //ปี พ.ศ.
        echo "$date $month $year";
    }


     
    function allDate ($x){
        $y = $_POST[$x];
        $all = explode ('/',$y);
        $Adate = $all[2]."-".$all[1]."-".$all[0];
        echo $Adate;
     }

     



    


     
?>

