<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $this->M_common = M("common");
    }
    public function index(){
        $info = $this->M_common->select();
        $this->assign('info',$info);
        $this->display();
    }
    /**
     * 添加愿望
     */
    public function add(){
        if(IS_POST){
            $data = $this->M_common->create();
            $data['time']=time();
            $r = $this->M_common->add($data);
            if($r){
                $this->success('添加成功','Index/index');
            }else{
                $this->succsee('添加失败');
            }
        }
    }
    /**
     * ajax提交
     */
    public function ajaxSubmit(){
        if(IS_AJAX){
            $data = array(
                'title' => I('title'),
                'common' => I('common'),
                'time' =>time()
            );

            if($id=$this->M_common->add($data)){
                $data['id'] = $id;
                $data['common'] = phiz($data['common']);
                $data['time']   = date('y-m-d H:i',$data['time']);
                $data['status'] = 1;
                $this->ajaxReturn($data,'json');
            }else{
                $this->ajaxReturn(array('status'=>0),'json');
            }
//            $phiz = array(
//                    'zhuakuang'=>"抓狂",
//					'baobao'=>"抱抱",
//                    'haixiu'=>"害羞",
//                    'ku'=>"酷",
//                    'xixi'=>"嘻嘻",
//                    'taikaixin'=>"太开心",
//                    'touxiao'=>"偷笑",
//                    'qian'=>"钱",
//                    'huaxin'=>"花心",
//                    'jiyan'=>"挤眼"
//            );
//            F('phiz',$phiz,'./Data/');

        }
    }
}