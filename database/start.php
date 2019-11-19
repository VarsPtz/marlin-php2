<?php

include 'database/QueryBuilder.php';
include 'database/Connection.php';

$db = new QueryBuilder(Connection::make());

?>