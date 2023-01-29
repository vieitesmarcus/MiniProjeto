<?php 

namespace Source\Utils;

class Errors
{
    
    
    public $errors = [];

    public function addMessage(string $error, string $message): void
    {
        $_SESSION[$error] = $message;
        $this->errors[] = $_SESSION[$error];
    }

    public function getError(): ?array
    {
        return $this->errors;
    }
}