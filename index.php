<?php

//入口文件，所有项目操作都从这里进来


// include 'controller/User.php';

// include 'controller/Form.php';

// include 'controller/'.$mod.'.php';


//自动加载函数，可以实现，当找不到一个类的时候，吧类名获取出来，然后你可以自己加载对应的文件
function __autoload($class)
{
	// var_dump($class);
		// echo substr($class, -5);

	if(substr($class, -5) == 'Model')
	{
		include 'model/'.$class.'.php';
	}elseif(substr($class, -10) == 'Controller')
	{
		include 'controller/'.$class.'.php';
	}

}


$mod = ucfirst($_GET['mod']).'Controller';

$controller = new $mod();

$act = $_GET['act'];

$controller->$act();




//ThinkPHP 3.x版本实现的原理

