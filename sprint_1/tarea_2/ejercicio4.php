<?php

function counter($limit = 10, $increment)
{
	$start = 1;

	while ($start <= $limit) {
		echo $start . "\n";
		$start += $increment;
	}
}

counter(30, 4);

?>