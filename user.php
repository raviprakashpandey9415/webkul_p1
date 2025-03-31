<?php

require_once("../../backend/database/connection.php");
class User 
{

    protected $fullName;
    protected $dateOfBirth;
    protected $email;
    protected $password;
    protected $profile;

    public function __construct(
        $fullName = '',
        $dateOfBirth = '',
        $email = '',
        $password = '',
        $profile = ''
    ) {
        $this->fullName = $fullName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
        $this->password = $password;
        $this->profile = $profile;
    }

    public function create() {
        // Save the user detail in Database;
        $name = (string) $this->fullName;
        $email = (string) $this->email;
        $password = (string) $this->password;
        $profile = (string) $this->profile;
        $dateOfBirth = (string) $this->dateOfBirth;
        $user_query = "INSERT INTO USERS (full_name, email, dob, pass) VALUES ('$name', '$email', '$dateOfBirth', '$password')";
        $db = new connection(); 
        $db->connectToDB();
        return $db->insertQuery($user_query);     
    }
}