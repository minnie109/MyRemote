<!-- <p>Todo list</p> -->
<!-- <a href="0.輸入表單.html">新增待辦事項</a> -->

<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>Job</td>
    <td>Urgent</td>
    <td>Job Content</td>
	<td>state</td>
	<td>編輯</td>
    
  </tr>
<?php
require("dbconfig.php");
$sql = "SELECT id, jobName, jobUrgent, jobContent, state FROM todo WHERE state = 'X';";
$stmt = mysqli_prepare($db, $sql ); //precompile sql指令，建立statement 物件，以便執行SQL
mysqli_stmt_execute($stmt); //執行SQL
$result = mysqli_stmt_get_result($stmt); //取得查詢結果

while (	$rs = mysqli_fetch_assoc($result)) { //用迴圈逐筆取出

	echo "<tr>
	<td>" , $rs['id'] ,"</td>
	<td>" , $rs['jobName'],"</td>
	<td>" , $rs['jobUrgent'], "</td>
	<td>", $rs['jobContent'],"</td>
	<td>" , $rs['state'] ,"</td>
	<td> <button onClick='loadURL(\"3.editUI.php?id=",$rs['id'] ,"\")'>edit</button>  ","</td>
	</tr>";

}
?>
</table>
