<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\AppServ\www\kanc\public/../application/admin\view\manger\ajax_update.html";i:1552125208;}*/ ?>
<td><input type="checkbox" name="" value="<?php echo $dat['id']; ?>" class="checks"></td>
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