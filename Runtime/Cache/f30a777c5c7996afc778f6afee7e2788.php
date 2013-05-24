<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Register</title>
 </head>
 <body>
 	<h1> Register Info </h1>
    <form method="post" action="__URL__/insert">
		<p>first name：<INPUT type="text" name="f_name"></p>
		<p>last name：<INPUT type="text" name="l_name"></p>
		<p>password：<INPUT type="text" name="password"></p>

		<INPUT type="submit" value="提交">
	</form>
 </body>
</html>