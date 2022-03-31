<?php
/* Smarty version 3.1.43, created on 2022-03-29 17:02:14
  from '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/signin-up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6242d926c3bc08_64207943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8354909815de2b29739109ca6671515509c1f8e' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/signin-up.tpl',
      1 => 1648548130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242d926c3bc08_64207943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_672439256242d926c383d3_98176899', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_672439256242d926c383d3_98176899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_672439256242d926c383d3_98176899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="box-join">
    <p>Tạo tài khoản hoặc đăng nhập để tham gia với chúng tôi</p>
    <form method="POST" id="formJoin" onsubmit="return false;">
        <input type="text" placeholder="Tên đăng nhập" class="data-input" id="username">
        <input type="password" placeholder="Mật khẩu" class="data-input" id="password">
        <button class="btn-submit">Bắt đầu</button>
        <div class="alert danger"></div>
    </form><!-- form#formJoin -->
</div><!-- div.box-join -->

<?php
}
}
/* {/block 'body'} */
}
