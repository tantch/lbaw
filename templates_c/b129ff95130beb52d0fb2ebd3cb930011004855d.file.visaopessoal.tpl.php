<?php /* Smarty version Smarty-3.1.15, created on 2015-05-01 06:51:56
         compiled from "/opt/lbaw/lbaw1415/public_html/proto/templates/user/visaopessoal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076905035543066c87caf6-06036882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b129ff95130beb52d0fb2ebd3cb930011004855d' => 
    array (
      0 => '/opt/lbaw/lbaw1415/public_html/proto/templates/user/visaopessoal.tpl',
      1 => 1430455556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076905035543066c87caf6-06036882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projects' => 0,
    'proj' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5543066ca27142_91085808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5543066ca27142_91085808')) {function content_5543066ca27142_91085808($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="mid-container">
<div class="row">
<div id="breadcrumb" class="col-xs-12">
  <ol class="breadcrumb pull-left">
    <li><a href="visaopessoal.php">Visao Pessoal</a></li>

  </ol>
</div>




<!-- Header -->
<a name="visaopessoal"></a>
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="projectBox"class="panel panel-default">
                    <div class="span9">
                        <h1>
                            Projetos
                        </h1>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th align="center">
                                        Nome
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php  $_smarty_tpl->tpl_vars['proj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proj']->key => $_smarty_tpl->tpl_vars['proj']->value) {
$_smarty_tpl->tpl_vars['proj']->_loop = true;
?>
                                 <tr>
                                    <td>
                                        <a href="#nowhere"><?php echo $_smarty_tpl->tpl_vars['proj']->value['nomeproj'];?>
</a>
                                    </td>
                                    <td>
                                       <?php echo $_smarty_tpl->tpl_vars['proj']->value['funcaoproj'];?>

                                    </td>
                                    
                                </tr>
                            <?php } ?>    
                            </tbody>
                        </table>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/novoprojeto.php"> Novo Projeto</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- /.container -->


<!-- /.intro-header -->

<!-- Page Content -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
