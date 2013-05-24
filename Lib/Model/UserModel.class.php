<?php

class UserModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('name','require','name required'),
        array('password','require','password required'),
        );

}