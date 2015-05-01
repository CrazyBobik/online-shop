<?php
require_once ("BaseController.php");
require_once ("../../site/model/NewsPage.php");

class NewsController extends BaseController {
    public function printNewsPage(){
        //Тут берем из базы новости
        //Пока моделируем сами
        $array_body = array(
            array("title" => "Тут типа название 1",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется про новость 1"),
            array("title" => "Тут типа название 2",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется про новость 2"),
            array("title" => "Тут типа название 3",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется  про новость 3"),
            array("title" => "Тут типа название 4",
                "img" => "/resources/images/news/08.jpg",
                "text" => "Тут типа шото росказуется  про новость 4")
        );

        $news = new NewsPage();

        echo $news -> getPage($this ->lang_prop, $array_body,
            $this -> isLogged, $this->basket_item);
    }
}