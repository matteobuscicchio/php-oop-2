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

include __DIR__ . './classes/switch.php';

$userList = [
    new UsersPosts('Marco', 'Montemagno', 'Post di Marco, lorem ipsum dolor sit amet'),
    new UsersPosts('Riccardo', 'Palombo', 'Post di Riccardo, lorem ipsum dolor sit amet'),
    new UsersPosts('Matteo', 'Buscicchio', 'Post di Matteo, lorem ipsum dolor sit amet'),
    new UsersPosts('Adriano', 'Santucci', 'Post di Adriano, lorem ipsum dolor sit amet'),
    new UsersPosts('Loredana', 'Bianchi', 'Post di Loredana, lorem ipsum dolor sit amet'),
];
// var_dump($userList);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-2</title>
        <style>

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: #1E2D3B;
                min-height: 100vh;
            }

            .container {
                width: 1070px;
                height: 100%;
                margin: 0 auto;
            }

            .usr_container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                padding: 100px 0;
            }

            .usr {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                flex-direction: column;
                flex-basis: 200px;
                padding: 20px;
                margin: 10px 20px;
                height: 360px;
                background: rgb(46, 58, 70);
                text-align: center;
            }

            .usr h3 {
                margin: 20px 0;
                color: white;
                font-size: 18px;
                text-transform: uppercase;
            }

            .usr span {
                color: grey;
                font-size: 20px;
            }

        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="usr_container container ">
                
                <?php foreach ($userList as $usr) { ?>
                    <div class="usr">
                        <h3><?= $usr->name, ' ', $usr->surname?></h3>
                        <span>Titolo</span>
                        <p><?= $usr->post?></p>
                    </div>
                <?php };?>
            </div>
        </div>
    </body>
</html>