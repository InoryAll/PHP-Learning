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

	$d = strtotime("tomorrow");
	echo date('Y-m-d h:i:sa', $d).'<br />';

	$d = strtotime("next Saturday");
	echo date('Y-m-d h:i:sa', $d).'<br />';

	$d = strtotime("+3 Months");
	echo date('Y-m-d h:i:sa', $d).'<br />';

	$startDate = strtotime("Saturday");
	$endDate = strtotime('+6 Weeks', $startDate);
	while ($startDate < $endDate) {
		echo date('M d', $startDate).'<br />';
		$startDate = strtotime('+1 Week', $startDate);
	}

	$d1 = strtotime("December 31");
	$d2 = ceil(($d1-time())/60/60/24);
	echo "距离12.31还有:".$d2."天";

?>
