<?php
include_once __DIR__ . '/users.php';
/**
 * @author Matteo
 * @copyright boolean Ltd
 */
class UsersPosts extends Users{
    public $post;

    public function __construct(string $name, string $surname, string $email, string $password, string $post){
        parent::__construct($name, $surname, $email, $password);
        $this->post = $post;
    }
}
