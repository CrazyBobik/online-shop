<?php
require_once ("BasePage.php");

class OneNews extends BasePage {

    protected function getBodyContext($body, $array, $lang_prop = array()){
        $body = str_replace(
            array(
                "{img}",
                "{Title}",
                "{text}"
            ),
            array(
                $array['img'],
                $array['title'],
                $array['text']
            ),
            $body
        );

        return $body;
    }

    public function getPage($lang_prop, $array_body,
                            $isLogged = false, $array_item = array()){
        $page = "";

        //Шапка
        $part = file_get_contents("../../resources/tpl/static/head.tpl");
        $part = str_replace("{Title}", $lang_prop['TitleMain'], $part);
        $page = $page.$part;

        //Меню
        $part = file_get_contents("../../resources/tpl/static/menu.tpl");
        $part = $this -> getMenuContext($part, $lang_prop);
        $page = $page.$part;

        //Тело
        $part = file_get_contents("../../resources/tpl/body/news/newsdetail.tpl");
        $part = $this -> getBodyContext($part, $array_body, $lang_prop);
        $page = $page.$part;


        //Корзина
        $part = file_get_contents("../../resources/tpl/user/basket.tpl");
        $part = $this -> getEntryContext($part, $lang_prop, $array_item);
        $page = $page.$part;


        $footer = file_get_contents("../../resources/tpl/static/footer.tpl");
        $page = $page.$footer;

        return $page;
    }
}