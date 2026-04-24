<?php
require 'database.php';

$stmt = $pdo->query("SELECT woord FROM woorden ORDER BY RAND() LIMIT 1");
$woord = $stmt->fetch();

echo $woord['woord'];
?>

