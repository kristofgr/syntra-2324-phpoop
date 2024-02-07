<?php
// DATABASE INFO
// ----------------------------
define("DB_HOST", "com-linweb575.srv.combell-ops.net");
define("DB_USER", "ID396978_childhoodattic");
define("DB_PASSWORD", "q64289Dn69pxU1BxdLoq");
define("DB_DB", "ID396978_childhoodattic");
define("DB_PORT", "3306");

try {
    $db = new PDO('mysql:host=' . DB_HOST . '; port=' . DB_PORT . '; dbname=' . DB_DB, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

$sql = "SELECT toys.*, categories.name AS category
    FROM toys
    JOIN categories ON toys.category_id = categories.id
    -- WHERE toys.status = 1
    ORDER BY toys.name DESC;";
$stmt = $db->prepare($sql);
$stmt->execute();

$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

print '<pre>';
print_r($records);

phpinfo();
