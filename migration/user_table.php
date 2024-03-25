<?php
include '../database/db.php';
header('Content-type: application/json');

class UserMigration extends Database
{
    public function createTable()
    {
        $this->conn->query('CREATE TABLE IF NOT EXISTS users(
            id int primary key auto_increment,
            name varchar(255) not null,
            email varchar(255) not null UNIQUE,
            password varchar(255) not null,
            token varchar(255) not null
        )');
    }
}

?>