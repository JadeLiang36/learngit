<!DOCTYPE html>
<html>
	//窗口设计代码
	<head>
		<meta charset="UTF-8">
		<title>toMyWeb</title>
		<style type="text/css">
			.main{
				margin: 150px auto 35px;
				padding: 20px;
				width: 533px;
				heigh: 300px;
				background: salmon;
				text-align: center;
				font-size: 250%;
			}
			.hint{
				margin: auto auto;
				height: 80px;
				font-size: 17px;
				display: block;
				text-align: center;
			}
			.bottom{
				padding-bottom: 25px;
			}
		</style>
	</head>
	<body>
		<form action="EnterMyWeb.php" method="post">
			<div id="main" class="main"> 
				<h3>Do you want to </h3>
				<h3>enter the Website?</h3>
			</div>
		 	<div class="hint">
				<h3> Enter your name please : <input type="text" name="username"> &nbsp; <input type="submit" name="submit" value="ok">
				</h3>
			</div>
		</form>
	</body>
</html>
