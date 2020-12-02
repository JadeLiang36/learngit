<?php 
include("conn.php");
mysqli_query("set names utf8");
$tableName = $_GET["tableName"];
$primaryKeyName = $_GET["primaryKeyName"];
$primaryKeyValue = $_GET["primaryKeyValue"];

//筛选条件
$query = 'delete from ' . $tableName . ' where ' . $primaryKeyName . '=' . $primaryKeyValue;

$res = mysqli_query($conn, $query);
if($res)
    echo "<script>window.alert('SUCCESS! Return pls.');history.back(1);</script>";
else
    echo "<script>window.alert('FAIL, return pls.');history.back(1);</script>";
?>