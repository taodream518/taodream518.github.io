<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\AppServ\www\kanc\public/../application/admin\view\manger\ajax_find.html";i:1552121775;}*/ ?>
<div class="form-group">
    <label for="">用户名</label>
    <input type="text" name="username" class="form-control" value="<?php echo $dat['username']; ?>">
</div>
<div class="form-group">
    <label for="">密码</label>
    <input type="password" name="password" class="form-control">
</div>
<div class="form-group">
    <label for="">状态</label>
    <br>
    <input type="radio" name="status" <?php echo $dat['status']==1?'checked':''; ?> value="1">正常
    <input type="radio" name="status"  <?php echo $dat['status']==0?'checked':''; ?> value="0">禁用
</div>
<!-- 通过隐藏域提交修改表单 -->
<input type="hidden" name="id" value="<?php echo $dat['id']; ?>">
<div class="form-group">
    <input value="提交" class="btn btn-success" onclick="update(<?php echo $dat['id']; ?>)">
    <input type="reset" value="重置" class="btn btn-danger">
</div>