<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\statistics_performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17020568a8b56ab4664-26405766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8b838de75b7c804146db2b566a081eb10a58b26' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\statistics_performance.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17020568a8b56ab4664-26405766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bIsShowStatsPerformance' => 0,
    'oUserCurrent' => 0,
    'aStatsPerformance' => 0,
    'iTimeFullPerformance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a8b56adf5e4_25286263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b56adf5e4_25286263')) {function content_568a8b56adf5e4_25286263($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['bIsShowStatsPerformance']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
	<div class="stat-performance">
		<?php echo smarty_function_hook(array('run'=>'statistics_performance_begin'),$_smarty_tpl);?>

		<table>
			<tr>
				<td>
					<h4>MySql</h4>
					query: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['sql']['count'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['sql']['time'];?>
</strong>
				</td>
				<td>
					<h4>Cache</h4>
					query: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count'];?>
</strong><br />
					&mdash; set: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count_set'];?>
</strong><br />
					&mdash; get: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['count_get'];?>
</strong><br />
					time: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['cache']['time'];?>
</strong>
				</td>
				<td>
					<h4>PHP</h4>	
					time load modules: <strong><?php echo $_smarty_tpl->tpl_vars['aStatsPerformance']->value['engine']['time_load_module'];?>
</strong><br />
					full time: <strong><?php echo $_smarty_tpl->tpl_vars['iTimeFullPerformance']->value;?>
</strong>
				</td>
				<?php echo smarty_function_hook(array('run'=>'statistics_performance_item'),$_smarty_tpl);?>

			</tr>
		</table>
		<?php echo smarty_function_hook(array('run'=>'statistics_performance_end'),$_smarty_tpl);?>

	</div>
<?php }?><?php }} ?>