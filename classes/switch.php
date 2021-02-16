<?php
include __DIR__ . '/users.php';
include __DIR__ . '/user_content.php';
$userList = [
    new UsersPosts('Marco', 'Montemagno', 'Post di Marco, lorem ipsum dolor sit amet'),
    new UsersPosts('Riccardo', 'Palombo', 'Post di Riccardo, lorem ipsum dolor sit amet'),
    new UsersPosts('Matteo', 'Buscicchio', 'Post di Matteo, lorem ipsum dolor sit amet'),
    new UsersPosts('Adriano', 'Santucci', 'Post di Adriano, lorem ipsum dolor sit amet'),
    new UsersPosts('Loredana', 'Bianchi', 'Post di Loredana, lorem ipsum dolor sit amet'),
];
// var_dump($userList);