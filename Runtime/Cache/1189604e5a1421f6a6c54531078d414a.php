<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
   		<title>Search Hotel</title>
 	</head>
 	<body>
 			<?php echo ($class); ?> + <?php echo ($hotel_info); ?><br>
 		    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["uid"]); ?>--<?php echo ($vo["hotel_name"]); ?>--<?php echo ($vo["price"]); ?>--<?php echo ($vo["available_number"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
  	</body>
</html>