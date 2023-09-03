<?php

    $database= new mysqli("mysql.ayush-dev.svc.cluster.local","ayush","1234","SQL_Database_edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
