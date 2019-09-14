<?php
require_once('model/db.php');
echo "Hello grilo<br><br>";

$db = new Db();

$stmt = $db->query('SELECT acesso FROM acesso');
while ($row = $stmt->fetch())
{
    echo $row['acesso'] . "<br>";
}

?>
