<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\AppServ\www\kanc\public/../application/admin\view\manger\index.html";i:1552212946;s:71:"C:\AppServ\www\kanc\public/../application/admin\view\public\layout.html";i:1552315986;}*/ ?>
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
	
<div class="col-md-10">
  <div class="clearfix" line-height="60px">
      <ol class="breadcrumb" style="padding:14px;">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
        <li><a href="#">管理员管理</a></li>
        <li class="active">管理员列表</li>
        <a href="" style="margin-top:-7px;" class="btn btn-success pull-right"><span class="glyphicon glyphicon-refresh"></span>&nbsp;刷新</a>
      </ol>
  </div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger" onclick="delAll()"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
			<button class="btn btn-primary" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span> 添加管理员</button>
			<div class="pull-right" style="margin-left:30px;"><p class="tot">共有数据：<span id="tot" class="badge" style="background:#4098d2;"><?php echo $count; ?></span>&nbsp;条</p></div>
			<form class="form-inline pull-right" action="<?php echo url('index'); ?>" role="form" >
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="请输入要搜索内容">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span>&nbsp;搜索</button>
			</form>
		</div>
		<!-- <div class="panel-body"> -->
        <table class="table table-bordered table-striped table-hover">
             <tr >
                 <th><input type="checkbox" name="" class="checkAll"></th>
                 <th>id</th>
                 <th>名称</th>
                 <th>最近登录时间</th>
                 <th>登录次数</th>
                 <th>状态</th>
                 <th>操作</th>
             </tr> 
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
            <!-- 修改了那一条 -->
             <tr id="tr<?php echo $dat['id']; ?>">
                 <td>
                    <input type="checkbox" name="" value="<?php echo $dat['id']; ?>" class="checks">
                 </td>
                 <td><?php echo $dat['id']; ?></td>
                 <td><?php echo $dat['username']; ?></td>
                 <td><?php echo $dat['lastlogin']==0?'从未登录':date("Y-m-d H:i:s",$dat['lastlogin']); ?></td>
                 <td>0</td>
                 <td>
                   <?php if($dat['status'] == 1): ?>
                   <button class="btn btn-sm btn-success" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)"><span class="glyphicon glyphicon-ok-circle"></span> 正常</button>
                   <?php else: ?>
                   <button class="btn btn-sm btn-warning" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)"><span class="glyphicon glyphicon-ban-circle"></span> 禁用</button>
                   <?php endif; ?>
                 </td>
                 <td>
                    <button class="btn btn-sm btn-danger" onclick="del(this,<?php echo $dat['id']; ?>)">
                      <span class="glyphicon glyphicon-trash"></span> 删除
                    </button>
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit" onclick="find(<?php echo $dat['id']; ?>)">
                      <span class="glyphicon glyphicon-pencil"></span> 编辑
                    </button>
                </td>
             </tr> 

            <?php endforeach; endif; else: echo "" ;endif; ?>

        </table>  
    <!-- </div> -->
		<div class="panel-footer">
			<?php echo $data->render(); ?>
		</div>
	</div>
</div>


<!-- 添加弹出框 -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加管理员</h4>
      </div>
      <div class="modal-body">
       	<form action="" method="post" onsubmit="return false" id="addForm">
       		<div class="form-group">
       			<label for="">用户名</label>
       			<input type="text" name="username" class="form-control">
       		</div>
       		<div class="form-group">
       			<label for="">密码</label>
       			<input type="password" name="password" class="form-control">
       		</div>
       		<div class="form-group">
       			<label for="">状态</label>
       			<br>
    				<input type="radio" name="status" value="1">正常
    				<input type="radio" name="status" value="0" checked>禁用
       		</div>
       		<div class="form-group">
       			<input value="提交" class="btn btn-success" onclick="add()">
       			<input type="reset" value="重置" class="btn btn-danger">
       		</div>
       	</form>
      </div>
      
    </div>
  </div>
</div>



<!-- 修改弹出框 -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改管理员</h4>
      </div>
      <div class="modal-body">
       		<form action="" onsubmit="return false" id="updateForm">
            
       		</form>
      </div>
      
    </div>
  </div>
</div>


<script>
//添加
function add(){
  str = $('#addForm').serialize();
  $.post("<?php echo url('ajax_add'); ?>",{str:str},function(data){
    console.log(data);//返回的数据是 {error: "username已存在", code: 1}
    if(data.code!=1){   //验证成功
      $('.table').append(data);
      $('.close').click();
      num = $('#tot').html();
      num = parseInt(num);
      $('#tot').html(++num);
    }else{
      alert(data.error);
    }
  })
}

//删除
function del(obj,id){
  $.post("<?php echo url('ajax_del'); ?>",{id:id},function(data){
    if(data == 1){
      $(obj).parents('tr').remove();//删除成功就remove/hide dom元素即可
      num = $('#tot').html();
      num = parseInt(num);
      $('#tot').html(--num);
    }
  });

}

//查找
function find(id){
  $.post("<?php echo url('ajax_find'); ?>",{id:id},function(data){
    $('#updateForm').html(data);
  });
}

//修改
function update(id){
  str = $("#updateForm").serialize();
  $.post("<?php echo url('ajax_update'); ?>",{str:str},function(data){
    if(data.code!=1){
        $('#tr'+id).html(data);//把ajax_update.html中模板的数据展示回index.html中
        $('.close').click();
    }else{
        alert(data.error);
    }
    
  });
}
// ---------------------------------------------------------------------
//为全选绑定点击事件
$('.checkAll').click(function(){
    //获取全选状态
    var flag = $('.checkAll').prop("checked");//特别注意与attr的区别
    //获取所有的子checkbox 
    var checks = $(".checks");
    checks.prop("checked",flag);
});

//为所有的子checkbox 绑定点击事件
$(".checks").click(function(){
    //获取选中的checkbox 
    var checkboxs = $(".checks:checked");
    //操作全选的状态
    $('.checkAll').prop("checked",checkboxs.length == $(".checks").length);
})
//------------------------------------------------------------------------
//批量删除
function delAll(){
    datas=$('.checks:checked');//获取被选中的对象object
    arr = [];
    for(i=0;i<datas.length;i++){
        arr[i] = datas.eq(i).val();
    }
    //数组转字符串
    str = arr.join(',',arr);
    $.post("<?php echo url('ajax_delAll'); ?>",{str:str},function(data){
        if(data==arr.length){
            for(i=0;i<arr.length;i++){
                $("#tr"+arr[i]).remove();
            }
        }else{
            alert('删除失败');
        }
    })
}

//状态改变
function status(obj,id,val){
    if(val){
        $.post("<?php echo url('ajax_status'); ?>",{'id':id,'status':0},function(data){
            if(data==1){
                $(obj).html("<span class='glyphicon glyphicon-ban-circle'></span> 禁用");
                $(obj).attr('class','btn btn-sm btn-warning');
                $(obj).attr("onclick","status(this,"+id+",0)");
            }else{
                alert("修改失败！");
            }
        })
    }else{
        $.post("<?php echo url('ajax_status'); ?>",{'id':id,'status':1},function(data){
            if (data==1) {
                $(obj).html("<span class='glyphicon glyphicon-ok-circle'></span> 正常");
                $(obj).attr('class','btn btn-sm btn-success');
                $(obj).attr("onclick","status(this,"+id+",1)");
            }else{
                alert("修改失败！");
            }
        })
    }
}








  //   添加
//   function add(){
//     str=$('#addForm').serialize();
//     $.post("<?php echo url('ajax_add'); ?>",{str:str},function(data){
//         if(data.code!=1){
//             $('.table').append(data);
//             $('.close').click();
//             num=$('#tot').html();
//             num=parseInt(num);
//             $('#tot').html(++num);
//         }else{
//             alert(data.error);
//         }
//     })
// }
//删除
// function del(obj,id){
//     $.post("<?php echo url('ajax_del'); ?>",{id:id},function(data){
//         if(data==1){
//             $(obj).parent().parent().remove();
//             num=$('#tot').html();
//             num=parseInt(num);
//             $('#tot').html(--num);
//         }
//     });
// }
// 查找
// function find(id){
//     $.post("<?php echo url('ajax_find'); ?>",{id:id},function(data){
//         $('#updateForm').html(data);  
//     })
// }
// 修改
// function update(id){
//     str=$('#updateForm').serialize();
//     $.post("<?php echo url('ajax_update'); ?>",{str:str},function(data){
//         $('#tr'+id).html(data);
//         $('.close').click();
//     })
// }
// 批量删除
// $('.checkAll').click(function(){
//     $('.checks').click();
// });
// function delAll(){
//     datas=$('.checks:checked');
//     arr=new Array();
//     for(i=0;i<datas.length;i++){
//         arr[i]=datas.eq(i).val();
//     }
//     str=arr.join(',',arr);
//     $.post("<?php echo url('ajax_delAll'); ?>",{str:str},function(data){
//         if(data==arr.length){
//             for(i=0;i<arr.length;i++){
//                 $("#tr"+arr[i]).remove();
//             }
//         }else{
//             alert("删除失败");
//         }
//     })
// }
// 状态改变
// function status(obj,id,val){
//     if(val){
//         $.post("<?php echo url('ajax_status'); ?>",{id:id,status:0},function(data){
//             if(data==1){
//                 $(obj).html("禁用");
//                 $(obj).attr('class','btn btn-danger');
//                 $(obj).attr("onclick","status(this,"+id+",0)");
//             }else{
//                 alert('修改失败');
//             }
//         })
//     }else{
//         $.post("<?php echo url('ajax_status'); ?>",{id:id,status:1},function(data){
//             if(data==1){
//                 $(obj).html("正常");
//                 $(obj).attr('class','btn btn-info');
//                 $(obj).attr("onclick","status(this,"+id+",1)");
//             }else{
//                 alert('修改失败');
//             }
//         })
//     }
// }
</script>
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