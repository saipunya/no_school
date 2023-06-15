<?php 
  require('functions.php');
  require('check_user.php');
  require('header.php');
  $id = $_POST['id'];
  $_SESSION['id'] = $_POST['id'];
  $res_kpi = $mysqli->query("SELECT * FROM tbl_listwicha WHERE li_code = '$id'");
  $fetch_kpi = $res_kpi->fetch_assoc();
  @$ro = $fetch_kpi['li_kpi'];
?>
    
        <?php 
            for($i=1;$i<=$ro;$i++){
        ?>
        <form action="save_kpi.php" method="POST">
            <div class="row my-2">
                <div class="col-sm-4 col-md-3 text-right"> 
                    <input type="text" name="" id="" class="form-control" value='<?php echo "ตัวชี้วัดตัวที่ $i"; ?>' readonly>
                    <input type="hidden" name="kpi_licode[]" value="<?php echo $id; ?>">
                    <input type="hidden" name="kpi_code[]" value="<?php echo 'kpi'.$i; ?>">
                </div>
                <div class="col-sm-6 col-md-7">
                    <input type="text" name="kpi_subject[]" id="" class="form-control" placeholder="รายละเอียด" required>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="kpi_point[]" id="" class="form-control" placeholder="คะแนน" required>
                </div>
                <input type="hidden" name="kpi_saveby[]" value="<?php echo @$_SESSION['n_user']; ?>">
                <input type="hidden" name="kpi_savedate[]"  value="<?php echo date('Y-m-d'); ?>">

            </div>

        <?php
            }
        ?>
            <input type="hidden" name="kpi_checkpoint" id="" value="<?php echo $fetch_kpi['li_startpoint']; ?>">
            <div class="row my-2">
                <div class="col-12 text-center">
                    <input type="submit" name="save" value="บันทึก" class="btn btn-sm btn-success">
                    <input type="reset" value="ยกเลิก" class="btn btn-sm btn-danger">
                </div>
            </div>
        </form>
        

<?php 
    require('footer.php');
?>
