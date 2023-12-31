
        <?php 
            require('head.php');
            require('sidebar.php');
        ?>
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">หน้าหลัก</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body rounded" >
                                <h4 class="card-title"><i class="mdi mdi-pencil"></i> เพิ่มข้อมูลนักเรียน</h4>
                                <br>
                                <form name="f1" id="f1">
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">รหัสประจำตัว:</div>
                                    <div class="col-lg-10">
                                        <input type="text" name="stu_code" id="stu_code" class="form-control" Required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end text-nowrap">เพศ:</div>
                                    <div class="col-lg-10">
                                        <select name="stu_sex" id="stu_sex" class="form-select">
                                            <option value="">++โปรดเลือก++</option>
                                            <option value="ชาย">ชาย</option>
                                            <option value="หญิง">หญิง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">ชื่อ:</div>
                                    <div class="col-lg-10">
                                        <input type="text" name="stu_name" id="stu_name" class="form-control" Required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">วันเกิด:</div>
                                    <div class="col-lg-10">
                                        <input type="date" name="stu_born" id="stu_born" class="form-control" Required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">ที่อยู่:</div>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">ผู้ปกครอง:</div>
                                    <div class="col-lg-10">
                                        <input type="text" name="stu_fa" id="stu_fa" class="form-control" Required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-2 text-lg-end">โทร:</div>
                                    <div class="col-lg-10">
                                        <input type="text" name="stu_tel" id="stu_tel" class="form-control" Required>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 text-center">
                                        <input type="button" value="บันทึก" name="btn-save" id="btn-save" class="btn btn-sm btn-success">
                                        <input type="reset" value="ยกเลิก" class="btn btn-sm btn-danger">
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $res_lastshow = $mysqli->query("SELECT * FROM tbl_student ORDER BY stu_id DESC LIMIT 1");
                        $res_show = $res_lastshow->fetch_assoc();

                    ?>
                   
                    <div class="col-lg-6">
                    <form id="showform" action="">
                        <div class="card ">
                            <div class="card-body rounded">
                            <h4 class="card-title"><i class="mdi mdi-pencil"></i> ข้อมูลที่เพิ่มล่าสุด</h4>
                            <div class="row">
                                <div class="col-12 text-end">
                                     <i class="bi bi-pencil-square"></i> <span id="edit">แก้ไข</span>
                                     
                                     <i class="bi bi-x-circle"></i> <span id="btn">ลบ</span>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">รหัสประจำตัว:</div>
                                <div class="col-lg-10">
                                    <input type="text" name="stu_code" id="stu_code" class="form-control" value="<?php echo $res_show['stu_code']; ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end text-nowrap">เพศ:</div>
                                <div class="col-lg-10">
                                    <input type="text" name="stu_sex" id="stu_sex" class="form-control" value="<?php echo $res_show['stu_sex']; ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">ชื่อ:</div>
                                <div class="col-lg-10">
                                    <input type="text" name="stu_name" id="stu_name" class="form-control" value="<?php echo $res_show['stu_name']; ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">วันเกิด:</div>
                                <div class="col-lg-10">
                                    <input type="date" name="stu_born" id="stu_born" class="form-control" value="<?php echo $res_show['stu_born']; ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">ที่อยู่:</div>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="stu_address" id="stu_address" cols="30" rows="10" value="<?php echo $res_show['stu_address']; ?>"></textarea>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">ผู้ปกครอง:</div>
                                <div class="col-lg-10">
                                    <input type="text" name="stu_fa" id="stu_fa" class="form-control" value="<?php echo $res_show['stu_fa']; ?>">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-2 text-lg-end">โทร:</div>
                                <div class="col-lg-10">
                                    <input type="text" name="stu_tel" id="stu_tel" class="form-control" value="<?php echo $res_show['stu_tel']; ?>">
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row my-2">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="table-info">
                                    <th class="text-center">รหัสประจำตัว</th>
                                    <th class="text-center">ชื่อ-สกุล</th>
                                    <th class="text-center">วันเกิด</th>
                                    <th class="text-center">อายุ</th>
                                    
                                    <th class="text-center fw-bold text-danger">จัดการ</th>
                                </tr>
                                <?php 
                                    $res_showall = $mysqli->query("SELECT * FROM tbl_student ORDER BY stu_id DESC");
                                    while($fetch_showall = $res_showall->fetch_assoc()) {

                                ?>
                                
                                <tr>
                                    <td><?= $fetch_showall['stu_code'];?></td>
                                    <td><?php if($fetch_showall['stu_sex']=='ชาย') {
                                        echo '<span class="material-symbols-outlined">male</span> เด็กชาย';
                                    }else{
                                        echo '<span class="material-symbols-outlined">female</span> เด็กหญิง';
                                    }?><?php echo $fetch_showall['stu_name'];?></td>
                                    <td><?php echo fullDate($fetch_showall['stu_born']);?></td>
                                    <td class="text-nowrap text-center"><?php echo allAge($fetch_showall['stu_born']); ?></td>
                                    <td class="text-nowrap text-center text-danger">
                                        <i class="bi bi-search"></i> ข้อมูล
                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                        <i class="bi bi-x-circle"></i> ลบ
                                    </td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <script>
                $(function(){
                    $('#showform :input').attr('readonly','readonly');
                })
            </script>
     <?php 
     require('foot.php');
     ?>
           