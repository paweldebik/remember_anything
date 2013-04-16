<?php

/* * * * * * * * * * * * * */
/* BLURBS
/* * * * * * * * * * * * * */


// Set standard interval to send out the reminders at
$send_interval = array("1000msec","2000msec","10000msec","100000msec");




// Check if it's time to send out a reminder
if( get_timestamp() == $send_interval ){
	send_reminder();
}

$sendreminder = function(){
	$message = get_what_to_remember();
}


// Getter functions
$get_what_to_remember = function(){
	$output = db_call(remember);

	return $output;
}

$get_timestamp = function(){
	$output = db_call(inputtime);

	return $output;
}

/* Setter functions */

// Remove all entries from db that are older then 1 month
$db_cleanup = function(){

}

// Get stuff from db
$db_cleanup = function( $field ){
	$requested_field = $field;
}



?>