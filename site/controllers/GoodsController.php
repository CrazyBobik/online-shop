<?php
require_once ("../../site/model/GoodsPage.php");
require_once ("../../site/model/OneGoodsPage.php");
require_once ("BaseController.php");

class GoodsController extends BaseController{

    public function printGoodsPage(){
        //Тут берем из базы 15 товаров для главной
        //Тут будут те товары которые поставит админ
        //Пока моделируем сами
        $array_body = array(
            array("id" => "1", "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods1", "text" => "Описание товара", "price" => 25),
            array("id" => "2", "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods2", "text" => "Описание товара", "price" => 25),
            array("id" => "3", "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods3", "text" => "Описание товара", "price" => 25),
            array("id" => "4", "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods4", "text" => "Описание товара", "price" => 25),
            array("id" => "5", "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods5", "text" => "Описание товара", "price" => 25)

        );

        $body = new GoodsPage();
        echo $body -> getPage($this -> lang_prop, $array_body,
            $this -> isLogged, $this -> basket_item);
    }

    public function printOneGoods(){
        $id = $_GET['id'];

        //Тут берем товар по ид из базы
        //Пока моделируем
        $goods = array("id" => $id, "img" => "/resources/images/goods/05998-mini.jpg",
                "name" => "goods1", "text" => "Описание товара", "price" => 25);

        $body = new OneGoodsPage();

        echo $body -> getPage($this -> lang_prop, $goods,
            $this -> isLogged, $this -> basket_item);
    }

    public function buyGoods(){
        array_push($this->basket, $_POST['id']);

        $_SESSION['basket'] = $this->basket;

        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    public function rebuyGoods(){
        $id = array_search($_GET['id'], $this->basket);
        unset($this->basket[$id]);
        sort($this->basket);

        $_SESSION['basket'] = $this->basket;

        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}
?>