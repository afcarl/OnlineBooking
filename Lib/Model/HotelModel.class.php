<?php

class UserModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('hotel_name','require','name required'),
        array('star_level','require','Star level required'),
        );

}