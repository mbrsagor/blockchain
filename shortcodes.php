<?php 

function shortcode_date(){
	return date("F d , Y");
}
add_shortcode('date','shortcode_date');
