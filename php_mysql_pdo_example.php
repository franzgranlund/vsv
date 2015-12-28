<?php
/**
 * Old, deprecated, do not use
 */
$results = mysql_query(sprintf("SELECT * FROM users WHERE name='%s'", 
        mysql_real_escape_string($name)
    )
) or die(mysql_error());


/**
 * PDO - please use
 */
$statement = $connection->prepare('Select * FROM users WHERE name = :name');
$results = $connection->execute([
    ':name' => $name
]);

?>