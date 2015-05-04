<?php
require_once ("../../site/model/GoodsPage.php");
require_once ("../../site/model/OneGoodsPage.php");
require_once ("BaseController.php");

class GoodsController extends BaseController{

    public function printGoodsPage(){
        $category = $_GET['category'];

        $array_body = array();
        //Тут берем из базы 15 товаров для странички
        //Пока моделируем сами
        switch ($category){
            case "main":
                $array_body = array(
                    array("id" => "1", "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_1", "text" => "Описание товара", "price" => 25),
                    array("id" => "2", "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_2", "text" => "Описание товара", "price" => 25),
                    array("id" => "3", "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_3", "text" => "Описание товара", "price" => 25),
                    array("id" => "4", "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_4", "text" => "Описание товара", "price" => 25),
                    array("id" => "5", "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_5", "text" => "Описание товара", "price" => 25)

                );
                break;
            case "protein":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/protein/05998-mini.jpg",
                        "name" => "Протеин_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "geiner":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/geiner/2013510-17.jpg",
                        "name" => "Гейнер_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/geiner/2013510-17.jpg",
                        "name" => "Гейнер_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/geiner/2013510-17.jpg",
                        "name" => "Гейнер_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/geiner/2013510-17.jpg",
                        "name" => "Гейнер_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/geiner/2013510-17.jpg",
                        "name" => "Гейнер_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "vitamin":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/vitamin/20130612-184.jpg",
                        "name" => "Витамины_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/vitamin/20130612-184.jpg",
                        "name" => "Витамины_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/vitamin/20130612-184.jpg",
                        "name" => "Витамины_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/vitamin/20130612-184.jpg",
                        "name" => "Витамины_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/vitamin/20130612-184.jpg",
                        "name" => "Витамины_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "amino":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/amino/IMT020.jpg",
                        "name" => "Аминки_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/amino/IMT020.jpg",
                        "name" => "Аминки_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/amino/IMT020.jpg",
                        "name" => "Аминки_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/amino/IMT020.jpg",
                        "name" => "Аминки_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/amino/IMT020.jpg",
                        "name" => "Аминки_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "bcaa":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/bcaa/03521.jpg",
                        "name" => "BCAA_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/bcaa/03521.jpg",
                        "name" => "BCAA_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/bcaa/03521.jpg",
                        "name" => "BCAA_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/bcaa/03521.jpg",
                        "name" => "BCAA_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/bcaa/03521.jpg",
                        "name" => "BCAA_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "creatine":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/creatine/Creatine__1_kg.jpg",
                        "name" => "Креатин_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/creatine/Creatine__1_kg.jpg",
                        "name" => "Креатин_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/creatine/Creatine__1_kg.jpg",
                        "name" => "Креатин_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/creatine/Creatine__1_kg.jpg",
                        "name" => "Креатин_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/creatine/Creatine__1_kg.jpg",
                        "name" => "Креатин_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "glutamine":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/glutamine/03777.jpg",
                        "name" => "Глютамин_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/glutamine/03777.jpg",
                        "name" => "Глютамин_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/glutamine/03777.jpg",
                        "name" => "Глютамин_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/glutamine/03777.jpg",
                        "name" => "Глютамин_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/glutamine/03777.jpg",
                        "name" => "Глютамин_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "weight":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/weight/JIR015.jpg",
                        "name" => "Для снижения веса_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/weight/JIR015.jpg",
                        "name" => "Для снижения веса_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/weight/JIR015.jpg",
                        "name" => "Для снижения веса_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/weight/JIR015.jpg",
                        "name" => "Для снижения веса_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/weight/JIR015.jpg",
                        "name" => "Для снижения веса_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "testbooster":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/testobooster/TES058.jpg",
                        "name" => "Тестобустер_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/testobooster/TES058.jpg",
                        "name" => "Тестобустер_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/testobooster/TES058.jpg",
                        "name" => "Тестобустер_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/testobooster/TES058.jpg",
                        "name" => "Тестобустер_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/testobooster/TES058.jpg",
                        "name" => "Тестобустер_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "beforetrain":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/beforetrain/05401.jpg",
                        "name" => "Передтренировочник_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/beforetrain/05401.jpg",
                        "name" => "Передтренировочник_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/beforetrain/05401.jpg",
                        "name" => "Передтренировочник_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/beforetrain/05401.jpg",
                        "name" => "Передтренировочник_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/beforetrain/05401.jpg",
                        "name" => "Передтренировочник_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
            case "aftertrain":
                $array_body = array(
                    array("id" => "1",
                        "img" => "/resources/images/goods/aftertrain/20130612-189.jpg",
                        "name" => "Прослетренировочник_1",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "2",
                        "img" => "/resources/images/goods/aftertrain/20130612-189.jpg",
                        "name" => "Прослетренировочник_2",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "3",
                        "img" => "/resources/images/goods/aftertrain/20130612-189.jpg",
                        "name" => "Прослетренировочник_3",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "4",
                        "img" => "/resources/images/goods/aftertrain/20130612-189.jpg",
                        "name" => "Прослетренировочник_4",
                        "text" => "Описание товара",
                        "price" => 25),
                    array("id" => "5",
                        "img" => "/resources/images/goods/aftertrain/20130612-189.jpg",
                        "name" => "Прослетренировочник_5",
                        "text" => "Описание товара",
                        "price" => 25)
                );
                break;
        }



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