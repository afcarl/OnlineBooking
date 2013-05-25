<?php

class RoomModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('uid','require','uid required'),
        array('hotel_id','require','hotel_id required'),
        array('available_number','require','Available room number required'),
        array('price','require','price required'),
        );

}