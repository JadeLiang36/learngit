<?php 
include("conn.php");

// 传值
$tableName = $_GET["tableName"];
$primaryKeyName = $_GET["primaryKeyName"];
$primaryKeyValue = $_GET["primaryKeyValue"];

// 获取要修改的行数
$query = 'update ' . $tableName . ' set ';
$res = mysqli_query($conn, "show columns from " . $tableName);
$row = mysqli_num_rows($res);
for($i=0; $i<$row; $i++) {
    $cname = mysqli_fetch_array($res)[0];
    $query = $query . $cname . '="' . $_GET[$cname] . '",';
}
$query = substr($query, 0, strlen($query)-1);   
$query = $query . ' where ' . $primaryKeyName . '=' . $primaryKeyValue;

// 执行修改sql
$res = mysqli_query($conn, $query);
if($res)
    echo "<script>window.alert('SUCCESS! Return pls.');history.back(1);</script>";
else
    echo "<script>window.alert('FAIL, return pls.');history.back(1);</script>";
?>