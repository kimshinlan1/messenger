<?php
 include "core/init.php";

if($user){
  if(isset($_GET["ac"])){
    $ac=trim($_GET["ac"]);
    if($ac=="edit_note"){
 // Náº¿u cÃ³ ID truyá»n vÃ o
      if (isset($_GET['id']))
        {
            $get_id = trim($_GET['id']);
        if ($get_id != '')
            {
     // Lá»nh truy váº¥n kiá»m tra sá»± tá»n táº¡i vÃ  quyá»n sá» há»¯u note
                $sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";

                // Náº¿u cÃ³ tá»n táº¡i vÃ  thuá»c quyá»n sá» há»¯u
           if ($db->num_rows($sql_check_id_exist))
           {
      // Include template chá»nh sá»­a note
     include 'edit_note.php';
}
                // NgÆ°á»£c láº¡i khÃ´ng tá»n táº¡i vÃ  khÃ´ng thuá»c quyá»n sá» há»¯u
else
{
                    // Hiá»n thá» thÃ´ng bÃ¡o lá»i
echo '
                        <div class="container">
                            <div class="alert alert-danger">
                                Note nÃ y khÃ´ng tá»n táº¡i hoáº·c khÃ´ng thuá»c quyá»n sá» há»¯u cá»§a báº¡n.
                            </div>
                        </div>
                    ';
   }
 }
            // NgÆ°á»£c láº¡i khÃ´ng cÃ³ ID truyá»n vÃ o
            else
            {
                header('Location: index.php'); // Di chuyá»n vá» trang chá»§
            }
        }
    }else
     include "$ac.php";
    if(file_exists($smarty->getTemplateDir()[0]."$ac.tpl")){
    $smarty->assign(["ac"=>$ac]);
    $smarty->display("$ac.tpl");
    }
  }

  // neu khong co action gi
  else {
    include "home.php";
    //$smarty->assign(["ac"=>"home"]);
   // echo $smarty->getTemplateDir()[0];die;
    //if($smarty->getTemplateDir()[0])
    $smarty->assign(["ac"=>"home"]);
      $smarty->display("home.tpl");
  }

}else {
  include "sign_in.php";

}
//$smarty->assign(["user"=>1,"ac"=>$ac]);
//$smarty->display("index.tpl");
?>