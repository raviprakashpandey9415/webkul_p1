<?php

class connection
{
    protected $conn;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $database = 'social_media';

    public function connectToDB () {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }

    public function makeTables() {
        $usertable='CREATE TABLE users (
            id int NOT NULL AUTO_INCREMENT,
            full_name varchar(255) NOT NULL,
            email varchar(255) NOT NULL UNIQUE,
            dob varchar(255) NOT NULL,
            pass varchar(255) NOT NULL,
            profile_pic varchar(255),
            PRIMARY KEY (id)
        )';
        $this->conn->query($usertable);
    }

    public function insertQuery($query) {
        return mysqli_query($this->conn, $query);
    }
}