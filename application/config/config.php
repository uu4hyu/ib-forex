<?php

$baseUrlFromEnv = getenv('APP_BASE_URL');

return [
    'base_url' => $baseUrlFromEnv ?: 'http://localhost:8000',
    'index_page' => '',
    'environment' => getenv('CI_ENV') ?: 'production',
];
