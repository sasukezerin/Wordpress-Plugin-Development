<?php
function DBP_tb_create()
{
    global $wpdb;
    $table = $wpdb->prefix . "table";
    $sql = "CREATE TABLE $table (
        PersonID int,
        LastName varchar(255),
        FirstName varchar(255),
        City varchar(255),
        PRIMARY KEY (PersonID) 
        )";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql);
}
?>