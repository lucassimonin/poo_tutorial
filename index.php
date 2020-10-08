<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Dnd\Entity\{Character, Warrior, Wizard};

/** @var Warrior $warrior */
$warrior = new Warrior(15, 'Montpellier', 10, 'Warrior', 60);
/** @var Wizard $wizard */
$wizard = new Wizard(6, 'Paris', 30, 'Wizard', 45);

/** @var Character[] $fight */
$fight = [$wizard, $warrior];

do {
    shuffle($fight);
    /** @var Character $characterOne */
    $characterOne = $fight[0];
    /** @var Character $characterTwo */
    $characterTwo = $fight[1];
    $characterOne->attack($characterTwo);
    echo sprintf('PV de %s: %s/%s<br>', $characterTwo->getName(), $characterTwo->getDamage(), $characterTwo->getLifePoint());
} while (!$warrior->isDead() && !$wizard->isDead());

if ($warrior->isDead()) {
    echo 'Warrior is dead !';
    exit;
}

if ($wizard->isDead()) {
    echo 'Wizard is dead !';
    exit;
}