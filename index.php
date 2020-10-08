<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Dnd\Entity\Character;

/** @var Character $characterDupont */
$characterDupont = new Character(12, 'Montpellier', 10, 'Dupont');
$characterDupont->speak();
/** @var Character $characterHenri */
$characterHenri = new Character(15, 'Paris', 30, 'Henri');
$characterHenri->speak();