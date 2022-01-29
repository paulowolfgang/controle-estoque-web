<?php

namespace App\Libs;

class Session
{
    ### Mensagens ###

    public static function clearMessage(){
        unset($_SESSION['message']);
    }

    public static function saveMessage($message){
        $_SESSION['message'] = $message;
    }

    public static function returnMessage(){
        return ($_SESSION['message']) ? $_SESSION['message'] : "";
    }

    ### Formulários ###
    
    public static function existsForm(){
        return (isset($_SESSION['form'])) ? $_SESSION['form'] : "";
    }

    public static function clearForm(){
        unset($_SESSION['form']);
    }

    public static function saveForm($form){
        $_SESSION['form'] = $form;
    }

    public static function returnValueForm($key){
        return (isset($_SESSION['form'][$key])) ? $_SESSION['form'][$key] : "";
    }
}
