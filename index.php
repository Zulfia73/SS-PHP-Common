<?php
	$left = -3;
	$right = 30;

	echo "<h1>$left … $right</h1><hr>";

	for($i = $left; $i < $right; $i++){
		if($i%2 != 0){
			echo "$i, ";
		}
	}

	echo "<br><hr><br>";

	$team = array(
		'alex' => "<img src='images/alex.jpg' alt='alex' align='left' style='border:10px ridge #E6F0FF;'><p style='font-size:20px;'>My name's Alex. I write text to you in English because Alex (head of Web-development) said that it is the best skill.</p><p style='font-size:20px;'>I love life. I am little bit crazy about my body. I adore self-development.</p><div style='clear:both';'></div>",
		'nikita' => "<some html>",
		'zulya' => "<some html>",
		'lyda' => "<some html>"
	);

	foreach ($team as $key => $value) {
		echo "<br><hr>$key<hr><br>".$value;
	}