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

$a = @$_POST['username'];
$b = @$_POST['password'];
echo $a."<br>";
echo $b."<br>";
$result = mysql_query("SELECT managername password FROM ftr_managers where (managername = '$a' and password ='$b')");
if($result){
	$row = mysql_fetch_array($result);
	if($row){
		echo $row."<br>";
	 	echo "登录成功<br>";
	}else{
	echo "管理员不存在<br>";
	}	 
}


mysql_close($con);

?>