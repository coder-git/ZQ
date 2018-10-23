<?php


	/**
	 * 对数据进行排序
	 * return array 排序完成的数组
	 * $condition str 排序字段
	 * 
	 */
	function sort_data($data, $condition = 'price', $sort_type ='')
	{
		foreach ($data as $key => $value) {
			$price[$key] = $value[$condition];
		}	

		if (isset($sort_type) && !empty($sort_type)) {
			if ($sort_type == 'desc') {
				array_multisort($price, SORT_DESC, $data);
			} else {
				array_multisort($price, SORT_ASC, $data);
			}
		} else{
			if ($condition == 'starttime') {
				array_multisort($price, SORT_ASC, $data);//根据$condition 对$data 进行排序
			} else {
				array_multisort($price, SORT_DESC, $data);//根据$condition 对$data 进行排序
			}
		}

		return $data;

			// array_multisort($otime, SORT_DESC, $sort_arr);dump($sort_arr);dump($otime);
	}



/**
 * 生成订单号
 */

function order_num($data = ''){
	if ($data) {
		$order_id = $data['type'];
		$order_id .= date('Ymdhis');
		$order_id .= mt_rand(10,99);
		return $order_id;		
	}
}