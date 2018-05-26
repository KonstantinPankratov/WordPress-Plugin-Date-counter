<?php
/*
Plugin Name: Date counter
Plugin URI: 
Description: Date counter is a WordPress plugin that allows you to add a shortcode to count difference between two dates or display the current date easily.
Version: 1.0.1
Author: Konstantin Pankratov
Author URI: http://kopa.pw/
*/

function DateCounter($atts){
	$startDate = $atts["startdate"];
	$endDate   = strtolower($atts["enddate"]);
	
	switch (strtolower($atts["format"])) {
		case "year":
		case "years":
			$startDate = new DateTime($startDate);
			$endDate = new DateTime($endDate);

			$difference = $endDate->diff($startDate);

			$result = $difference->y;
		break;
		case "month":
		case "months":
			$startDate = strtotime($startDate);
			$endDate = strtotime($endDate);

			$min_date = min($startDate, $endDate);
			$max_date = max($startDate, $endDate);

			$i = 0;
			while (($min_date = strtotime("+1 MONTH", $min_date)) <= $max_date) {
			    $i++;
			}

			$result = $i;
		break;
		case "day":
		case "days":
			$startDate = strtotime($startDate);
			$endDate = strtotime($endDate);

			$difference = $endDate - $startDate;

			$result = floor($difference / (60*60*24));
		break;
		case "currentyear":
			$result = date("Y");
		break;
		case "currentmonth":
			$result = date("m");
		break;
		case "currentday":
			$result = date("d");
		break;
	}

	return $result;
}

add_shortcode( 'DateCounter', 'DateCounter' );

?>