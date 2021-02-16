<?php
/*
php-oop-2
Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.
 */

include './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog basics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="users">
        <?php foreach ($users as $user) {?>
            <div class="user">
                <span><i class="fas fa-user"></i></span>
                <p>Username: <em><?php echo $user->username; ?></em></p>
                <p>Età: <?php echo $user->età; ?> anni</p>
                <p>Nome completo: <?php echo $user->getFullName(); ?></p>
                <p>Psw: <?php for ($i = 0; $i < strlen($user->password); $i++) {echo '*';}?></p>
            </div>
        <?php }?>
    </section>

    <section id="articoli">
        <?php foreach ($articoli as $articolo) {?>
            <div class="articolo">
                <h2><?php echo $articolo->titolo; ?></h2>
                <div class="info">
                    <span>Autore: <em><?php echo $articolo->autore; ?></em></span>
                    <span class="categoria"><?php echo $articolo->categoria; ?></span>
                    <span>Pubblicato il <?php echo $articolo->data; ?></span>
                </div>
                <p class="testo-articolo"><?php echo $articolo->testo; ?></p>
                <?php if ($articolo->commenti) {?>
                    <h3>Commenti:</h3>
                    <?php foreach ($articolo->commenti as $commento) {?>
                        <div class="commento">
                            <div class="info-commento">
                                <span><?php echo $commento->data; ?> - </span>
                                <span><?php echo $commento->autore; ?> scrive:</span>
                            </div>
                            <p><?php echo $commento->testo; ?></p>
                        </div>
                    <?php }?>
                <?php }?>

            </div>
        <?php }?>
    </section>
</body>
</html>
