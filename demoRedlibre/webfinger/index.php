<?php
if(isset($_GET['q'])) {
	$r = array(
		"subject" => "acct:demo@demo.redlibre.org",
		"links" => array('http://unhosted.org/spec/DAV/' => array('http://demo.redlibre.org/'))
	);
	echo json_encode($r);
}
