
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
                    <div class="card-header">บันทึกข้อมูลรายวิชา</div>
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">รหัสวิชา:</div>
                            <div class="col-md-10"><input type="text" name="li_code" id="li_code" class="form-control"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">ชื่อวิชา:</div>
                            <div class="col-md-10"><input type="text" name="li_subject" id="li_subject" class="form-control"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">รายละเอียด:</div>
                            <div class="col-md-10"><textarea name="li_detail" class="form-control" id="" cols="30" rows="10"></textarea></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">ระดับชั้น:</div>
                            <div class="col-md-2">
                                <select name="li_class" id="" class="form-control">
                                    <option value="">++โปรดเลือก++</option>
                                    <?php 
                                        $res_p = $mysqli->query("SELECT * FROM tbl_chan ORDER BY ch_id ASC");
                                        while($fetch_p = $res_p->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $fetch_p['ch_code'];?>"><?php echo $fetch_p['ch_subject'];?></option>
                                    <?php 
                                        }
                                    ?>
                                    
                                    
                                </select>
                            </div>
                            <div class="col-md-2 text-md-end">จำนวนตัวชี้วัด:</div>
                            <div class="col-md-2"><input type="number" name="li_kpi" id="li_kpi" class="form-control" placeholder="ระบุแค่ตัวเลขเท่านั้น"></div>
                            <div class="col-md-2 text-md-end">จำนวนชั่วโมง:</div>
                            <div class="col-md-2"><input type="number" name="li_study" id="li_study" class="form-control" placeholder="ระบุแค่ตัวเลขเท่านั้น"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">คะแนนเก็บ:</div>
                            <div class="col-md-2"><input type="number" name="li_startpoint" id="li_startpoint" class="form-control" placeholder="ระบุแค่ตัวเลขเท่านั้น"></div>
                            <div class="col-md-2 text-md-end">คะแนนกลางภาค:</div>
                            <div class="col-md-2"><input type="number" name="li_midpoint" id="li_midpoint" class="form-control" placeholder="ระบุแค่ตัวเลขเท่านั้น"></div>
                            <div class="col-md-2 text-md-end">คะแนนปลายภาค:</div>
                            <div class="col-md-2"><input type="number" name="li_finalpoint" id="li_finalpoint" class="form-control" placeholder="ระบุแค่ตัวเลขเท่านั้น"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-2 text-md-end">หมายเหตุ(ถ้ามี):</div>
                            <div class="col-md-10"><textarea name="li_maihed" class="form-control" id="" cols="30" rows="5"></textarea></div>
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
           