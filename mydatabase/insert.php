<?php 
include("conn.php");

$tableName = $_GET["tableName"];

// 获取字段名并且构造sql语句
$query = 'insert into ' . $tableName . ' (';
$res = mysqli_query($conn, "show columns from " . $tableName);
$row = mysqli_num_rows($res);
$columns = array(); // 记录列名称
for($i=0; $i<$row; $i++) {
    $cname = mysqli_fetch_array($res)[0];
    array_push($columns, $cname);
    $query = $query . $cname . ',';
}
$query = substr($query, 0, strlen($query)-1);  
$query = $query . ') values (';
for($i=0; $i<count($columns); $i++) {
    $cname = $columns[$i];
    $query = $query . '"' . $_GET[$cname] . '",';
}
$query = substr($query, 0, strlen($query)-1);   
$query = $query . ')';

// 执行修改sql
$res = mysqli_query($conn, $query);
if($res)
    echo "<script>window.alert('SUCCESS! Return pls.');history.back(1);</script>";
else
    echo "<script>window.alert('FAIL, return pls.');history.back(1);</script>";
?>