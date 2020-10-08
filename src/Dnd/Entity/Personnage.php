<?php

declare(strict_types=1);

namespace Dnd\Entity;

/**
 * Class Personnage
 *
 * @package   Personnage
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
// Nous créons une classe « Personnage ».
class Personnage
{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function parler()
    {
        echo 'Je suis un personnage !';
    }
}
