<?php

namespace Source\Utils;

class Session
{
    protected $session;

    public function setSession(string $key, string $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function has(string $key): bool
    {
        if(empty($_SESSION[$key]) || !isset($_SESSION[$key])){
            return false;
        }
        return true;
    }
}