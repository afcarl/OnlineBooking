<?php
class GoodsAction extends Action{
	public function insertroom(){
        $temp   =   D('Room');
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
    public function inserthotel(){
        $temp   =   D('Hotel');
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
    public function showroom(){
    	$class = $_POST['classname'];
    	$hotel_info = $_POST['search'];
    	$sql = "select * from se_hotel NATURAL JOIN se_room where ".$class." like '%" .$hotel_info. "%'";
    	$Model = new Model(); // 实例化一个model对象 没有对应任何数据表
		$this->data = $Model->query($sql); 
		$this->class = $class;
		$this->hotel_info = $hotel_info;
		$this->display();
    }
}
