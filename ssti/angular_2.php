<html ng-app>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.js"></script>
</head>

<body>
<p>
<div>
<?php
$name = $_GET['name'];
echo 'Hello master ' . htmlspecialchars($name, ENT_QUOTES);
?>
</div>
</p>
</body>
</html>

