<?php
	header("Content-Type: text/html; charset=UTF-8");
// //连接
 $con = mysql_connect("localhost","root","");

// //检测连接
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{
	//echo"建立连接OK!<br>";
}

// //选择数据库
$myDb = mysql_select_db("FTR");
if($myDb){
	//echo"数据库选择OK！<br>";
}

//获取数据
$result = mysql_query("SELECT * FROM ftr_users ");
if($result){
	//echo "获取表数据成功";
}else{
	//echo "shibai";
}

while ($row = mysql_fetch_array($result)) {
	echo "<tr><td>".$row['username']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td><td>
	<a href="" >修改</a><a href="" >删除</a></td></tr>";
}

mysql_close($con);

?>