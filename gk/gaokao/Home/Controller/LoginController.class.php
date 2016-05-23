<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	public function index()
	{
		$username = I("post.username");
		$password = I("post.password");
		$user = M("user");
		$getuser = $user->where("AccountID='$username'")->find();
		if (!empty(cookie("username"))) {
			// cookie("username",null);
			$this->error('您已登陆，请先退出账号再登陆',"/gaokao/index.php");
		}else{
			if ($password == $getuser["password"]) {
				cookie("username",$username);
				if (empty($getuser['name'])) {
					$this->success('登录成功','/gaokao/index.php/Home/Login/add');
				}else{
					$this->success('登录成功','/gaokao/index.php');
				}
			}else{
				$this->error('密码错误，请重新输入');
			}
		}
	}
	public function login(){
		$this->display("Login:index");
	}
	public function add(){
		$status = '<a href="/gaokao/index.php/Home/Login/quit"><h3 class="denglu">退出登录</h3></a>';
		$this->assign('status',$status);
		$this->display("Login:add");
	}
	public function addData(){
		//得到提交数据
		$data["Name"] = I("post.name");
		$data["Sex"] = I("post.sex");
		$year = I("post.year");
		$month = I("post.month");
		$day = I("post.day");
		$data["Type"] = I("post.type");
		$data["Province"] = I("post.province");
		$data["City"] = I("post.city");
		$data["School"] = I("post.school");
		$data["Birthday"] = $year."-".$month."-".$day;
		//验证数据

		//插入数据
		$AccountID = cookie("username");
		$user = M("user");
		$Account["AccountID"] = $AccountID;
		$re = $user->where($Account)->save($data);
		if ($re !== false) {
			$this->success('提交成功',"/gaokao/index.php");
		}

	}
	public function quit()
	{
		cookie("username",null);
		$this->success('退出成功','/gaokao/index.php/Home/Index/index');
	}
}

 ?>