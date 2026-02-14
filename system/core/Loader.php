<?php

class CI_Loader
{
    public function view(string $view, array $data = []): void
    {
        $viewPath = APPPATH . 'views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(500);
            echo 'View not found: ' . htmlspecialchars($view, ENT_QUOTES, 'UTF-8');
            return;
        }

        extract($data, EXTR_SKIP);
        include $viewPath;
    }
}
