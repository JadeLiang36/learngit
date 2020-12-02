<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> employee </title>
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
			<h3> EMPLOYEE </h3>
		</div>
		<form action="insert.php" method="get">
			<table border="1" align="center">
			<?php
				$tableName="emp2018192024";
				//if(!issue($tableName)) die("NOT EXIST!");
				include("conn.php");
				//打印表头
				$columns=array();
				$res=mysqli_query($conn, "show columns from emp2018192024");
				if(!$res) die("no data");
				$row=mysqli_num_rows($res);
				echo '<tr style="background-color:salmon">';
				for($i=0; $i<$row; $i++){
					$dbrow=mysqli_fetch_array($res);
					echo '<td>' . $dbrow[0] . '</td>';
					array_push($columns, $dbrow[0]);
				}
				echo '<td>OPERATE</td>';
				echo '</tr>';

				// 打印数据
				$res = mysqli_query($conn, "select * from emp2018192024");
				$row = mysqli_num_rows($res);
				for($i=0; $i<$row; $i++) {
					echo '<tr>';
					$dbrow = mysqli_fetch_array($res);
					for($j=0; $j<count($columns); $j++) {
						echo '<td>' . $dbrow[$columns[$j]] . '</td>';
					}
					echo '<td><a href="edit.php?tableName=emp2018192024' . '&primaryKeyName=' . $columns[0] . '&primaryKeyValue=' .$dbrow[0] . '">edit</a> ';
					echo '<a href="delete.php?tableName=emp2018192024' . '&primaryKeyName=' . $columns[0] . '&primaryKeyValue=' .$dbrow[0] . '">delete</a></td>';
					echo '</tr>';
				}

				// 添加数据
				echo '<tr style="background-color:salmon">';
				for($j=0; $j<count($columns); $j++) {
					echo '<td><input type="text" name="' . $columns[$j] . '" style="width:120;"></input></td>';
				}
				echo '<td><input type="submit" style="width:120"; value="INSERT"></td>';
				echo '<input type="text" name="tableName" style="display:none;" value=emp2018192024' . '></input>';
				echo '</tr>';
				?>
			</table>
		</form>
		<style>td {text-align: center;}</style>
	</body>
</html>
