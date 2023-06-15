<?php 
  require('functions.php');
  require('header.php');
?>
  <div class="container">
    <div class="login">
      <div class="row my-2 text-center">
        <h4>++ระบบฐานข้อมูลนักเรียน++</h4>
        <div>โรงเรียนบ้านโนนเชือก สำนักงานเขตพื้นที่การศึกษาประถมศึกษาเขต 3 จังหวัดชัยภูมิ</div>
      </div>
      <hr>
      <form action="check.php" method="POST">
        <div class="row my-2">
          <div class="col-3 col-lg-2 text-end">ผู้ใช้งาน:</div>
          <div class="col-9 col-lg-10">
            <input type="text" name="m_user" id="" class="form-control" autocomplete="off"
              placeholder="ระบุชื่อผู้ใช้งาน" Required>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-3 col-lg-2 text-end">รหัสผ่าน:</div>
          <div class="col-9 col-lg-10">
            <input type="password" name="m_pass" id="" class="form-control" autocomplete="off"
              placeholder="ระบุรหัสผ่าน" Required>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-md-12 block-btn">
            <input type="submit" name="login" value="เข้าสู่ระบบ" class="btn btn-sm btn-success">
            <input type="reset" value="ยกเลิก" class="btn btn-sm btn-danger">
          </div>
        </div>
      </form>
    </div>
   
  </div>

<?php 
  require('footer.php');
?>
