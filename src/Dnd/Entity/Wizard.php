<?php

declare(strict_types=1);

namespace Dnd\Entity;

/**
 * Class Wizard
 *
 * @package   Dnd\Entity
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class Wizard extends Character
{
    /**
     * Description MAX_POWER constant
     *
     * @var int MAX_POWER
     */
    private const MAX_POWER = 30;
    /**
     * Description MIN_POWER constant
     *
     * @var int MIN_POWER
     */
    private const MIN_POWER = 1;

    /**
     * Description attack function
     *
     * @param Character $character
     *
     * @return void
     * @throws \Exception
     */
    public function attack(Character $character): void
    {
        parent::attack($character);
        /** @var int $strength */
        $strength = $this->getStrength();
        /** @var int $damage */
        $damage = $strength + random_int(self::MIN_POWER, self::MAX_POWER);
        $character->setDamage($character->getDamage() + $damage);
    }
}
