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

     function allAge($A){
        $now = strtotime(date('Y-m-d'));
        $born = strtotime(date($A));
        $diff = abs($now - $born);
        $all_age =floor($diff/(60*60*24*365));
        $all_month =floor(($diff-($all_age *60*60*24*365))/(60*60*24*30));
        $all_day =floor(($diff-($all_age *60*60*24*365)-($all_month*60*60*24*30))/(60*60*24));
 
            return "<span class='fw-bold'>".$all_age." ปี "."</span>".$all_month." เดือน ".$all_day." วัน";;
       
     }

     



    


     
?>

