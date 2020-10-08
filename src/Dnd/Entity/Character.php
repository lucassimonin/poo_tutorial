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
     * Description $location field
     *
     * @var string $location
     */
    private $location;
    /**
     * Description $experience field
     *
     * @var int $experience
     */
    private $experience;
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
     * @param string $location
     * @param int    $experience
     * @param string $name
     */
    public function __construct(
        int $strength,
        string $location,
        int $experience,
        string $name
    ) {
        $this->strength   = $strength;
        $this->location   = $location;
        $this->experience = $experience;
        $this->name       = $name;
    }

    /**
     * Nous déclarons une méthode dont le seul but est d'afficher un texte.
     *
     * @return void
     */
    public function speak(): void
    {
        echo sprintf("Je m’appelle %s et j’habite à %s, j’ai une force de %s et %s d’XP.", $this->name, $this->location, $this->strength, $this->experience);
    }
}
