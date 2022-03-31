<?php
require_once 'core/init.php';
// Kết nối database, lấy dữ liệu chung
// Khai báo các biến gán với dữ liệu nhận được
//$body_msg = @mysqli_real_escape_string($cn, $_POST['body_msg']);
// Xử lý chuỗi $body_msg
$body_msg = $_POST["body_msg"];
$body_msg = trim($body_msg);
// Nếu $body_msg khác rỗng
if($body_msg!=''){
  if($db->query("INSERT INTO messages  VALUES('','$body_msg','$user','$date_current')")){
    echo "insert successfully";
  }else {
    echo $db->show_error();
  }
}
?>