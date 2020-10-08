<?php

declare(strict_types=1);

namespace Dnd\Entity;

/**
 * Class Warrior
 *
 * @package   Dnd\Entity
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class Warrior extends Character
{
    /**
     * Description RAGE_LIFE_POINT_PERCENTAGE constant
     *
     * @var int RAGE_LIFE_POINT_PERCENTAGE
     */
    private const RAGE_LIFE_POINT_PERCENTAGE = 30;
    /**
     * Description attack function
     *
     * @param Character $character
     *
     * @return void
     */
    public function attack(Character $character): void
    {
        parent::attack($character);
        /** @var int $strength */
        $strength = $this->getStrength();
        /** @var int $multiplication */
        $multiplication = (($this->getLifePoint() - $this->getDamage()) * 100) / $this->getLifePoint() <= self::RAGE_LIFE_POINT_PERCENTAGE ? 2 : 1;
        $character->setDamage($character->getDamage() + ($strength * $multiplication));
    }
}
