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
    private $damage;
    /**
     * Description $name field
     *
     * @var string $name
     */
    private $name;

    /**
     * Character constructor
     *
     * @param int    $strength
     * @param string $name
     */
    public function __construct(
        int $strength,
        string $name
    ) {
        $this->strength   = $strength;
        $this->name       = $name;
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
}
