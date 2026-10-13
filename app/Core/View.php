<?php

namespace App\Core;

class View
{
    public string $title = 'PHP Base Starter Kit';

    public function renderView(string $view, array $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = 'layout';
        ob_start();
        include_once __DIR__ . "/../../resources/views/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView(string $view, array $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once __DIR__ . "/../../resources/views/$view.php";
        return ob_get_clean();
    }
}
