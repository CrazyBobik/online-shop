<?php
require_once ("BasePage.php");

class NewsPage extends BasePage{

    protected function getBodyContext($body, $array, $lang_prop = array()){
        for ($i = 0; $i < 10; $i++){
            if ($i < count($array)){
                $one_news = file_get_contents("../../resources/tpl/body/news/oneNews.tpl");
                $one_news = str_replace(
                    array(
                        "{Title}",
                        "{img}",
                        "{text}"
                    ),
                    array(
                        $array[$i]['title'],
                        $array[$i]['img'],
                        $array[$i]['text']
                    ),
                    $one_news
                );

                $body = str_replace("{news_".$i."}", $one_news, $body);
            } else {
                $body = str_replace("{news_".$i."}", "", $body);
            }
        }

        $body = str_replace("{Read}", $lang_prop['Read'], $body);

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
        $part = file_get_contents("../../resources/tpl/body/news/news.tpl");
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
