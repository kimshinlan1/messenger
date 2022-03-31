<?php
/* Smarty version 3.1.43, created on 2022-03-29 20:16:10
  from '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/sign_up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6243069aad2386_42663507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb603437edf51e331880af823951baff079d45e' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/sign_up.tpl',
      1 => 1648559594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6243069aad2386_42663507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8887970566243069aace906_44537310', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_8887970566243069aace906_44537310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8887970566243069aace906_44537310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="box-join">
    <p class ="text-bold h3 text-primary">Create account</p>
    <form method="POST" class= "formJoin" id="formRegister" onsubmit="return false;">
        <input type="text" placeholder="Tên đăng nhập" class="data-input" id="usernameRegister">
        <input type="password" placeholder="Mật khẩu" class="data-input" id="passwordRegister">
        <button class="btn-submit">Bắt đầu</button>
        <div class="alert danger"></div>
    </form><!-- form#formJoin -->
</div><!-- div.box-join -->
<?php
}
}
/* {/block 'body'} */
}
