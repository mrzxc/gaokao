<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    //     //测试专用
    	if (!empty(cookie("username"))) {
    		$status = '<a href="127.0.0.1/gaokao/index.php/Home/Login/quit"><h3 class="denglu">退出登录</h3></a>';
    	}else{
    		$status = '<a href="127.0.0.1/gaokao/index.php/Home/Login/Login"><h3 class="denglu">登录</h3></a>';
    	}
    	$this->assign('status',$status);
    	$this->display();
}
    public function ec(){
        $bat = M('batch_controlline');
        $spe = M('special_line_science');
        $batCon = [
            'Type' => 'science',
            'Batch' => '本科一批',
        ];
        $b = $bat->where($batCon)->select();
        for ($i=0; $i < count($b); $i++) {
            $speCon = [
                'Year' => $b[$i]['year'],
                'Batch' => '本科一批',
                'ProvinceId' => $b[$i]['provinceid']
            ];
            $sa['ProvinceLine'] = $b[$i]['provinceline'];
            $s = $spe->where($speCon)->save($sa);
        }
    }
}