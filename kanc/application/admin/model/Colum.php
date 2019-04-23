<?php
namespace app\admin\model;
use think\Model;
class Colum extends Model{
	// 无限分类展示
	public function coltree(){
		$col = $this->order('id','asc')->select();
		return $this->sort($col);        
	}

	// 改造数组
	public function sort($data,$pid=0,$level=0){
		static $arr = [];//定义静态数组 $arr
		foreach ($data as $key => $value) {
			if($value['pid']==$pid){
				$value['level'] = $level;
				$arr[] = $value;//放到数组里
				$this->sort($data,$value['id'],$level+2);//执行回调sort()方法
			}
		}
		return $arr;
	}

	// 获取子分类ID
	public function getChildId($id){
		$col =$this->select(); //查询出所有数据
		return $this->_getChildId($col,$id);
	}

	public function _getChildId($col,$id){
		static $arr = array();
		foreach ($col as $key => $value) {
			if($value['pid']==$id){
				$arr[] = $value['id'];//把符合条件的顶级分类中的所有子分类放到数组中
				$this->_getChildId($col,$value['id']);//递归式调用
			}
		}
		return $arr;
	}

	// 删除
	public function delcol($id){
		if($this::destroy($id)){
			return true;
		}else{
			return false;
		}
	}

}















