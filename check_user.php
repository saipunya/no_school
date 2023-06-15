<?php 
  if(@$_SESSION['me_user']==''){
    echo "
      <script>
        window.location.href='login.php'
      </script>
    ";
  }
?>