<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\AppServ\www\kanc\public/../application/admin\view\colum\index.html";i:1552757194;s:71:"C:\AppServ\www\kanc\public/../application/admin\view\public\layout.html";i:1552315986;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" href="__STATIC__/public/bs/css/bootstrap.min.css">
	<script src="__STATIC__/public/bs/js/jquery.min.js"></script>
	<script src="__STATIC__/public/bs/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
</head>
<body>
	
<!-- 导航 -->
<nav class="navbar navbar-default index">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">后台管理系统</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo url('Index/clearCache'); ?>">
          <span class="glyphicon glyphicon-refresh"></span>清除缓存</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"></a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#pass_edit">修改密码</a></li>
            <li><a href="#">前台首页</a></li>
            <li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- 内容 -->
<div class="container">
	<!-- 左边菜单 -->
	<div class="col-md-2">
		<div class="panel panel-primary">
			<div class="panel-heading titles" id="Admin">
				<span class="glyphicon glyphicon-user"></span>
				管理员管理
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo url('Manger/index'); ?>">管理员列表</a></li>
        <li class="list-group-item"><a href="<?php echo url('Manger/root'); ?>">权限管理</a></li>
        <li class="list-group-item"><a href="<?php echo url('Manger/rule'); ?>">规则管理</a></li>
			</ul>
		</div>
    <div class="panel panel-primary">
      <div class="panel-heading titles" id="Admin">
        <span class="glyphicon glyphicon-picture"></span>
        轮播管理
      </div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo url('Lunbo/index'); ?>">轮播列表</a></li>
      </ul>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading titles" id="Admin">
        <span class="glyphicon glyphicon-leaf"></span>
        文章管理
      </div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo url('Colum/index'); ?>">栏目列表</a></li>
      </ul>
    </div>
	</div>
	
<script src="__STATIC__/public/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/public/up/uploadify.css">
<div class="col-md-10">
  <div class="clearfix" line-height="60px">
      <ol class="breadcrumb" style="padding:14px;">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
        <li><a href="#">文章管理</a></li>
        <li class="active">栏目列表</li>
        <a href="" style="margin-top:-7px;" class="btn btn-success pull-right"><span class="glyphicon glyphicon-refresh"></span>&nbsp;刷新</a>
      </ol>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <button class="btn btn-danger" onclick="delAll()"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
      <button class="btn btn-primary" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span> 添加栏目</button>
      <div class="pull-right" style="margin-left:30px;"><p class="tot">共有数据：<span id="tot" class="badge" style="background:#4098d2;"><?php echo $count; ?></span>&nbsp;条</p></div>
      <form class="form-inline pull-right" action="<?php echo url('index'); ?>" role="form" >
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="请输入要搜索内容">
        </div>
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>&nbsp;搜索</button>
      </form>
    </div>
    <table class="table table-bordered table-striped table-hover">
       <tr>
           <th><input type="checkbox" name="" class="checkAll"></th>
           <th>Id</th>
           <th>名称</th>
           <th>排序</th>
           <th>类型</th>
           <th>操作</th>
       </tr>
       <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
           <tr>
               <td><input type="checkbox" name="" class="checks"></td>
               <td><?php echo $dat['id']; ?></td>
               <td><?php echo str_repeat("-", $dat['level'])?><?php echo $dat['name']; ?></td>
               <form action="" method="POST">
               <td><input type="number" class="form-control" name="<?php echo $dat['id']; ?>" value="<?php echo $dat['sort']; ?>" style="width:60px" min="0"></td>
               <td><?php echo $dat['type']==0?'图片':'列表'; ?></td>
               <td>
                   <a href="<?php echo url('del',['id'=>$dat['id']]); ?>" class="btn btn-sm btn-danger">
                     <span class="glyphicon glyphicon-trash"></span> 删除
                   </a>
                   <a href="<?php echo url('update',['id'=>$dat['id']]); ?>" class="btn btn-sm btn-success">
                     <span class="glyphicon glyphicon-pencil"></span> 编辑
                   </a>
               </td>
           </tr>
       <?php endforeach; endif; else: echo "" ;endif; ?>
       <tr>
         <td></td>
         <td></td>
         <td></td>
         <td><input type="submit" class="btn btn-primary" value="修改"></td>
       </tr>
       </form>
    </table>  
    <div class="panel-footer">
    </div>
  </div>
</div>


<!-- 添加弹出框 -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加栏目</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo url('add'); ?>" method="post">
          <div class="form-group">
            <label for="">栏目名称</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">上级栏目</label>
            <select name="pid" class="form-control">
              <option value="0">顶级栏目</option>
              <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $dat['id']; ?>"><?php echo str_repeat("-", $dat['level'])?><?php echo $dat['name']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">展示类型</label>
            <div class="radio">
              <label>
                <input type="radio" name="type" value="0" checked>
                图片
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="type" value="1">
                列表
              </label>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" value="提交" class="btn btn-success">
            <input type="reset" value="重置" class="btn btn-danger">
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>

<!-- 添加弹出框 -->
<div class="modal fade" id="pass_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
      </div>
      <div class="modal-body">
       	<form action="">
       		<div class="form-group">
       			<label for="">原始密码</label>
       			<input type="password" name="" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<label for="">修改密码</label>
       			<input type="password" name="" class="form-control" id="">
       		</div>
       		<div class="form-group">
       			<input type="submit" value="提交" class="btn btn-success">
       			<input type="reset" value="重置" class="btn btn-danger">
       		</div>
       	</form>
      </div>
      
    </div>
  </div>
</div>
</body>
<script>


	$(".titles").click(function(){
		$(".titles").next().hide();
		$(this).next().show();
	});
$("#<?php echo request()->module(); ?>").click();
</script>
</html>