<?php 
    require('functions.php');
    require('check_user.php');
    require('header.php');
?>
<div class="container">
    <div class="row my-2 text-center">
        <h4>เพิ่มข้อมูลผู้ใช้งาน</h4>
    </div>
    <hr>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">รหัสประจำตัว:</div>
        <div class="col-md-10">
            <input type="text" name="te_number" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">รหัสผู้ใช้งาน:</div>
        <div class="col-md-10">
            <input type="text" name="te_user" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">รหัสผ่าน:</div>
        <div class="col-md-4">
            <input type="password" name="te_pass" id="" class="form-control">
        </div>
        <div class="col-md-2 text-md-end">ยืนยันรหัสผ่าน:</div>
        <div class="col-md-4">
            <input type="password" name="te_pass2" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">ชื่อ-สกุล:</div>
        <div class="col-md-10">
            <input type="text" name="m_name" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">ตำแหน่ง</div>
        <div class="col-md-10">
            <input type="text" name="" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-2 text-md-end">เพศ:</div>
        <div class="col-md-4">
            <select name="m_sex" id="" class="form-select">
                <option value="">++โปรดเลือก++</option>
                <option value="man">ผู้ชาย</option>
                <option value="woman">ผู้หญิง</option>
            </select>
        </div>
        <div class="col-md-2 text-md-end">วันเกิด:</div>
        <div class="col-md-4">
            <input type="date" name="" id="" class="form-control">
        </div>
    </div>
    <div class="row my-2 mb-2">
        <div class="col-md-2 text-md-end">สถานภาพ:</div>
        <div class="col-md-4">
            <select name="" id="" class="form-select">
                <option value="">++โปรดเลือก++</option>
                <option value="student">นักเรียน</option>
                <option value="teacher">คุณครู</option>
                <option value="old_student">ศิษย์เก่า</option>
            </select>
        </div>
        <div class="col-md-2 text-md-end">ระดับ:</div>
        <div class="col-md-4">
            <select name="" id="" class="form-select">
                <option value="">++โปรดเลือก++</option>
                <option value="user">ผู้ใช้งาน</option>
                <option value="boss">ผู้บริหาร</option>
                <option value="admin">ผู้ดูแลระบบ</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row my-2">
        <div class="col-md-12 text-center">
            <input type="submit" value="บันทึก" class="btn btn-sm btn-success">
            <input type="reset" value="ยกเลิก" class="btn btn-sm btn-danger">
        </div>
    </div>

</div>
<?php 
    require('footer.php');
?>

