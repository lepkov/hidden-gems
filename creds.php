<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';
global $wpdb;
$user = $wpdb->dbuser;
$pass = $wpdb->dbpassword;
$name = $wpdb->dbname;

echo $user . "\n";
echo $pass . "\n";
echo $name . "\n";
