<?php 
namespace app\index\model;

use think\Model;

/**
* contents model 
*/
class Contents extends Model
{
	
	function __construct()
	{		
		echo 'contents model';
	}

	public function allDatas()
	{
		echo "alldatas";
	}
	
}