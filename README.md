# Pollen Solutions - Wordpress Salt Component

[![Latest Version](https://img.shields.io/badge/release-1.0.0-blue?style=for-the-badge)](https://www.presstify.com/pollen-solutions/wp-salt/)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-green?style=for-the-badge)](LICENSE.md)
[![PHP Supported Versions](https://img.shields.io/badge/PHP->=5.6-8892BF?style=for-the-badge&logo=php)](https://www.php.net/supported-versions.php)

**Wordpress Salt** Component is a key and salts generator for Worpdress. 
It's as fork of [Rob Waller Repository](https://github.com/RobDWaller/wordpress-salts-generator).

## Installation

```bash
composer require pollen-solutions/wp-salt
```

## Usage

### DotEnv Generation

```bash
php vendor/bin/wp-salt >> .env
```
