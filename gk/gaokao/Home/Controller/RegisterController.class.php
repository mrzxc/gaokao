<?php 
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller
{
	public function index()
	{
		$this->display();
	}
	public function input()
	{
		if (!empty(I("username"))) {
			if (!empty(I("password"))) {
				if (!empty(I("phonenumber"))) {
					if (!empty(I("email"))) {
						$input = M("user");
						$data["username"] = I("username");
						$data["password"] = I("password");
						$data["phonenumber"] = I("phonenumber");
						$data["email"] = I("email");
						$return = $input->data($data)->add();
						if ($return) {
							$this->success('注册成功',"/gaokao/index.php/Home/");
						}
					}else{
						$this->error('您的输入为空，请重新输入');
					}
				}else{
					$this->error('您的输入为空，请重新输入');
				}
			}else{
				$this->error('您的输入为空，请重新输入');
			}
		}else{
			$this->error('您的输入为空，请重新输入');
		}
	}
}
?>