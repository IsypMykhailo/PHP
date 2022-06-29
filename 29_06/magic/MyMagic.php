<?php

class MyMagic
{
    public function __call($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name' "
            . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов статического метода '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**  Место хранения перегружаемых данных.  */
    private $data = array();

    /**  Перегрузка не применяется к объявленным свойствам.  */
    public $declared = 1;

    /**  Здесь перегрузка будет использована только при доступе вне класса.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Неопределённое свойство в __get(): ' . $name .
            ' в файле ' . $trace[0]['file'] .
            ' на строке ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        echo "Установлено ли '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }
}