<?php
$email="";
if (isset($_REQUEST['email'])){
	$email=$_REQUEST['email'];
}
?>
<html>
<head>
</head>
<body>
	<div><span>email:</span><span id="email"><?php echo($email);?></span></div>
	<div>email decoded:<input id="email-decoded" size="100" value="<?php echo($email);?>"></div>
</body>
</html>