<?php

require(__DIR__.'/config.php');
require(__DIR__.'/libraries/TeamSpeak3/TeamSpeak3.php');

$ts3_virtualServer = TeamSpeak3::factory("serverquery://".$query['user'].":".$query['pass']."@".$query['host'].":".$query['port']."/?server_port=9987");

$client_list = $ts3_virtualServer->clientList();

foreach($client_list as $client) {
    
    if($client['connection_client_ip'] == $_SERVER['REMOTE_ADDR']) {

        echo "authenticated as " . $client;

    } 
    
}