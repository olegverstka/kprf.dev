<?php /* Smarty version Smarty-3.1.8, created on 2015-08-25 09:35:22
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96345915855dc0caa002355-33372901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5427505fc118d3ef889cc3f272b766a9cc5081' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/search_form.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96345915855dc0caa002355-33372901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aReq' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'iSearchInOneBlogSelected' => 0,
    'iFavoriteUserId' => 0,
    'aOpenCloseBlogsForCurrentUserObj' => 0,
    'oBlog' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55dc0caa1ad243_59155956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc0caa1ad243_59155956')) {function content_55dc0caa1ad243_59155956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?>
    <!-- Simplesearch plugin -->
    <script>
      jQuery (document).ready (function ($) {
        $ ('div.SearchContainer div.FoundBy').bind ('click.ss', function () {
          $ (this).next ('div.MoreInfo').slideToggle ();
        });
        $ ('div.SearchContainer div.ShowMoreOptions').bind ('click.ss', function () {
          $ (this).toggleClass ('Active');
          $ (this).next ('div.MoreOptions').slideToggle ();
        });
      });
    </script>

    <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['aReq']->value['sType'];?>
/" method="GET" class="search">
      <?php echo smarty_function_hook(array('run'=>'search_form_begin'),$_smarty_tpl);?>

      <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aReq']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
" name="q" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Field_Tip'];?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->GetValue("plugin.simplesearch.Max_Length_Of_Search_Query");?>
" id="SS_SearchField" class="input-text" />
      <input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit icon icon-search" />
      
      <div class="ShowMoreOptions<?php if ($_smarty_tpl->tpl_vars['iSearchInOneBlogSelected']->value||$_smarty_tpl->tpl_vars['iFavoriteUserId']->value){?> Active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Blogs_Search_Show_More_Options'];?>
</div>
      <div class="MoreOptions<?php if ($_smarty_tpl->tpl_vars['iSearchInOneBlogSelected']->value||$_smarty_tpl->tpl_vars['iFavoriteUserId']->value){?> Active<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Blogs_Search_Here_Only'];?>

        <select name="blogid" class="input-width-250" onchange="this.form.submit();">
          <option value="0"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Blogs_Search_Here_Only_Disabled'];?>
</option>
          <?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aOpenCloseBlogsForCurrentUserObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['iSearchInOneBlogSelected']->value==$_smarty_tpl->tpl_vars['oBlog']->value->getId()){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
          <?php } ?>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&in_array($_smarty_tpl->tpl_vars['aReq']->value['sType'],array('topics','comments','tags'))){?>
          <label>
            <input type="checkbox" name="favorite" value="1" <?php if ($_smarty_tpl->tpl_vars['iFavoriteUserId']->value){?>checked="checked"<?php }?> onchange="this.form.submit();" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_In_Favorite'];?>

          </label>
        <?php }?>
      </div>

      <?php echo smarty_function_hook(array('run'=>'search_form_end'),$_smarty_tpl);?>

    </form>
    <!-- /Simplesearch plugin -->
<?php }} ?>