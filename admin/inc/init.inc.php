<?php
require_once 'db.inc.php';
require_once 'user.inc.php';
require_once 'rating.inc.php';
require_once 'feedback.inc.php';

$user		    = new User($dbh);
$rating 		= new Rating($dbh);

?>