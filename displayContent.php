<?php

require('displayClass.php');
$showingcontent = new ShowContent();

?>

<html>
<head>
	<title>Show content</title>
</head>
<body>
<?php
	$showingcontent->getUsers();
?>
</body>
</html>