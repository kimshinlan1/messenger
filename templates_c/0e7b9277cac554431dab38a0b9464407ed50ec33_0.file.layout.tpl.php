<?php
/* Smarty version 3.1.43, created on 2022-03-31 08:14:41
  from '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62450081d94ea2_45276683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e7b9277cac554431dab38a0b9464407ed50ec33' => 
    array (
      0 => '/storage/emulated/0/Icode-Go/data_files/www/messenger/templates/layout.tpl',
      1 => 1648689277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62450081d94ea2_45276683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
    <head>
    <title>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180966944962450081d06129_12365324', 'title');
?>

    </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $_smarty_tpl->_assignInScope('base_url', ($_SERVER['REQUEST_URI']).('styles/styles.css'));?>
  <link rel="stylesheet" href="./css/style.css" >
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102739846362450081d6b2b0_79997804', 'link_css');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php echo '<script'; ?>
 src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body>
  <div class="wrapper container">
  <?php if ((isset($_SESSION['user']))) {?>
    <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-header">
							<span class="fa fa-solid fa-user">Account</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href=""> Home</a>
					</div>

					<div class="collapse navbar-collapse" id="nav-header">
					    <ul class="nav navbar-nav navbar-right">
					      	<li>
					      		<a href="index.php?ac=create_note">
					      			<span class="fa fa-plus"></span> Note mới
					      		</a>
					      	</li>
					      	<li>
					      		<a href="index.php?ac=change_password">
					      			<span class="fa fa-key"></span> Đổi mật khẩu
					      		</a>
					      	</li>
					        <li>
					         	<a href="index.php?ac=sign_out">
					         		<span class="fa fa-sign-out"></span> Thoát
					    		</a>
					    	</li>
					    </ul>
					</div>
				</div>
			</nav>
  <?php } else { ?>
  <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">
							<span class="glyphicon glyphicon-edit"></span> Chat Online
						</a>
					</div>
				</div>
			</nav>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124424173362450081d90fe0_01564452', 'body');
?>

  </div>

   <div class="modal fade" id="modalDeleteNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-hader">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Xoá note</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn chắc chắn muốn xoá note này không ?</p>
                    <div class="alert alert-danger hidden"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    <button type="button" class="btn btn-primary" id="submit_delete_note">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/join.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/sendmsg.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/autoload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/instantclick.js" data-no-instant><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 data-no-instant>InstantClick.init();<?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'title'} */
class Block_180966944962450081d06129_12365324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_180966944962450081d06129_12365324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'link_css'} */
class Block_102739846362450081d6b2b0_79997804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'link_css' => 
  array (
    0 => 'Block_102739846362450081d6b2b0_79997804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'link_css'} */
/* {block 'body'} */
class Block_124424173362450081d90fe0_01564452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_124424173362450081d90fe0_01564452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'body'} */
}
