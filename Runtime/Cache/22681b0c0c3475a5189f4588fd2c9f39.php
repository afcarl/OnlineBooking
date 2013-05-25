<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
   		<title>Search Hotel</title>
 	</head>
 	<body>
 			<?php echo ($class); ?>: <?php echo ($hotel_info); ?><br/>
 		    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["price"]); ?>--<?php echo ($vo["available_number"]); ?>
    			<form  action="__APP__/Bookpay/book" method="post">
                <!--<input type="submit" value="生成订单" name="uid"/>-->
                <button name="uid" value="<?php echo ($vo["uid"]); ?>"> Generate Order</button>
                </form>
                </br><?php endforeach; endif; else: echo "" ;endif; ?>
  	</body>
</html>