<?php
	echo "今天是".date("Y/m/d").'<br />';
	echo "今天是".date("Y.m.d").'<br />';
	echo "今天是".date("Y-m-d").'<br />';
	echo "今天是".date("l").'<br />';

	date_default_timezone_set("Asia/Shanghai");
	echo "现在的时间是".date('h:i:sa').'<br />';

	$d = mktime(9, 12, 31, 6, 10, 2015);
	echo "创建的日期是".date('Y-m-d h:i:sa', $d).'<br />';

	$d = strtotime("10:38pm April 15 2015");
	echo "创建的日期是".date('Y-m-d h:i:sa', $d).'<br />';
?>
