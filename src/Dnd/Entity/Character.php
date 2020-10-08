<?php

declare(strict_types=1);

namespace Dnd\Entity;

/**
 * Class Character
 *
 * @package   Dnd\Entity
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class Character
{
    /**
     * Description $strength field
     *
     * @var int $strength
     */
    private $strength;
    /**
     * Description $damage field
     *
     * @var int $damage
     */
    private $damage = 0;
    /**
     * Description $name field
     *
     * @var string $name
     */
    private $name;
    /**
     * Description $lifePoint field
     *
     * @var int $lifePoint
     */
    private $lifePoint;

    /**
     * Character constructor
     *
     * @param int    $strength
     * @param string $name
     * @param int    $lifePoint
     */
    public function __construct(
        int $strength,
        string $name,
        int $lifePoint
    ) {
        $this->strength   = $strength;
        $this->name       = $name;
        $this->lifePoint = $lifePoint;
    }

    /**
     * Nous déclarons une méthode dont le seul but est d'afficher un texte.
     *
     * @return void
     */
    public function speak(): void
    {
        echo sprintf("Je m’appelle %s et j’ai une force de %s.", $this->name, $this->strength);
    }

    /**
     * Description isDead function
     *
     * @return bool
     */
    public function isDead(): bool
    {
        return $this->lifePoint <= $this->damage;
    }

    /**
     * Description getStrength function
     *
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Description setStrength function
     *
     * @param int $strength
     *
     * @return void
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * Description getDamage function
     *
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * Description setDamage function
     *
     * @param int $damage
     *
     * @return void
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    /**
     * Description getLifePoint function
     *
     * @return int
     */
    public function getLifePoint(): int
    {
        return $this->lifePoint;
    }

    /**
     * Description setLifePoint function
     *
     * @param int $lifePoint
     *
     * @return void
     */
    public function setLifePoint(int $lifePoint): void
    {
        $this->lifePoint = $lifePoint;
    }

    /**
     * Description getName function
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function attack(Character $character): void
    {
        /** @var string $attacker */
        $attacker = $this->getName();
        /** @var string $defender */
        $defender = $character->getName();
        echo sprintf('%s Attaque %s<br>', $attacker, $defender);
    }
}
