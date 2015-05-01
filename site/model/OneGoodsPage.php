<?php
require_once ("BasePage.php");

class OneGoodsPage extends  BasePage{
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
        $part = file_get_contents("../../resources/tpl/body/goods/oneGoods.tpl");
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

    protected function getBodyContext($body, $array, $lang_prop = array()){
        //Создаем один товар
        $body = str_replace(
            array(
                "{id}",
                "{url}",
                "{NameGoods}",
                "{text}",
                "{PriceGoods}",
                "{price}",
                "{PriceGoodsVal}",
                "{BtnBuy}"
            ),
            array(
                $array['id'],
                $array['img'],
                $array['name'],
                $array['text'],
                $lang_prop['PriceGoods'],
                $array['price'],
                $lang_prop['PriceGoodsVal'],
                $lang_prop['BtnBuy']
            ),
            $body
        );

        return $body;
    }
}
