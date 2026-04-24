require 'database.php';

$stmt = $pdo->query("SELECT woord FROM woorden ORDER BY RAND() LIMIT 1");
$woord = $stmt->fetchColumn();

$_SESSION['woord'] = $woord;