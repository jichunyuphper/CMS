<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpstudy\PHPTutorial\WWW\cms\public/../application/admin\view\conf\conflst.htm";i:1543070427;s:69:"D:\phpstudy\PHPTutorial\WWW\cms\application\admin\view\common\top.htm";i:1552823536;s:70:"D:\phpstudy\PHPTutorial\WWW\cms\application\admin\view\common\left.htm";i:1553328364;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/cms/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/cms/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/cms/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/cms/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/cms/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/cms/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/cms/public/static/admin/style/animate.css" rel="stylesheet">
    <link href="/cms/public/static/admin/style/animate.min.css" rel="stylesheet">
</head>
<body>
	<!-- 头部 -->
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="/cms/public/static/admin/#" class="navbar-brand">
                    <small>
                            <img src="/cms/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/cms/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Session::get('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Login/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Session::get('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->


	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
             <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->

                     <!-- <li <?php if($con == 'Conf'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-briefcase"></i>
                            <span class="menu-text">网站配置</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                             <li>
                                <a href="<?php echo url('conf/conflst'); ?>">
                                    <span class="menu-text">
                                        配置管理                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('conf/add'); ?>">
                                    <span class="menu-text">
                                        添加配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'Admin'): ?> class="open" <?php endif; ?>>
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'AuthRule'): ?> class="open" <?php endif; ?>>
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">权限管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('AuthRule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AuthGroup/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AuthGroupAccess/lst'); ?>">
                                    <span class="menu-text">
                                        权限分配列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'Cate'): ?> class="open" <?php endif; ?>>
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa fa-list-ul"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('cate/add'); ?>">
                                    <span class="menu-text">
                                        添加栏目                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'Archives'): ?> class="open" <?php endif; ?>>
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Archives/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        添加文章                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'Model'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-maxcdn"></i>
                            <span class="menu-text">模型管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('model/lst'); ?>">
                                    <span class="menu-text">
                                        管理模型                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('model/add'); ?>">
                                    <span class="menu-text">
                                        添加模型                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'ModelField'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-stack-exchange"></i>
                            <span class="menu-text">模型字段管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('ModelField/lst'); ?>">
                                    <span class="menu-text">
                                        模型字段列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('ModelField/add'); ?>">
                                    <span class="menu-text">
                                        添加模型字段                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li <?php if($con == 'Note'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-stack-exchange"></i>
                            <span class="menu-text">采集</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Note/lst'); ?>">
                                    <span class="menu-text">
                                        采集列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Note/addListRules'); ?>">
                                    <span class="menu-text">
                                        采集                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li  <?php if($con == 'Adpos' || $con == 'Advertisement'): ?> class="open" <?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa  fa-stack-exchange"></i>
                            <span class="menu-text">广告管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Adpos/lst'); ?>">
                                    <span class="menu-text">
                                        广告位管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Advertisement/lst'); ?>">
                                    <span class="menu-text">
                                        广告管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/cms/public/static/admin/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): ?>

                     <li <?php
                         $arr=explode('/',$vo['name']);
                         $pcon=$arr[0];
                         if($pcon==$con){
                                 echo "class='active open'";
                         }
                     ?>  >
                        <a href="/cms/public/static/admin/#" class="menu-dropdown">
                            <i class="menu-icon fa <?php echo $vo['icon']; ?>"></i>
                            <span class="menu-text"><?php echo $vo['title']; ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): if( count($vo['children'])==0 ) : echo "" ;else: foreach($vo['children'] as $key=>$vo1): ?>
                            <li>
                                <a href="<?php echo url($vo1['name']); ?>">
                                    <span class="menu-text">
                                        <?php echo $vo1['title']; ?>                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <ul class="submenu">
                                    <?php if(is_array($vo1['children']) || $vo1['children'] instanceof \think\Collection || $vo1['children'] instanceof \think\Paginator): if( count($vo1['children'])==0 ) : echo "" ;else: foreach($vo1['children'] as $key=>$vo2): ?>
                                    <li>
                                        <a href="<?php echo url($vo2['name']); ?>">
                                            <span class="menu-text">
                                                    <?php echo $vo2['title']; ?>                            </span>
                                            <i class="menu-expand"></i>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </ul>
                <!-- /Sidebar Menu -->
            </div>

            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="#">配置管理</a>
                    </li>
                                    
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
         <form class="form-horizontal" enctype="multipart/form-data" role="form" action="" method="post">
        <div class="widget-body">
            <div class="widget-main ">
                <div class="tabbable">
                    <ul class="nav nav-tabs tabs-flat" id="myTab11">
                        <li class="active">
                            <a data-toggle="tab" href="#home11">
                                站点基本配置
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile11">
                               联系方式
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile12">
                                SEO配置
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tabs-flat">
                        <div id="home11" class="tab-pane active">
                            <?php if(is_array($confRes) || $confRes instanceof \think\Collection || $confRes instanceof \think\Paginator): $i = 0; $__LIST__ = $confRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$conf): $mod = ($i % 2 );++$i;if($conf['cf_type'] == 1): ?>
                           <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname']; ?></label>
                                <div class="col-sm-6">
                                    <?php switch($conf['dt_type']): case "1": ?><!-- 单行文本 -->
                                            <input class="form-control"  placeholder="" value="<?php echo $conf['value']; ?>" name="<?php echo $conf['ename']; ?>" type="text">
                                        <?php break; ?><!-- 单选按钮 -->
                                        <?php case "2":  $valuesAll1 = explode(',',$conf['values']);                    
                                                    foreach($valuesAll1 as $k1 => $v1):
                                             ?>
                                                <div class="radio" style="float: left;padding-right: 15px;">
                                                    <label>
                                                        <input name="<?php echo $conf['ename']; ?>" value="<?php echo $v1; ?>" <?php if($conf['value'] == $v1): ?> checked="checked" <?php endif; ?> type="radio" class="colored-blueberry">
                                                        <span class="text"><?php echo $v1; ?></span>
                                                    </label>
                                                </div>
                                                
                                            <?php endforeach; break; case "3": ?><!-- 多选按钮 -->
                                            <?php $valuesAll2 = explode(',',$conf['values']);
                                                    $valueAll = explode(',',$conf['value']);
                                                    foreach($valuesAll2 as $k2 => $v2):
                                             ?>
                                            <div class="checkbox"  style="float: left;padding-right: 15px;">
                                                <label>
                                                    <input type="checkbox" value="<?php echo $v2; ?>" <?php if(in_array($v2 ,$valueAll)): ?> checked="checked" <?php endif; ?> name="<?php echo $conf['ename']; ?>[]" class="colored-blue" >
                                                    <span class="text"><?php echo $v2; ?></span>
                                                </label>
                                            </div>
                                            <?php endforeach; break; case "4": ?><!-- 下拉菜单 -->
                                            <select name="<?php echo $conf['ename']; ?>" style="width: 100%;">
                                                <?php $valuesAll3 =explode(',',$conf['values']);
                                                        foreach($valuesAll3 as $k3 => $v3):
                                                ?>
                                                <option value="<?php echo $v3; ?>" <?php if($v3 == $conf['value']): ?> selected="selected" <?php endif; ?> ><?php echo $v3; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        <?php break; case "5": ?><!-- 文本域 -->
                                            <textarea class="form-control"   placeholder="" name="<?php echo $conf['ename']; ?>"><?php echo $conf['value']; ?></textarea>
                                        <?php break; case "6": ?><!-- 文件 -->
                                            <input type="file"  style="float: left;"  name="<?php echo $conf['ename']; ?>"> <?php if($conf['value']): ?> <img height="30" src="/cms/public/upload/<?php echo $conf['value']; ?>"><?php else: ?>未上传<?php endif; break; endswitch; ?>
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                        <div id="profile11" class="tab-pane">
                            <?php if(is_array($confRes) || $confRes instanceof \think\Collection || $confRes instanceof \think\Paginator): $i = 0; $__LIST__ = $confRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$conf): $mod = ($i % 2 );++$i;if($conf['cf_type'] == 2): ?>
                                <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname']; ?></label>
                                <div class="col-sm-6">
                                    <?php switch($conf['dt_type']): case "1": ?><!-- 单行文本 -->
                                            <input class="form-control"  placeholder="" value="<?php echo $conf['value']; ?>" name="<?php echo $conf['ename']; ?>" type="text">
                                          <!--  <input type="hidden" id="hidden-input" class="colorpicker" value="#5DB2FF" style="width:34px;"> -->
                                            <!-- <input type="text" id="text-field" class="form-control colorpicker" value="#70c24a"> -->
                                        <?php break; ?><!-- 单选按钮 -->
                                        <?php case "2":  $valuesAll1 = explode(',',$conf['values']);                    
                                                    foreach($valuesAll1 as $k1 => $v1):
                                             ?>
                                                <div class="radio" style="float: left;padding-right: 15px;">
                                                    <label>
                                                        <input name="<?php echo $conf['ename']; ?>" value="<?php echo $v1; ?>" <?php if($conf['value'] == $v1): ?> checked="checked" <?php endif; ?> type="radio" class="colored-blueberry">
                                                        <span class="text"><?php echo $v1; ?></span>
                                                    </label>
                                                </div>
                                                
                                            <?php endforeach; break; case "3": ?><!-- 多选按钮 -->
                                            <?php $valuesAll2 = explode(',',$conf['values']);
                                                    $valueAll = explode(',',$conf['value']);
                                                    foreach($valuesAll2 as $k2 => $v2):
                                             ?>
                                            <div class="checkbox"  style="float: left;padding-right: 15px;">
                                                <label>
                                                    <input type="checkbox" value="<?php echo $v2; ?>" <?php if(in_array($v2 ,$valueAll)): ?> checked="checked" <?php endif; ?> name="<?php echo $conf['ename']; ?>[]" class="colored-blue" >
                                                    <span class="text"><?php echo $v2; ?></span>
                                                </label>
                                            </div>
                                            <?php endforeach; break; case "4": ?><!-- 下拉菜单 -->
                                            <select name="<?php echo $conf['ename']; ?>" style="width: 100%;">
                                                <?php $valuesAll3 =explode(',',$conf['values']);
                                                        foreach($valuesAll3 as $k3 => $v3):
                                                ?>
                                                <option value="<?php echo $v3; ?>" <?php if($v3 == $conf['value']): ?> selected="selected" <?php endif; ?> ><?php echo $v3; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        <?php break; case "5": ?><!-- 文本域 -->
                                            <textarea class="form-control"   placeholder="" name="<?php echo $conf['ename']; ?>"><?php echo $conf['value']; ?></textarea>
                                        <?php break; case "6": ?><!-- 文件 -->
                                            <input type="file"  style="float: left;"  name="<?php echo $conf['ename']; ?>"> <?php if($conf['value']): ?> <img height="30" src="/cms/public/upload/upload/<?php echo $conf['value']; ?>"><?php else: ?>未上传<?php endif; break; endswitch; ?>
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>

                         <div id="profile12" class="tab-pane">
                            <?php if(is_array($confRes) || $confRes instanceof \think\Collection || $confRes instanceof \think\Paginator): $i = 0; $__LIST__ = $confRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$conf): $mod = ($i % 2 );++$i;if($conf['cf_type'] == 3): ?>
                               <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname']; ?></label>
                                <div class="col-sm-6">
                                    <?php switch($conf['dt_type']): case "1": ?><!-- 单行文本 -->
                                            <input class="form-control"  placeholder="" value="<?php echo $conf['value']; ?>" name="<?php echo $conf['ename']; ?>" type="text">
                                        <?php break; ?><!-- 单选按钮 -->
                                        <?php case "2":  $valuesAll1 = explode(',',$conf['values']);                    
                                                    foreach($valuesAll1 as $k1 => $v1):
                                             ?>
                                                <div class="radio" style="float: left;padding-right: 15px;">
                                                    <label>
                                                        <input name="<?php echo $conf['ename']; ?>" value="<?php echo $v1; ?>" <?php if($conf['value'] == $v1): ?> checked="checked" <?php endif; ?> type="radio" class="colored-blueberry">
                                                        <span class="text"><?php echo $v1; ?></span>
                                                    </label>
                                                </div>
                                                
                                            <?php endforeach; break; case "3": ?><!-- 多选按钮 -->
                                            <?php $valuesAll2 = explode(',',$conf['values']);
                                                    $valueAll = explode(',',$conf['value']);
                                                    foreach($valuesAll2 as $k2 => $v2):
                                             ?>
                                            <div class="checkbox"  style="float: left;padding-right: 15px;">
                                                <label>
                                                    <input type="checkbox" value="<?php echo $v2; ?>" <?php if(in_array($v2 ,$valueAll)): ?> checked="checked" <?php endif; ?> name="<?php echo $conf['ename']; ?>[]" class="colored-blue" >
                                                    <span class="text"><?php echo $v2; ?></span>
                                                </label>
                                            </div>
                                            <?php endforeach; break; case "4": ?><!-- 下拉菜单 -->
                                            <select name="<?php echo $conf['ename']; ?>" style="width: 100%;">
                                                <?php $valuesAll3 =explode(',',$conf['values']);
                                                        foreach($valuesAll3 as $k3 => $v3):
                                                ?>
                                                <option value="<?php echo $v3; ?>" <?php if($v3 == $conf['value']): ?> selected="selected" <?php endif; ?> ><?php echo $v3; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        <?php break; case "5": ?><!-- 文本域 -->
                                            <textarea class="form-control"   placeholder="" name="<?php echo $conf['ename']; ?>"><?php echo $conf['value']; ?></textarea>
                                        <?php break; case "6": ?><!-- 文件 -->
                                            <input type="file"  style="float: left;"  name="<?php echo $conf['ename']; ?>"> <?php if($conf['value']): ?> <img height="30" src="/cms/public/upload/upload/<?php echo $conf['value']; ?>"><?php else: ?>未上传<?php endif; break; endswitch; ?>
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">保存信息</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/cms/public/static/admin/style/jquery_002.js"></script>
    <script src="/cms/public/static/admin/style/bootstrap.js"></script>
    <script src="/cms/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/cms/public/static/admin/style/beyond.js"></script>
    
    <script type="text/javascript" src="/cms/public/static/admin/style/jquery.minicolors.js"></script>
    <script type="text/javascript">
         $('.colorpicker').each(function () {
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                defaultValue: $(this).attr('data-defaultValue') || '',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: $(this).attr('data-letterCase') || 'lowercase',
                opacity: $(this).attr('data-opacity'),
                position: $(this).attr('data-position') || 'bottom left',
                change: function (hex, opacity) {
                    if (!hex) return;
                    if (opacity) hex += ', ' + opacity;
                    try {
                        console.log(hex);
                    } catch (e) { }
                },
                theme: 'bootstrap'
            });

        });
    </script>

</body></html>