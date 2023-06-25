
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
        <!-- เริ่มต้น ใส่เนื้อหาที่นี่ -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">บันทึกผลการเรียน</div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">เลขประจำตัว</div>
                            <div class="col-md-10">
                                <select name="gr_number" id="gr_number" class="form-control">
                                    <option value="">++โปรดเลือก++</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">ปีการศึกษา</div>
                            <div class="col-md-4">
                                <select name="gr_year" id="gr_year" class="form-control">
                                    <option value="">++โปรดเลือก++</option>
                                </select>
                            </div>
                            <div class="col-md-2 text-md-end">ภาคการเรียน</div>
                            <div class="col-md-4">
                                <select name="gr_turm" id="gr_turm" class="form-control">
                                    <option value="">++โปรดเลือก++</option>
                                    <option value="t1">เทอม 1</option>
                                    <option value="t2">เทอม 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">ระดับชั้น</div>
                            <div class="col-md-10">
                                <select name="" id=""></select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="บันทึก" class="btn btn-sm btn-success">
                                <input type="reset" value="ยกเลิก" class="btn btn-sm btn-danger">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-header">รายละเอียดวิชา</div>
                    <div class="card-body">
                        <div class="row my-2">
                           <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="text-center table-info">
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>ระดับชั้น</th>
                                    <th>จัดการ</th>
                                </tr>
                                <?php 
                                    $res_wicha = $mysqli->query("SELECT * FROM tbl_listwicha ORDER BY li_id DESC");
                                   while ($fetch_wicha = $res_wicha->fetch_assoc()){
                                ?>
                                
                                <tr>
                                    <td>
                                        <?php echo $fetch_wicha['li_code']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch_wicha['li_subject']; ?>
                                    </td>
                                    <td>
                                        <?php echo $fetch_wicha['li_class']; ?>
                                    </td>
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
                </div>
            </div>
        <!-- สิ้นสุด ใส่เนื้อหาที่นี่ -->

           
     <?php 
     $mysqli->close(); 
     require('foot.php');
     ?>
           