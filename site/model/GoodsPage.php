<?php
require_once ("BasePage.php");

class GoodsPage extends  BasePage{
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
        $part = file_get_contents("../../resources/tpl/body/goods/listGoods.tpl");
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
        for ($i = 0; $i < 15; $i++){

            if ($i < count($array)){
                //Создаем один товар
                $one_goods = file_get_contents("../../resources/tpl/body/goods/goods.tpl");
                $one_goods = str_replace(
                    array(
                        "{id}",
                        "{url}",
                        "{NameGoods}",
                        "{text}",
                        "{PriceGoods}",
                        "{price}",
                        "{PriceGoodsVal}"
                    ),
                    array(
                        $array[$i]['id'],
                        $array[$i]['img'],
                        $array[$i]['name'],
                        $array[$i]['text'],
                        $lang_prop['PriceGoods'],
                        $array[$i]['price'],
                        $lang_prop['PriceGoodsVal']
                    ),
                    $one_goods
                );

                //Добавляем товар в body
                $body = str_replace("{Goods_".($i)."}", $one_goods, $body);
            } else {
                $body = str_replace("{Goods_".($i)."}", "", $body);
            }

        }

        return $body;
    }
}
