<?php

declare(strict_types=1);

namespace Impmurciego\DotenvValidator\Exception;

use Exception;
use Throwable;

final class InvalidConfigurationException extends Exception
{
    public static function fromFormat(string $configuration, Throwable $previous): self
    {
        return  new self(rtrim("Unable to format configuration: {$configuration}"), 0, $previous);
    }

    public static function fromEnvironments(): self
    {
        return  new self("You must create a config file with at least two environments like {'Production' => './.env.prod', 'Test' => './.env.test'}", 0, null);
    }
}
