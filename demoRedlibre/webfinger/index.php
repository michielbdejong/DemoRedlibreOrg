<?php
if(isset($_GET['q'])) {
	$r = array(
		"subject" => "acct:demo@demo.redlibre.org",
		"links" => array(
			'http://unhosted.org/spec/DAV/2011-04/' => array('http://demo.redlibre.org/')
		)
	);
	echo json_encode($r);
}
