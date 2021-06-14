<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet04 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet04 Exercice05</h1>
            <h2 class="col-12 text-info text-center">Créez un tableau associatif contenant comme clé des numéro 
            de département et comme valeurs les départements correspondants. Affichez les départements et leurs clés respectives.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php 
                $departements = array('75' => 'Paris', '93' => 'Seine St Denis', '64' => 'Pyrénées Atlantiques', '17' => 'Charente Maritime'); 
                var_dump($departements);
                foreach ($departements as $key => $departement) {
                    ?>
                    <p class="col-12">Le département <?= $departement ?> a le numéro <?= $key ?></p>
                    <?php
                    }
                ?>
        </div>
    </div>
</body>
</html>