<?php declare(strict_types=1);

namespace Pollen\WpSalt\Contracts;

interface WpSaltGenerator
{
    /**
     * Génération d'une chaîne de hashage de 64 caractères.
     *
     * @return string
     */
    public function salt(): string;
}
