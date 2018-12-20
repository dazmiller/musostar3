<?php
/**
 * oauth
 * 
 * @package musostar
 * @author Darren Miller
 */

// fetch bootstrap
require('bootstrap.php');

// fetch hybridauth
require_once( "includes/libs/HybridAuth/Auth.php" );
require_once( "includes/libs/HybridAuth/Endpoint.php" );

// process
try {

	Hybrid_Endpoint::process();

} catch (Exception $e) {
	_error('System Message', $e->getMessage());
}