<?php
require_once ("BaseController.php");
require_once ("../../site/model/NewsPage.php");
require_once ("../../site/model/OneNewsPage.php");

class NewsController extends BaseController {
    public function printNewsPage(){
        //Тут берем из базы новости
        //Пока моделируем сами
        $array_body = array(
            array(
                "id" => 1,
                "title" => "Тут типа название 1",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется про новость 1"),
            array(
                "id" => 2,
                "title" => "Тут типа название 2",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется про новость 2"),
            array(
                "id" => 3,
                "title" => "Тут типа название 3",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется  про новость 3"),
            array(
                "id" => 4,
                "title" => "Тут типа название 4",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется  про новость 4")
        );

        $news = new NewsPage();

        echo $news -> getPage($this ->lang_prop, $array_body,
            $this -> isLogged, $this->basket_item);
    }

    public function printOneNews(){
        $id = $_GET['id'];

        //Тут берем из базы новость по ид
        //Пока моделируем сами
        $news = array(
            "title" => "Тут типа название 1",
            "img" => "/resources/images/news/08.jpg",
            "text" => "Тут типа шото росказуется про новость 1"
        );

        $oneNews = new OneNews();

        echo $oneNews->getPage($this->lang_prop, $news, $this->isLogged,
                                $this->basket_item);
    }
}