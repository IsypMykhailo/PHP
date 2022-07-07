<?php

namespace App\Controllers;

use App\Views\Render;

class MailController
{
    /**
     * Вывести форму
     */
    public function show()
    {
        Render::view('mail/form');
    }

    /**
     * Проверить форму
     */
    public function validator() : array
    {
        $err = []; // Массив ошибок

        /**
         * Проверка почты
         */
        if(isset($_POST['email'])) {
            if(strlen($_POST['email']) < 3){
                $err['email']['len'] = "Слишком короткое";
            }
            // ....
        } else {
            $err['email']['var'] = "Почта не передана";
        }

        /**
         * Проверка имени
         */
        if(isset($_POST['name'])) {
            if(strlen($_POST['name']) < 3){
                $err['name']['len'] = "Имя слишком короткое";
            }
            // ....
        } else {
            $err['name']['var'] = "Имя не передали";
        }

        // ...

        return $err;
    }

    /**
     * Отправить форму
     */
    public function send() : void
    {
        $varBug['err'] = $this->validator();

        var_dump($varBug['err']);

        /**
         * Если есть ошибки - вывести форму снова
         */
        if(sizeof($varBug['err']) > 0) {
            $varBug['formData'] = $_POST;
            Render::view("mail/form", $varBug);
        }

        var_dump($_POST);
        // Отсылка формы и вывод результатов

        // var_dump($_POST);
    }
}