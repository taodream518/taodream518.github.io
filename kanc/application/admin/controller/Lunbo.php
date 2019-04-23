<?php 
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Lunbo as LunboModel;//控制器使用模型类

class Lunbo extends Controller{
	public function index(){
		$data = db('lunbo')->paginate(3);
		$this->assign('data',$data);//$data数据
		return view();
	}

	//文件上传
	public function ajax_upload(){
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move("./static/uploads");//此文件与入口文件同级
		if($info){
		// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			echo $info->getSaveName();
		}else{
		// 上传失败获取错误信息
			echo $file->getError();
		}
	}

	//添加
	public function add(){
		$data = input('post.');
		$LunboModel = new LunboModel;
		//验证
		$validate = \think\Loader::validate('Lunbo');
		if(!$validate->scene('add')->check($data)){
			$this->error($validate->getError());
		}
		$res = $LunboModel->addL($data);
		if($res){
			$this->success('添加成功',url('index'));
		}else{
			$this->error('添加失败');
		}
	}
	//删除
	public function del($id){
		$LunboModel = new LunboModel;	
		$res = $LunboModel->delL($id);
		if($res){
			$this->success('删除成功',url('index'));
		}else{
			$this->error('删除失败');
		}
	}
	//修改
	public function update($id){
		if(request()->isPost()){
			$data = input("post.");
			if(!$data['img']){	//如果没有上传新图
				$data['img']=$data['oldimg'];
			}else{
				unlink("./static/uploads/{$data['oldimg']}");//把旧图删除掉
			}
			unset($data['oldimg']);	
			$LunboModel = new LunboModel;	
		    $res = $LunboModel->save($data,['id'=>$id]);
		    if($res){
		    	$this->success('修改成功',url('index'));
		    }else{
		    	$this->error('修改失败');
		    }

		}else{
			$data = db('lunbo')->find($id);
			$this->assign('data',$data);
			return view();
		}
	}

	//排序
	public function sort(){
		$data = input("post.");
		$LunboModel = new LunboModel;	
	    $res = $LunboModel->save($data,['id'=>$data['id']]);
	    if($res){
	    	echo 1;
	    }else{
	    	echo 0;
	    }
	}
}
































// namespace app\admin\controller;
// use think\Controller;
// use app\admin\model\Lunbo as LunboModel;
// class Lunbo extends Controller{
// 	public function index(){
// 		$data=db('Lunbo')->select();
// 		$this->assign([
// 			'data'=>$data,

// 			]);
// 		return view();
// 	}
// 	// 文件上传
// 	public function ajax_upload(){
// 		$file = request()->file('file');
// 		// 移动到框架应用根目录/public/uploads/ 目录下
// 		$info = $file->move("./static/uploads");
// 		if($info){
// 			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
// 			echo $info->getSaveName();
// 		}else{
// 			// 上传失败获取错误信息
// 			echo $file->getError();
// 		}
// 	}
// 	// 添加
// 	public function add(){
// 		$LunboModel=new LunboModel;
// 		//验证
// 		$validate=\think\Loader::validate('Lunbo');
// 		if(!$validate->scene('add')->check(input('post.'))){
// 			$this->error($validate->getError());
// 		}
// 		$res=$LunboModel->addL(input('post.'));
// 		if($res){
// 			$this->success('添加成功',url('index'));
// 		}else{
// 			$this->error('添加失败');
// 		}
// 	}
// 	// 删除
// 	public function del($id){
// 		$LunboModel=new LunboModel;
// 		$res=$LunboModel->delL($id);
// 		if($res){
// 			$this->success('删除成功',url('index'));
// 		}else{
// 			$this->error('删除失败');
// 		}
// 	}
// 	// 修改
// 	public function update($id){
// 		if(request()->isPost()){
// 			$data=input("post.");
// 			if(!$data['img']){
// 				$data['img']=$data['oldimg'];
// 			}else{
// 				unlink("./static/uploads/{$data['oldimg']}");
// 			}
// 			unset($data['oldimg']);
// 			$LunboModel=new LunboModel;
// 			$res=$LunboModel->save($data,['id'=>$id]);
// 			if($res){
// 				$this->success('修改成功',url('index'));
// 			}else{
// 				$this->error('修改失败');
// 			}
// 		}else{
// 			$data=db('Lunbo')->find($id);
// 			$this->assign('data',$data);
// 			return view();
// 		}
// 	}
// 	// 排序
// 	public function sort(){
// 		$data=input("post.");
// 		$LunboModel=new LunboModel;
// 		$res=$LunboModel->save($data,['id'=>$data['id']]);
// 		if($res){
// 			echo 1;
// 		}else{
// 			echo 2;
// 		}
// 	}
// }