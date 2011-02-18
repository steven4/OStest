<?php

function fHeader($title){
	$data="
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.1//EN' 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>$title</title>
<link href='css/style1.css' rel='stylesheet' type='text/css' />

									
<script type='text/javascript' src='../script/jquery-1.4.4.min.js'></script>
<script type='text/javascript' src='../script/script.js'></script>


</head>

<body>";

	echo $data;

}



function fFooter($footer){
	$data="
<div id='footer'>

$footer
</div>

</body>
</html>";

echo $data;

}


?>