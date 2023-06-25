<?php
$mysqli = new mysqli();
$mysqli->connect('localhost','chaiya_db','sumet022','chaiya_chain');
$res_show = $mysqli->query("SELECT * FROM member2");
while($row = $res_show->fetch_array()){


?>
<span><?php echo $row['m_name']; ?></span>
<?php 
}
?>

