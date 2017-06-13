<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	<meta content="always" name="referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="/servers/Application/Admin/Public/css/theme.min.css" />
	<link rel="stylesheet" type="text/css" href="/servers/Application/Admin/Public/css/simplebootadmin.css" />
	<link rel="stylesheet" type="text/css" href="/servers/Application/Admin/Public/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/servers/Application/Admin/Public/js/artDialog/skins/default.css" />
	
    <style>
		.length_3{width: 180px;}
		/*==================Global Reset====================*/
		body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, dl, dt, dd, ul, ol, li, pre, form, fieldset, legend, button, input, textarea, th, td { margin: 0; padding: 0; }
		body, button, input, select, textarea { font: 12px/1.5 tahoma, arial, \5b8b\4f53, sans-serif; }
		h1, h2, h3, h4, h5, h6 { font-size: 100%; }
		ul, ol { list-style: none; }
		a { text-decoration: none; }
		a:hover { text-decoration: underline; }
		img { border: 0; }
		button, input, select, textarea { font-size: 100%; }
		.clearfix:before,
		.clearfix:after {
		    content: "";
		    display: table;
		}
		.clearfix:after {
		    clear: both;
		    overflow:hidden;
		}
		.clearfix {
		    clear: both;
		    zoom: 1;
		}
	</style>

	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="/servers/Application/Admin/Public/css/font-awesome-ie7.min.css" />
	<![endif]-->

<script type="text/javascript">
//全局变量
var GV = {
	HOST:"<?php echo ($_SERVER['HTTP_HOST']); ?>",
    DIMAUB: "/servers/",
    JS_ROOT: "Application/Admin/Public/js/",
    MODULE_URL:"/servers/index.php/Admin/",
    TOKEN: ""
};
</script>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="/servers/Application/Admin/Public/js/jquery.js"></script>
	<script type="text/javascript" src="/servers/Application/Admin/Public/js/wind.js"></script>
	<script type="text/javascript" src="/servers/Application/Admin/Public/js/jquery.smooth-scroll.min.js"></script>
	<script type="text/javascript" src="/servers/Application/Admin/Public/js/bootstrap.min.js"></script>

<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  	<ul class="nav nav-tabs">
     <li><a href="<?php echo U('menu/index');?>">后台菜单</a></li>
     <li><a href="<?php echo U('menu/add');?>">添加菜单</a></li>
     <?php if(APP_DEBUG): ?><li class="active"><a href="<?php echo U('menu/lists');?>">所有菜单</a></li>
		<!--
     	<li><a href="<?php echo U('menu/spmy_import_menu');?>">恢复菜单</a></li>
     	<li><a href="<?php echo U('menu/spmy_export_menu');?>">备份菜单</a></li>
		--><?php endif; ?>
    </ul>
   <div style="margin-bottom:10px;">
	<!--<a class="btn" type="submit" href="<?php echo u('menu/spmy_getactions');?>">导入新菜单</a>-->
   </div>
  <form class="form-horizontal J_ajaxForm" action="<?php echo U('Menu/listorders');?>" method="post">
    <div class="table_list">
      <table width="100%" class="table table-hover">
        <thead>
          <tr>
            <th width="80">排序</th>
            <th width="100">ID</th>
            <th>菜单英文名称</th>
            <th width="80">状态</th>
            <th width="200">管理操作</th>
          </tr>
        </thead>
        <?php if(is_array($menus)): foreach($menus as $key=>$vo): ?><tr>
				<td><input name="listorders[<?php echo ($vo["id"]); ?>]" type="text" size="3" value="<?php echo ($vo["listorder"]); ?>" class="input input-order"></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?>:<?php echo ($vo["app"]); ?>/<?php echo ($vo["model"]); ?>/<?php echo ($vo["action"]); ?></td>
			    <td>
			    	<?php if($vo['status'] == 1): ?>显示
			    	<?php else: ?>
			    	隐藏<?php endif; ?>
			    </td>
				<td>
					<a href="<?php echo u('menu/edit',array('id'=>$vo['id']));?>" target="_blank">修改</a> | 
					<a class="J_ajax_del" href="<?php echo u('menu/delete',array('id'=>$vo['id']));?>">删除</a> 
				</td>
			</tr><?php endforeach; endif; ?>
      </table>
    </div>
    <div class="form-actions">
        <button class="btn btn-primary btn_submit mr10 J_ajax_submit_btn" type="submit">排序</button>
    </div>
  </form>
</div>
<script type="text/javascript" src="/servers/Application/Admin/Public/js/common.js"></script>
</body>
</html>