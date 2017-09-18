<?php

class AdController
{
	public function show()
	{

		$model = new AdModel();
		echo $model->getInfo();
		echo '显示广告';
	}
}