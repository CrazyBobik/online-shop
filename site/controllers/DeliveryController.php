<?php
require_once ("BaseController.php");
require_once ("../../site/model/DeliveryPage.php");

class DeliveryController extends BaseController{

    public function printDelivery(){
        //Берем текст из файла
        $text = file_get_contents(
            "../../resources/language/text/delivery/delivery_".$this->lang_prop['lang'].".txt");

        $delivery = new DeliveryPage();

        echo $delivery->getPage($this->lang_prop, $text, $this->isLogged,
                                $this->basket_item);
    }
}