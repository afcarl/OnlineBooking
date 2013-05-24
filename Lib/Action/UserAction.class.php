<?php
class UserAction extends Action{
	public function insert(){
        $temp   =   D('User');
        if($temp->create()) {
            $result =   $temp->add();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($temp->getError());
        }
    }
    public function get_time(){
    	$timestamp = time();
    	$time = date("Y-m-d H:i:s" ,$timestamp ); 
    }
    public function main(){
    	echo $_POST['name'];
    }
}
