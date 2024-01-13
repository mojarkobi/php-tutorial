<?php
class Config {
    public static function get(string $key): ?string {
        return isset($_ENV[$key]) ? $_ENV[$key] : null;
    }
}

// Without null safe operator
$apiKey = Config::get('API_KEY');
$apiKey = $apiKey !== null ? strtoupper($apiKey) : null;

// With null safe operator
$apiKey = Config::get('API_KEY')?->strtoupper();

echo "API Key: " . $apiKey; // Output: API Key: (value or null)
?>