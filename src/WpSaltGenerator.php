<?php declare(strict_types=1);

namespace Pollen\WpSalt;

use Laminas\Math\Rand;
use Pollen\WpSalt\Contracts\WpSaltGenerator as WpSaltGeneratorContract;

class WpSaltGenerator implements WpSaltGeneratorContract
{
    /**
     * Liste des caractères utilisé lors de la génération de clé de hashage.
     *
     * @var string $chars
     */
    private $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!#$%&()*+,-./:;<=>?@[]^_`{|}~';

    /**
     * @inheritDoc
     */
    public function salt(): string
    {
        return Rand::getString(64, $this->chars);
    }
}
