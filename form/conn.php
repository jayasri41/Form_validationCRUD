<?php
ini_set('date.timezone', 'Asia/Kolkata');

class dbConn {
function Link(){
	$link=mysqli_connect("localhost","root","","form");
	if(!$link){
		echo "db not Connected";
	}else{
		return $link;
	}
}
}
?>