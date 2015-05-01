<?php

class LangController{
    public function changeLang(){
        session_start();

        $_SESSION['lang'] = $_GET['lang'];
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}