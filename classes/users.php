<?php
/**
 * @author Matteo
 * @copyright boolean Ltd
 */
class Users {
    private $userID;
    public $name;
    public $surname;
    private $email;
    private $password;

    public function __construct(string $name, string $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
}



