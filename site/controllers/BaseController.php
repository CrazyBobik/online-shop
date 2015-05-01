<?php


abstract class BaseController
{
    public $lang_prop;
    public $isLogged;
    public $basket;
    public $basket_item;

    function __construct()
    {
        session_start();
//        unset($_SESSION['basket']);
        //Определение языка
        if (isset($_SESSION['lang']))
            $this->lang_prop =
                parse_ini_file("../../resources/language/" . $_SESSION['lang'] . ".ini");
        else
            $this->lang_prop =
                parse_ini_file("../../resources/language/ru.ini");

        //Проверка авторизации
        if (isset($_SESSION['login']))
            $this->isLogged = true;
        else
            $this->isLogged = false;

        $this->basket = array();
        //Проверяем корзину

        if (isset($_SESSION['basket']))
            $this->basket = $_SESSION['basket'];

        $this->basket_item = $this->getBasketItem($this->basket);

    }

    private function getBasketItem($idArray){
        $arr = array();

        //Тут по ид хранимых в basket достаем товары из базы
        //Пока моделируем
        $array = array();
        $array[1] = array("id" => 1, "name" => "Товар1", "price" => 25);
        $array[2] = array("id" => 2, "name" => "Товар2", "price" => 35);
        $array[3] = array("id" => 3, "name" => "Товар3", "price" => 45);

        for ($i = 0; $i < count($idArray); $i++){
            if (0 < $idArray[$i] && $idArray[$i] <= count($array))
                array_push($arr, $array[$idArray[$i]]);
        }

        return $arr;
    }
}