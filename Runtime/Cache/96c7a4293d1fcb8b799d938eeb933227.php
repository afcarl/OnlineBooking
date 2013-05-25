<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Add hotel information</title>
 </head>
 <body>
 	<h1>Hotel Info </h1>
    <form method="post" action="__URL__/inserthotel">
		<p>Hotel name：<INPUT type="text" name="hotel_name"></p>
		<p>star_level：<INPUT type="text" name="star_level"></p>
		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>