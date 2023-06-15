<?php 
require('functions.php'); 
session_destroy();
echo "
<script>
    alert('คุณออกจากระบบแล้ว');
    window.location.href='index.php';
</script>
";
?>
