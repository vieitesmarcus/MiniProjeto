<?php

namespace Source\Utils;

abstract class Csrf
{
    /**
     * Summary of tokenCsrf
     * @return void
     */
    public static function tokenCsrf(): void
    {
        $session = new Session();
        if(!$session->has('_token')){
            $_SESSION['_token'] = md5(uniqid(uniqid(rand(), true)));
            return; 
        }
        return;
        
    }

    /**
     * Summary of getToken
     * @return string
     */
    public static function getToken(): string
    {
        return $_SESSION['_token'];
    }

    /**
     * Summary of verificaToken
     * @param string $token
     * @return bool
     */
    public static function verificaToken(string $token): bool
    {
        // var_dump($token,$_SESSION['_token']);
        if($token === $_SESSION['_token']){
            return true;
        }
        return false;
    }
}