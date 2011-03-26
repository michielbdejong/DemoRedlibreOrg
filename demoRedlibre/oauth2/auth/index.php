<?php
if(count($_POST)) {
	if($_POST["pwd"]=="demo") {
		$token = "dGVzdDpkYXZ0ZXN0";//the http basic auth string corresponding to test:davtest.
		$dav = "demo.redlibre.org/webdav/".str_replace('@', '/', $_POST["user"])."/".$_POST["app"];
		header("Location:http://".$_POST["uri"]."?dav=$dav&token=".$token);
		echo "redirecting you back to the application.\n";
	} else {
		var_dump($_POST["pwd"]);
	}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<script src="/html5.js"></script><!-- this is the javascript allowing html5 to run in older browsers -->

<title>My Unhosted node</title>
<link rel="stylesheet" href="/css/uncompressed/reset.css" />
<link rel="stylesheet" href="/css/uncompressed/text.css" />
<link rel="stylesheet" href="/general.css" />
<link rel="stylesheet" href="/css/uncompressed/login.css" />
</head>
	<header>
		<h1><strong>demo.redlibre.org </strong>Unhosted storage node</h1>
	</header>
	<body>
		<div class="content">
			<h2>The app '<?=$_GET["client_id"] ?>' is requesting access to your unhosted account</h2>
			<form method="post" action="">
				<label>Username:</label><span class="username"><?=$_GET["user_name"]?></span>	
				<label for="password">Password:</label>
				<div id="passAllow">
					<form method="POST" action="?">
					<input type="password" name="pwd" value="" />
					<input type="submit" name="submit" value="Allow" />
					<input type="hidden" value="<?=$_GET["user_name"]?>" name="user">
					<input type="hidden" value="<?=$_GET["user_domain"]?>" name="domain">
					<input type="hidden" value="<?=$_GET["client_id"]?>" name="app">
					<input type="hidden" value="<?=$_GET["redirect_uri"]?>" name="uri">
					</form>
				</div>
			</form>	
		</div>
	</body>
</html>
<?
}
?>
