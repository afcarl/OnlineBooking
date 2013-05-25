<?php
class BookpayAction extends Action{
	public function book(){                
        $Mroom = M('Room');
        $room = $Mroom->find($_POST['uid']);
        $data['price'] = $room['price'];
        $data['uid'] = $_POST['uid'];
        $data['user_id'] = $_SESSION['user_id'];
        $_SESSION['uid']=$_POST['uid'];
        $_SESSION['price'] = $data['price'];
        
        $this->data = $data;
        $this->display();
        
        }
    public function generate(){
        $data['user_id'] = $_SESSION['user_id'];
        $data['uid'] = $_SESSION['uid'];
        $data['price'] = $_SESSION['price'];
        $data['state'] = 1;
        $Dorder = D('Order');
        $Dorder->create($data);
        $result = $Dorder->add();
        if ($result){
          $this->success('订单生成成功！', '__APP__/History/viewHistory');
        }
        else{
          $this->error('订单生成失败！');
        }
        
    }
}
