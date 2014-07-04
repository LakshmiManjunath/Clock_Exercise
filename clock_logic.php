<?php
	date_default_timezone_set('America/New_york');
	$current_time = date('G');
	if( $current_time >= 5 && $current_time < 11)
	{ 	$background_color = '#865f86';
		$image = 'morning.png';
	}
	elseif( $current_time >= 11 && $current_time < 16)
	{	
		$background_color = '#2c87c8';
		$image = 'afternoon.png';
	}
	elseif($current_time >= 16 && $current_time < 20 )
	{	
		$background_color= '#c7b02f';
		$image = 'evening.png';
	}
	else
	{
		$background_color = '#180629';
		$image = 'night.png';
	}
?>