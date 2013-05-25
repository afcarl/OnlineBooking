<?php
class HistoryAction extends Action{
	public function viewHistory(){
	    $sql = "select * from se_order where user_id = " . $_SESSION['user_id'];
        $Model = new Model();
        $this->orders = $Model->query($sql);
        $this->display();
        
    }
    
}
