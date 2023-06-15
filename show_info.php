<?php 
require('functions.php');
require('pagination-v2.class.php');
$page = new PaginationV2();
$msg = $_GET['msg'];
$res_show = $page->query($mysqli,"SELECT * FROM tbl_student ORDER BY stu_id DESC",6);
?>
<table class="table table-bordered" id="tbl">
    <tr>
        <th>รหัส</th>
        <th>เพศ</th>
        <th>ชื่อ-สกุล</th>
        <th>วันเกิด</th>
        <th>จัดการ</th>
    </tr>

    <?php
    while ($fetch_show = $res_show->fetch_assoc()){

    ?>
    <tr>
            <td><?php echo $fetch_show['stu_code'];?></td>
            <td><?php echo $fetch_show['stu_sex'];?></td>
            <td class="text-nowrap"><?php echo $fetch_show['stu_name'];?></td>
            <td class="text-nowrap"><?php echo $fetch_show['stu_born'];?></td>
            <td>  <i class="bi bi-pencil-square"></i>   <i class="bi bi-trash del" id="<?php echo $fetch_show['stu_id'];?>"></i>  </td>
    </tr>
    <?php
    }
    ?>

</table>




