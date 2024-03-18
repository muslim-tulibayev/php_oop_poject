<?php

function loadEnvFile(): void
{
    $env_file = __DIR__ . '/../.env';

    if (file_exists($env_file)) {
        $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            if (strpos($line, '=') !== false) {
                [$key, $value] = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);

                $_ENV[$key] = $value;
            }
        }
    }
}

function env(string $key, $default = null): ?string
{
    return $_ENV[$key] ?? $default;
}
