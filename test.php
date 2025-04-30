<?php

$db = new SQLite3('database/db.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

?>

<!DOCTYPE html>
<html>

<head>
    <title>test doc</title>
</head>

<body>
    test doc
</body>

</html>