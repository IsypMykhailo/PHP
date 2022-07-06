<?php

namespace App\Views;

use Config\App;

class Render
{
    /**
     * Задача этого метода - подключить шаблон из нужной папки
     * @param $data
     */
    static public function view(string $pageName, array $data = []): void
    {
        echo " Я сейчас нахожусь тут: " . __DIR__ . " <br>";

        $layoutDir = __DIR__ . "../resources/views/layouts/" . App::$layoutDir;
        $includeDir = __DIR__ . "../resources/views/";

        require_once ($layoutDir . "/head.php");
        require_once ($layoutDir . "/header.php");

        require_once ($includeDir . $pageName . ".tpl.php");

        require_once ($layoutDir . "/footer.php");

        //echo "Папка с шаблонами: " . App::$layoutDir;
    }
}