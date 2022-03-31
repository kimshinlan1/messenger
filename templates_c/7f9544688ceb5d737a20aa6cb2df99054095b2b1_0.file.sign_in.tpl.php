<?php
/* Smarty version 3.1.43, created on 2022-03-30 12:44:23
  from '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/sign_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6243ee37813f74_18499297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9544688ceb5d737a20aa6cb2df99054095b2b1' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/sign_in.tpl',
      1 => 1648618919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6243ee37813f74_18499297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18373214486243ee3780a450_11789383', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_18373214486243ee3780a450_11789383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18373214486243ee3780a450_11789383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="box-join">
    <p>Tạo tài khoản hoặc đăng nhập để tham gia với chúng tôi</p>
    <form method="POST" id="formSignin" class="formJoin" onsubmit="return false;">
        <input type="text" placeholder="Tên đăng nhập" class="data-input" id="username">
        <input type="password" placeholder="Mật khẩu" class="data-input" id="password">
        <button class="btn-submit"> Login</button>
        <div class="login_button">
          Don't have account? Please sign up
          <a href="sign_up.php">Go to sign up page</a>
        </div>
        <div class="alert danger"></div>
    </form><!-- form#formJoin -->
</div><!-- div.box-join -->

<?php
}
}
/* {/block 'body'} */
}
