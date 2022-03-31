<?php
require_once "core/init.php";

$show_alert = '<script>$("#formJoin .alert").show();</script>'; // Hiển thị thông báo lỗi
$hide_alert = '<script>$("#formJoin .alert").hide();</script>'; // Ẩn thông báo lỗi
$success_alert = '<script>$(".formJoin .alert").attr("class", "alert success");</script>'; // Thông báo thành công

if(isset($_POST["ac"])){
  $ac=$_POST["ac"];
}
if(!empty($ac)){
  if($ac=="sign_up"){
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
   // echo $username.$password.$date_current;die;
    $sql_insertUser="INSERT INTO user VALUES (
                        '',
                        '$username',
                        '$password',
                        '$date_current'
                    )";
  $db->query($sql_insertUser);

      //$session->send($username);
      echo "Insert user successfully";

  }else if($ac=="sign_in") {
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $sql_checkUserName="SELECT * FROM user WHERE username='$username'";
    if($db->num_rows($sql_checkUserName)>0)     {
      $sql_checkLogIn="SELECT * FROM user WHERE username='$username' AND password='$password'";
      if($db->num_rows($sql_checkLogIn))       {
        $session->send($username);
        echo "Login success".$success_alert."<script>window.location.reload();</script>";
      }else {
        echo "Password is incorect";
      }

    }else {
      echo "User name does not exist";
    }
  }
}else {
  echo "<script>location.reload();</script>";
}
?>