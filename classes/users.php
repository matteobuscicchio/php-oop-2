<?php
/**
 * @author Matteo
 * @copyright boolean Ltd
 */
class Users {
    private $userID;
    public $name;
    public $surname;
    public $email;
    public $password;

    public function __construct(string $name, string $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
}



