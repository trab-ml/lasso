<?php
namespace Lasso\Services;

class EnvService
{
    private static ?EnvService $instance = null;
    private array $cache = [];

    private function __construct()
    {
        if (file_exists(__DIR__ . '/../../.env')) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
        }
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): EnvService
    {
        if (self::$instance === null) {
            self::$instance = new EnvService();
        }
        return self::$instance;
    }

    public function get(string $key, ?string $default = null): ?string
    {
        if (isset($this->cache[$key])) {
            return $this->cache[$key];
        }

        $value = $_ENV[$key] ?? getenv($key) ?: $default;
        $this->cache[$key] = $value;
        
        return $value;
    }

    public function require(string $key): string
    {
        $value = $this->get($key);
        
        if ($value === null || $value === '') {
            throw new \RuntimeException("Required environment variable '{$key}' is not set");
        }
        
        return $value;
    }

    public function has(string $key): bool
    {
        return $this->get($key) !== null;
    }
}
