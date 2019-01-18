<?php

// Teamspeak query
$query['host']      = '127.0.0.1';
$query['user']      = 'serveradmin';
$query['pass']      = 'serverquerypassword';
$query['port']      = '10011';

if(!$con) {
    echo "Error: " . $con->error;    
} 