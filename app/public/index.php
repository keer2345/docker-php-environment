<?PHP
$pdo = new PDO('mysql:dbname=kr-php-mysql-db;host=mysql;port=3306', 'root', '123456', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
?>

<?php
phpinfo();
?>
