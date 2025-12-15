<?php
// echo "Page requested time is ". date("h:i:s a");
$submtion_time = $_SERVER['REQUEST_TIME'];
echo "Page requested time is ". date("h:i:s a",$submtion_time);
?>