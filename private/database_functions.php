<?php

function db_connect() {
    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    $connection->query("SET NAMES utf8");
    $connection->query("SET CHARACTER SET utf8");
    $connection->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
    confirm_db_connect($connection);
    return($connection);
}

function confirm_db_connect($connection){
    if($connection->connect_errno ){
        $msg = "Database connection failled";
        $msg .= $connection->connect_error;
        $msg .= " ( " . $connection->connect_errno . " )";
        exit($msg);
    }
}
function db_disconnect($connection) {
if(isset($connection)) {
$connection->close();
  }
}



