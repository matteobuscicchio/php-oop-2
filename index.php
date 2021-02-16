<?php
// Crea un diagramma per una tabella di db che rappresenti 
// gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, 
// e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Bonus (non tanto facoltativo):
// Una volta finita la classe User, 
// pensate a che altre entitá possiamo avere in 
// un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna 
// le rispettive classi con proprietá e metodi.
// Buon lavoro a tutt*:baby-yoda:
// @qui cercate di pensare anche ad una classe che 
// possa avere una sub-class e fate pratica con l'extends.

include __DIR__ . '/classes/users.php';

$userList = [
    new Users('Marco', 'Montemagno', 'mrc@boolean.com', 'password'),
    new Users('Riccardo', 'Palombo', 'ric@boolean.com', 'password'),
    new Users('Matteo', 'Buscicchio', 'mtt@boolean.com', 'password'),
    new Users('Adriano', 'Santucci', 'adr@boolean.com', 'password'),
    new Users('Loredana', 'Bianchi', 'lrd@boolean.com', 'password'),
];
var_dump($userList);
?>