<?php
namespace app\admin\model;
use think\Model;
class Manger extends Model{
	// 添加
	public function addM($arr){
		$arr['password']=md5($arr['password']);
		// tp5 Model提供的方法save(要保存的数据) 
		if($this->save($arr)){
			return true;
		}else{
			return false;
		}
	}

	// 删除
	public function delM($id){
		// tp5 Model提供的方法destroy()
		return $this::destroy($id);
	}

	//修改
	public function editM($arr){
		// tp5 Model提供的方法update(要修改的数据)
		if($arr['password']){	//如果原来的密码没修改并且存在
			$arr['password']=md5($arr['password']);//还是原来的密码，则加密
		}else{
			$data = $this->find($arr['id']);//没有则从数据库中查找出来
			$arr['password'] = $data['password'];
		}
		//修改的结果  返回影响的行数
		$res = $this::update([
			'username'=>$arr['username'],
			'password'=>$arr['password'],
			'status'=>$arr['status'],
			'id'=>$arr['id']
		]);
		return $res;

	}














	// public function delM($id){
	// 	return $this::destroy($id);
	// }
	// 修改
	// public function editM($arr){
	// 	if($arr['password']){
	// 		$arr['password']=md5($arr['password']);
	// 	}else{
	// 		$data=$this->find($arr['id']);
	// 		$arr['password']=$data['password'];
	// 	}
	// 	$res=$this::update(["username"=>$arr['username'],'password'=>$arr['password'],'status'=>$arr['status'],'id'=>$arr['id']]);
	// 	return $res;

	// }
}