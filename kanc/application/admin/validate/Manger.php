<?php 
namespace app\admin\validate;
use think\Validate;

class Manger extends Validate{
	//验证规则
	protected $rule = [
		'username'=>'unique:Manger|require|max:10',
		'password'=>'require|min:3',

	];

	//验证消息
	protected $message =[
		'username:unique'=>'管理员名称不能重复',
		'username:require'=>'管理员名称不能为空',
		'username:max'=>'管理员名称长度不能超过10',
		'password:require'=>'管理员密码不能为空',
		'password:min'=>'管理员密码不能少于3',
	];

	//验证的场景
	protected $scene = [
		'add'=>['username','password'],
		'edit'=>['username','password'],
	];



}
 ?>
