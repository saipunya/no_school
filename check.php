

<?php
    require('functions.php');
    require('header.php');
    if(isset($_POST['login'])){
        $me_user = trim($_POST['m_user']);
        $me_pass = trim($_POST['m_pass']);
        $me_status = 'active';
        $stmt = $mysqli->prepare("SELECT * FROM tbl_member WHERE me_user = ? AND me_pass = ? AND me_status = ?");
        $p = [$me_user,$me_pass,$me_status];
        $stmt->bind_param('sss',...$p);
        $stmt->execute();
        $result = $stmt->get_result();
        $nums = $result->num_rows;
        $fetch = $result->fetch_array();
        
        // $res_mem = $mysqli->query("SELECT * FROM tbl_member WHERE me_user = '$m_user' AND me_pass = '$m_pass' AND me_status = 'active'");
        // $fetch = $res_mem->fetch_array();
     
        if($nums == 1){
            $_SESSION['me_user'] = $fetch['me_user'];
            echo "<script>

                    Swal.fire({
                        icon: 'success',
                        title: 'เข้าสู่ระบบแล้ว',
                        showConfirmButton: false,
                        timer: 2500
                    }).then(function () {
                        window.location = 'main.php';
                    })   
            </script>";
        }else{
            echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'ข้อมูลของท่านไม่ถูกต้อง',
                    showConfirmButton: false,
                    timer: 2500
                }).then(function () {
                    window.location = 'index.php';
                })   
            </script>";
        }

    }

require('footer.php');
?>
