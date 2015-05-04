<?php
require_once ("BaseController.php");
require_once ("../../site/model/AboutPage.php");

class AboutController extends BaseController {

    public function printAboutPage(){
        //Берем текст из файла
        $text = file_get_contents(
            "../../resources/language/text/about/about_".$this->lang_prop['lang'].".txt");

        $about = new AboutPage();

        echo $about->getPage($this->lang_prop, $text, $this->isLogged,
                            $this->basket_item);
    }
}