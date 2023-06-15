<?php 
  require('functions.php');
  require('check_user.php');
  require('header.php');
?>

    <div class="container">
        <div class="row my-2 text-center">
            <h4>การเพิ่มตัวชี้วัดรายวิชา</h4>
        </div>
        <div class="row my-2">
            <div class="col-md-2 text-md-end">เลือกรายวิชา:</div>
            <div class="col-md-10">
                <select name="kpi_list" id="kpi_list" class="form-select">
                    <option value="">++โปรดเลือก++</option>
                    <?php 
                      $res_allwicha = $mysqli->query("SELECT * FROM tbl_listwicha");
                     while($fetch_allwicha = $res_allwicha->fetch_assoc()){
                    ?>
                    <option value="<?php echo $fetch_allwicha['li_code']; ?>"><?php echo $fetch_allwicha['li_subject']; ?></option>
                    <?php 
                      }
                    ?>                   
                </select>
            </div>
        </div>
        <div id="test">

        </div>
    </div>
<?php 
  require('footer.php');
?>

<script>
    $(function(){
      $('#kpi_list').change(function(){
        var uid = $(this).val()
        $.ajax({
            url : 'add_allkpi.php',
            method : 'post',
            data : {
                id : uid
            },
            success : function(data){
                $('#test').html(data);
            }
        })
      })
    })
</script>
