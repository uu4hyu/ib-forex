<?php

if (!function_exists('config_item')) {
    function config_item(string $key, mixed $default = null): mixed
    {
        static $config = null;

        if ($config === null) {
            $path = APPPATH . 'config/config.php';
            $config = file_exists($path) ? include $path : [];
        }

        return $config[$key] ?? $default;
    }
}

if (!function_exists('base_url')) {
    function base_url(string $path = ''): string
    {
        $base = rtrim((string) config_item('base_url', '/'), '/');
        $path = ltrim($path, '/');

        return $path === '' ? $base . '/' : $base . '/' . $path;
    }
}
