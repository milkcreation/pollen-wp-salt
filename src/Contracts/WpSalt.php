<?php declare(strict_types=1);

namespace Pollen\WpSalt\Contracts;

interface WpSalt
{
    /**
     * Récupération de la liste des clés de hashage Wordpress.
     *
     * @return array
     */
    public function getSalts(): array;

    /**
     * Générateur de clés de hashage à destination du fichier de configuration Wordpress.
     *
     * @return string
     */
    public function wpConfigGenerator(): string;

    /**
     * Générateur de clés de hashage à destination du fichier de configuration .env.
     *
     * @return string
     */
    public function dotEnvGenerator(): string;
}
