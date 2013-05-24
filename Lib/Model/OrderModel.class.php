<?php

class OrderModel extends Model {
    // 定义自动验证
   		protected $_validate    =   array(
        array('user_id','require','User id required'),
        array('goods_id','require','goods id required'),
        array('state','require','state required'),
        array('price','require','price required'),
        );
        protected $_auto    =   array(
        array('book_time','get_time',1,'callback'),
        );
		protected function get_time(){
    	$timestamp = time();
    	$time = date("Y-m-d H:i:s" ,$timestamp ); 
    	return $time;
    }
}
