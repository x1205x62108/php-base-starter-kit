<?php

namespace App\Core;

class View
{
    public string $title = 'PHP Base Starter Kit';
    public string $layout = 'layouts/app';

    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }

    public function renderView(string $view, array $params = [])
    {
        $viewContent = $this->renderOnlyView($view, $params);
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
        $layoutPath = Application::$ROOT_DIR . "/resources/views/{$this->layout}.php";
        if (file_exists($layoutPath)) {
            include_once $layoutPath;
        } else {
            echo "Layout not found: " . $this->layout;
        }
        return ob_get_clean();
    }

    protected function renderOnlyView(string $view, array $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        
        // Try absolute path (for modules) or relative path (for resources/views)
        $path = $view;
        if (!file_exists($path)) {
            $path = Application::$ROOT_DIR . "/resources/views/$view.php";
        }

        if (file_exists($path)) {
            include_once $path;
        } else {
            echo "View not found: " . $view;
        }
        
        return ob_get_clean();
    }
}
