<?php
include_once __DIR__ . '/users.php';
/**
 * @author Matteo
 * @copyright boolean Ltd
 */
class UsersPosts extends Users{
    public $post;

    public function __construct(string $name, string $surname, string $post){
        parent::__construct($name, $surname);
        $this->post = $post;
    }
}
