<?php
	$cars = array(
			array('vivo', 22, 18),
			array('bmw', 15, 65),
			array('land', 5, 2)
		);

	echo $cars[0][0]."数量:".$cars[0][1]."质量:".$cars[0][2].'<br />';
	echo $cars[1][0]."数量:".$cars[1][1]."质量:".$cars[1][2].'<br />';
	echo $cars[2][0]."数量:".$cars[2][1]."质量:".$cars[2][2].'<br />';

	echo '<br />';

	for ($i=0; $i < count($cars); $i++) { 
		for ($j=0; $j < count($cars[$i]); $j++) { 
			echo $cars[$i][$j].'&nbsp;';
		}
		echo '<br />';
	}

?>
