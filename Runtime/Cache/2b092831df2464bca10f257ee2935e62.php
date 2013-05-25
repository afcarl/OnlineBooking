<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>History</title>
 </head>
 <body>
 	<h1>Your Orders</h1>
 	<?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>--<?php echo ($vo["uid"]); ?>--<?php echo ($vo["book_time"]); ?>--<?php echo ($vo["price"]); ?>
    	<form  action="__APP__/Bookpay/pay" method="post">
            <button name="uid" value="<?php echo ($vo["uid"]); ?>"> Pay Order</button>
        </form>
        <form  action="__APP__/Comment/viewComments" method="post">
            <button name="uid" value="<?php echo ($vo["uid"]); ?>"> View Comments</button>
        </form>
        <form  action="__APP__/Bookpay/cancel" method="post">
            <button name="uid" value="<?php echo ($vo["uid"]); ?>"> Cancel Order</button>
        </form>
        </br><?php endforeach; endif; else: echo "" ;endif; ?>

 </body>
</html>