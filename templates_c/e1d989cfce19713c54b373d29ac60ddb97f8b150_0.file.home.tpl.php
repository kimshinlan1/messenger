<?php
/* Smarty version 3.1.43, created on 2022-03-30 21:18:36
  from '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_624466bc5ff5e5_57730493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d989cfce19713c54b373d29ac60ddb97f8b150' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/home.tpl',
      1 => 1648649885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624466bc5ff5e5_57730493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1510075731624466bc5f9fc6_67454941', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_1510075731624466bc5f9fc6_67454941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1510075731624466bc5f9fc6_67454941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="main-chat">
            </div><!-- div.main-chat -->
            <div class="box-chat">
                    <form method="POST" id="formSendMsg" onsubmit="return false;">
                            <input type="text" placeholder="Nhập nội dung tin nhắn ...">
                    </form><!-- form#formSendMsg -->
            </div><!-- div.box-chat -->
<?php
}
}
/* {/block 'body'} */
}
