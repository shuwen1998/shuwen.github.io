<meta charset="utf-8">
<?php
$conn=mysql_connect("localhost","root","root")or die("数据库".mysql_errno());
mysql_select_db("tang",$conn);
$query="INSERT INTO `wei`(`id`, `name`, `pwd`) VALUES ('3','weo','123456')";
// $result=mysql_query($query)or die("数据库".mysql_errno());
// while ($row=mysql_fetch_array($result)){
// 	echo "<table border='1' width='20%'><tr><td>".$row['id']."</td>
// 			<td>".$row['name']."</td>
// 			<td>".$row['pwd']."</td>
// 	</tr></table>";
// }
// print_r(mysql_fetch_array($result,MYSQL_ASSOC));
// mysql_free_result($result);
mysql_query($query);
mysql_close($conn);
?>