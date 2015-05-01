<?php

abstract class BasePage{

    protected function getMenuContext($menu, $lang_prop){
        $menu = str_replace(
            array(
                "{Menu}",
                "{MainPage}",
                "{News}",
                "{Delivery}",
                "{AboutUs}",
                "{Catalog}",
                "{Protein}",
                "{Geiner}",
                "{Vitamin}",
                "{Amino}",
                "{BCAA}",
                "{Creatine}",
                "{Glutamine}",
                "{Weight}",
                "{TestBooster}",
                "{BeforeTrain}",
                "{AfterTrain}"
            ),
            array(
                $lang_prop['Menu'],
                $lang_prop['MainPage'],
                $lang_prop['News'],
                $lang_prop['Delivery'],
                $lang_prop['AboutUs'],
                $lang_prop['Catalog'],
                $lang_prop['Protein'],
                $lang_prop['Geiner'],
                $lang_prop['Vitamin'],
                $lang_prop['Amino'],
                $lang_prop['BCAA'],
                $lang_prop['Creatine'],
                $lang_prop['Glutamine'],
                $lang_prop['Weight'],
                $lang_prop['TestBooster'],
                $lang_prop['BeforeTrain'],
                $lang_prop['AfterTrain'],
            ),
            $menu
        );

        return $menu;
    }

    protected function getEntryContext($entry, $lang_prop, $array_item, $isLogged = false){
        $itemsList = "";
        $sum = 0;
        for ($i = 0; $i < count($array_item); $i++){
            $item = file_get_contents("../../resources/tpl/user/item.tpl");
            $item = str_replace(
                array(
                    "{id}",
                    "{Name}",
                    "{Price}"
                ),
                array(
                    $array_item[$i]['id'],
                    $array_item[$i]['name'],
                    $array_item[$i]['price']
                ),
                $item
            );

            $sum += $array_item[$i]['price'];
            $itemsList = $itemsList.$item;
        }

        //Замена текста
        $entry = str_replace(
            array(
                "{Basket}",
                "{Goods}",
                "{Price}",
                "{Amount}",
                "{Sum}"
            ),
            array(
                $lang_prop['Basket'],
                $lang_prop['Goods'],
                $lang_prop['Price'],
                $lang_prop['Amount'],
                $sum
            ),
            $entry
        );
        $entry = str_replace("{items}", $itemsList, $entry);

        $entry = str_replace(
            array(
                "{enter}",
                "{login}",
                "{password}",
                "{enterBtn}",
                "{registration}"
            ),
            array(
                $lang_prop['Enter'],
                $lang_prop['Login'],
                $lang_prop['Password'],
                $lang_prop['EnterButton'],
                $lang_prop['Registration'],
            ),
            $entry
        );

        return $entry;
    }

    abstract protected function getBodyContext($body, $array, $lang_prop = array());

    abstract public function getPage($lang_prop, $array_body,
                                      $isLogged = false, $array_item = array());


}
?>