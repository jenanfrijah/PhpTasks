<?php
session_start();

if(!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 1;
}
else
echo "Counter on refresh = " . $_SESSION['counter']++;
?>