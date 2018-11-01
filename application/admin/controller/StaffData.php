<?php 
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\StaffData as Staffs;
// use app\think\Db;


/**
 * staff_profile
 */
class StaffData extends Base
{
	protected function _initialize(){
		parent::login_ini();
	}

	public function index()
	{

		$departs = db('depar_post');
		$res = $departs
		->alias('center')
		->field('center.d_id,center.post_id,d.department,d.name,p.postname')
		->join('zq_department d', 'center.d_id = d.id')
		->join('zq_post p', 'center.post_id = p.post_id')
		->select();




		$majors = array();
		foreach($res as $item){
			extract($item);
			$key = "{$name}:{$department}";

			if(!isset($majors[$key])){
				$majors[$key] = array(
					"name" => $name,
					'd_id' => $d_id,
					"department" => $department,
					"post" => array($post_id => $postname)
				);

    }else{ // 已存在key记录且major_name未重复, 追加 marjor_name
    	if(!in_array($postname, $majors[$key]['post'])){
    		$majors[$key]['post'][$post_id] = $postname;
    	}
    }
}


// 提取数组
$depart_posts = array_values($majors);


	// $ddatas = array($depart['d_id'] => $depart['department'],'posts' => $depart['postname']);

		// $depart = model('Department');
		// $res = $depart->showDeps();

$this->assign('depart',$depart_posts);
return $this->fetch();
}


public function showdatas()
{
	$staffm  = new Staffs;
	$datas = $staffm->show();
	return $datas;
}




public function deldatas()
{
	$ids = input('ids/a');
		// halt($ids); 
	$result  = Staffs::destroy($ids);
	if ($result) {
		$this->success('删除成功');

	} else {
		$this->error('删除的用户不存在');
	}


}



public function editdatas()
{
	$serialize_data = input();
	$i = 1;

	$results = Staffs::where('staff_id',$serialize_data['staff_id'])->update($serialize_data);

	if ($results) {

		$this->success('成功'.$i++);
	} else {

		return $results = Staffs::where('staff_id',$serialize_data['staff_id'])->fetChSql(true)->update($serialize_data);
		$this->error('修改失败'.$i++);
	}
}


public function adddatas()
{
	$serialize_data = input();
	
}

public function add_profile()
{

	$staffData = db('staffData');
	$res = $staffData->where('userid',session('user.userid'))->find();
	if (empty($res)) {
		return $this->fetch('user/edit');
	} else {
			// if ($res['staff_status'] == 1) {
			// 	$this->edit_profile($res);


			// 	// $this->redirect('StaffData/edit_profile',$res);
			// }

		if ($res['staff_status'] == 1) {
			$this->assign('data',$res);
			return $this->fetch('user/edit');
		}
	}


	$this->error(" 不能再次修改了！ ",'user/index');
}

public function edit_profile()
{

	$staffData = db('staffData');
	$res = $staffData->where('userid',session('user.userid'))->find();
	if ($res && $res['staff_status'] == 1) {
		$this->assign('data', $res);
	}
	return $this->fetch('user/edit');

		// $this->error('未知错误staffdata/edit_profile');


}







public function save_profile()
{

	$staffData = db('StaffData');

	$stares = $staffData->where('userid',session('user.userid'))->find();

	$user_pf = input('param.');

	if ($user_pf['post'] && $user_pf['staff_name']) {
		$user_pf['userid'] = session('user.userid');
	}

	if (empty($stares)) {

		if ($staffData->insert($user_pf)) {
			$this->success('添加成功','user/index');
		} else {
			$this->error('添加失败');
		}

	} else {
		if ($stares['staff_status'] == 1) {

			$res = $staffData->where('userid',session('user.userid'))->where('staff_status',1)->update($user_pf);

			if ($res) {
				$this->success('更新成功','user/index');

			} elseif($res === 0){

				$this->success('数据没有修改');
			} else {
				$this->error('更新失败');
			}
		}
	}

	$this->error('无法再次编辑!','user/index');



}

}