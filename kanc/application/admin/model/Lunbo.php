<?php
namespace app\admin\model;
use think\Model;
class Lunbo extends Model{
	// 添加
	public function addL($arr){
		if($this->save($arr)){
			return true;
		}else{
			return false;
		}
	}
	// 删除
	public function delL($id){
		$data=$this->find($id);
		unlink("./static/uploads/{$data['img']}");//删除uploads文件夹下的图片
		return $this::destroy($id);
	}
	
}