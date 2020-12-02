<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> department </title>
		<style type="text/css">
			.hint{
				margin: 60px auto 50px;
				height: 80px;
				font-size: 40px;
				display: block;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="hint">
			<h3> EDIT </h3>
		</div>
		<form action="save_edit.php" method="GET">
			<table border="2" align="center">
				<?php 
				include("conn.php");

				if(!isset($_GET["tableName"])) die("loss key infomation");
				if(!isset($_GET["primaryKeyName"])) die("loss key infomation");
				if(!isset($_GET["primaryKeyValue"])) die("loss key infomation");

				$tableName = $_GET["tableName"];
				$primaryKeyName = $_GET["primaryKeyName"];
				$primaryKeyValue = $_GET["primaryKeyValue"];

				// 打印表头
				$columns = array();
				$res = mysqli_query($conn, "show columns from " . $tableName);
				if(!$res) die("no data");
				$row = mysqli_num_rows($res);
				echo '<tr style="background-color:salmon">';
				for($i=0; $i<$row; $i++) {
					$dbrow = mysqli_fetch_array($res);
					echo '<td>' . $dbrow[0] . '</td>';
					array_push($columns, $dbrow[0]);
				}
				echo '<td> OPERATE </td>';
				echo '</tr>';

				// 查询该记录
				$res = mysqli_query($conn, "select * from " . $tableName . ' where ' . $primaryKeyName . '=' . $primaryKeyValue);
				if(!$res) die("not found");
				$data = mysqli_fetch_assoc($res);

				// 修改的数据字段
				echo '<tr>';
				for($j=0; $j<count($columns); $j++) {
					echo '<td><input type="text" name="' . $columns[$j] . '" style="width:120;" value=' . $data[$columns[$j]] . '></input></td>';
				}
				echo '<td><input type="submit" style="width:120"; value="UPDATE"></td>';
				echo '</tr>';

				// 隐藏表 -- 提交表名 主键名 主键值
				echo '<input type="text" name="tableName" style="display:none;" value=' . $tableName . '></input>';
				echo '<input type="text" name="primaryKeyName" style="display:none;" value=' . $primaryKeyName . '></input>';
				echo '<input type="text" name="primaryKeyValue" style="display:none;" value=' . $primaryKeyValue . '></input>';
				?>
			</table>
		</form>
		<style>td {text-align: center;}</style>
	</body>
</html>