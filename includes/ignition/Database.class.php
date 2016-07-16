<?php

/** 
 * Database Interaction Class
 * A barebones database class for ignition 
 * Emberthemes.net
 */

Class Database {
	
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPass;

function __construct($database) {

	$this->dbHost = $database['host'];
	$this->dbName = $database['name'];
	$this->dbUser = $database['user'];
	$this->dbPass = $database['pass'];

	$connect = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
	if($connect->connect_errno > 0){
		die('Database Error: [' . $connect->connect_error . ']');
	}
}


}
