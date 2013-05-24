<?php
class OrderAction extends Action{
	public function insert(){
        $temp   =   D('Order');
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
}
