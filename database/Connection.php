<?php

class Connection
{
    public function make() {
        $pdo = new PDO('mysql:host=localhost;dbname=app3;charset=utf8;', 'root', '' );
        return $pdo;
    }
}

?>