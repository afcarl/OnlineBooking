<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>generate order</title>
 </head>
 <body>
 	<h1>Order Info </h1>
    <form method="post" action="__URL__/insert">
		<p>user_id：<INPUT type="text" name="user_id"></p>
		<p>goods_id：<INPUT type="text" name="goods_id"></p>
		<p>state：<INPUT type="text" name="state"></p>
		<p>price：<INPUT type="text" name="price"></p>
		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>