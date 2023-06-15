<?php 
    require('functions.php');
    if($_POST['save']){
        if(array_sum($_POST['kpi_point'])==$_POST['kpi_checkpoint']){ 
            $count = count($_POST['kpi_subject']);
            for ($i = 0; $i < $count; $i++){
                $kpi_code = $_POST['kpi_licode'][$i];
                $kpi_licode = $_POST['kpi_code'][$i];
                $kpi_subject = $_POST['kpi_subject'][$i];
                $kpi_point = $_POST['kpi_point'][$i];
                $kpi_saveby = $_POST['kpi_saveby'][$i];
                $kpi_savedate = $_POST['kpi_savedate'][$i];
                // echo $kpi_subject[$i];
                $res_save = $mysqli->query("INSERT INTO tbl_kpi (kpi_licode,kpi_code, kpi_subject, kpi_point, kpi_saveby, kpi_savedate) VALUES ('$kpi_licode','$kpi_code', '$kpi_subject','$kpi_point','$kpi_saveby','$kpi_savedate')");
            }
            if($res_save){
                echo "<script>
                    alert('บันทึกเรียบร้อยแล้ว')
                    window.location.href='add_kpi.php'
                </script>";
            }else{
                echo "<script>
                alert('ไม่สามารถบันทึกได้ โปรดตรวจสอบ')
                window.history.back();
                </script>";
            }
        }else{
            echo "<script>
            alert('คะแนนไม่เท่าที่กำหนดไว้')
            window.history.back();
            </script>"; 
        }

    }
?>
