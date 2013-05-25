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
    	$name = $_POST['name'];
    	$password = $_POST['password'];
    	$sql = "select * from se_user where name = '".$name."' AND password = '".$password."'";
    	$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$result = $Model->query($sql);
		if($result)
		{
			session_start();
			$_SESSION['user_name'] = $name;
			$_SESSION['user_id'] = $result[0]['id'];
			$_SESSION['status'] = $result[0]['status'];
			//$message = "login successfully";
			//$this->assign('message',$message);
			$this->success('登陆成功', '__APP__/Goods/searchhotel');
		}
		//$this->display();
		else
		{
			//$message = "user information error";
			$this->error('登陆失败');
		}
			
    	
    }
}
