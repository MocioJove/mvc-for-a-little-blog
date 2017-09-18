<?php



class UserController
{
	public function login()
	{
		$model = new UserModel();
		echo $model->getInfo();
		echo file_get_contents('view/user/login.html');
	}

	public function register()
	{	
		echo '用户要注册了';
	}

	public function profile()
	{
		$form = new FormModel();

		echo $form->getList();

		echo  '显示用户详情';
		echo file_get_contents('view/user/profile.html');
	}
}