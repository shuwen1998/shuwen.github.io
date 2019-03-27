<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<style type="text/css">
	.tang{
		margin-top: 200px;
		margin-left: 200px;
		border: 1px red solid;
	}
</style>
</head>
<body>
	<div class="tang">
	<form action="demo02.php" method="post">
		用户名：<input id="uname" type="text" name="name"><br>
		密码：<input id="umima" type="password" name="mima"><br>
		确认密码：<input id="uqrmima" type="password" name="qrmima"><br>
		邮箱：<input id="uyx" type="text" name="yx"><br>
		手机号码：<input id="usj" type="text" name="sj"><br>
		地址：<input id="udz" type="text" name="dz"><br>
		<input type="button" value="验证" onclick="tang()">
	</form>
	</div>
	<script>
		function tang(){
			var a=0;
			var uyx= document.getElementById("uyx").value;
			var re5 =/^\w+@+[a-z0-9]+\.+[a-z]+$/i;
								if (re5.test(uyx)) {
									alert("邮箱合法！");
									a++;
									
								} else {
									alert("邮箱格式不正确");
								}
								var umima= document.getElementById("umima").value;
			var re4 =/\w{6,12}/;
								if (re4.test(umima)) {
									alert("密码！");
									a++;
									
								} else {
									alert("密码格式不正确");
								}
								var usj= document.getElementById("usj").value;
			var re3 =/1[345789]\d{9}/;
								if (re3.test(usj)) {
									alert("手机号码！");
									a++;
								} else {
									alert("手机号码格式不正确");
								}

		}
	</script>
<?php
?>
</body>
</html>
