<?php

class homeController
{
    public function index($first = NULL, $second = NULL){

        require 'smarty_setup.php';
        $msg = "This is simple";
        $smarty->assign('message', $msg);
        $smarty->display('form.tpl');
    }

    public function about($first = NULL, $second = NULL){
        $db = new Database;
        $db->select();
    }

    public function post($first = NULL, $second = NULL){

    }
}