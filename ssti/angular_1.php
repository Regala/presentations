<html>
<body>
<p>
<?php
$name = $_GET['name'];
echo 'Hello master ' . htmlspecialchars($name, ENT_QUOTES);
?>
</p>
</body>
</html>

