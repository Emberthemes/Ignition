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

function __construct($db) {

	$this->dbHost = $db['host'];
	$this->dbName = $db['name'];
	$this->dbUser = $db['user'];
	$this->dbPass = $db['pass'];

	$connect = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
	if($connect->connect_errno > 0){
		die('Database Error: [' . $connect->connect_error . ']');
	}
}


}
