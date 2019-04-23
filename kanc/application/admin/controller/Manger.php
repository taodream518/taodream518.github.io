<?php
namespace app\admin\Controller;
use think\Controller;
use app\admin\model\Manger as MangerModel;
class Manger extends Controller {

    public function index(){
        $search = input("get.search");
        $map['username'] = ["like","%$search%"];//模糊查询
        $data = db('manger')->where($map)->paginate(12);
        $count = db('manger')->where($map)->count();
        $this->assign('data',$data);
        $this->assign('count',$count);
        return view();
    }

    //添加
    public function ajax_add(){
        parse_str(input("post.str"),$arr);//parse_str()可以把序列化后的字符串解析成数组
        $model=new MangerModel;
        //验证
        $validate = \think\Loader::validate('Manger');
        if(!$validate->scene('add')->check($arr)){
            return $arr=['error'=>$validate->getError(),'code'=>1];
        }else{
            $res=$model->addM($arr);//调用Manger Model中的addM方法,返回的结果
            if($res){
                $arr['id']=$model->id;
                $arr['lastlogin']=0;
                $this->assign('dat',$arr);//添加成功则把数据append到页面
                return view();
            }
        }
       
    }

    //删除
    public function ajax_del(){
        $id = input("post.id");
        $model=new MangerModel;
        $res = $model->delM($id);
        if($res){
            echo 1;//删除成功
        }else{
            echo 0;//删除失败
        }
    }

    public function ajax_find(){
        $id = input("post.id");
        $data = db('manger')->find($id);
        $this->assign("dat",$data);
        return view();
    }

    //修改
    public function ajax_update(){
        // 提交过来的str是字符串，需要解释成数组
        parse_str(input("post.str"),$arr);
        $model=new MangerModel;
        //验证
        $validate = \think\Loader::validate('Manger');
        if(!$validate->scene('edit')->check($arr)){
            return $arr=['error'=>$validate->getError(),'code'=>1];
        }else{
            $res = $model->editM($arr);
            if($res){
                $data = db('manger')->find($arr['id']);
                $this->assign('dat',$data);
                return view();//修改成功
            }
        }
       
    }

    //批量删除 delete from manger where id in(1,3,5);
    public function ajax_delAll(){
       $model=new MangerModel; 
       $res = $model->delM(input("post.str"));   
       return $res;         
    }

    public function ajax_status(){
        $data = input("post.");
        $res = db('manger')->where("id",$data['id'])->update(['status'=>$data['status']]);
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
                
    }











}



















