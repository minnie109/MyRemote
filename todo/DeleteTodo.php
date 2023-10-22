<?php
require('dbconfig.php');
$jobID=(int)$_POST['jobID'];

	$sql = "DELETE FROM todo WHERE id = $jobID"; //SQL中的 ? 代表未來要用變數綁定進去的地方
	
	// 執行 DELETE 查詢
    if (mysqli_query($db, $sql)) {
        echo "Message deleted.";
    } else {
        echo "Error deleting message: " . mysqli_error($db);
    }

    mysqli_close($db);
	
?>
