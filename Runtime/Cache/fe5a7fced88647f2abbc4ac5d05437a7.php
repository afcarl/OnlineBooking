<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Register</title>
 </head>
 <body>
 	<h1> Register Info </h1>
    <form method="post" action="__URL__/insert">
		<p>name：<INPUT type="text" name="name"></p>
		<p>password：<INPUT type="text" name="password"></p>
		<p>status：<INPUT type="text" name="status"></p>
		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>