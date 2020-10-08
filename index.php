<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Dnd\Entity\Character;

/** @var Character $personnage */
$character = new Character();
$character->speak();