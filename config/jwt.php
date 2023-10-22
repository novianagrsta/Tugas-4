return [
    'secret' => env('JWT_SECRET'),
    'ttl' => env('JWT_TTL', '1 hour'),
    'refresh_ttl' => env('JWT_REFRESH_TTL', '1 day'),
    'algo' => env('JWT_ALGO', 'HS256'),
    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),
    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 30),
];