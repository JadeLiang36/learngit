<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>mydatabase</title>
		<style type="text/css">
			.hint{
				margin: 60px auto 50px;
				height: 80px;
				font-size: 40px;
				display: block;
				text-align: center;
			}
			.main{
				margin: 0px 5% 15px;
				padding: 20px;
				width: 35%;
				heigh: auto;
				background: salmon;
				text-align: center;
			}
			.botton{
				margin: 0px 18% 10px;
				width: 10%;
				height: auto;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="hint">
			<h3>Choose A Table In The Database</h3>
		</div>
		<div id="main1" class="main" style="float: left"> 
			<h3 style="font-size: 50px">DEPARTMENT</h3>
			<br>
			<p style="font-size: 20px"> Information about deptno, location, ... </p>
		</div>
		<div id="main2" class="main" style="float: right"> 
			<h3 style="font-size: 50px">EMPLOYEE </h3>
			<br>
			<p style="font-size: 20px"> Information about empno, mgr, hiredate, ... </p>
		</div>
		<form action="dept.php" method="post">
			<div id="b1" class="botton" style="float:left">
				<input type="submit" name="empb" value="ENTER" style="font-size: 25px">
			</div>
		</form>
		<form action="emp.php" method="post">
			<div id="b2" class="botton" style="float:right">
				<input type="submit" name="deptb" value="ENTER" style="font-size: 25px">
			</div>
		</form>
	</body>
</html>
