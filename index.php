<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Dnd\Entity\Personnage;


$perso = new Personnage();
$perso->parler();