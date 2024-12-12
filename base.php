<?php
namespace Base;

class Login
{
    private $name;
    private $email;

    public function userLogin($name, $email): string
    {
        if ($this->name === $name and $this->email === $email) {
            return "Logado com sucesso!..🚀";
        } else {
            return "Senha ou Email invalidos! Tente novamente...";
        }

    }
}

$logar = new Login();
$logar->$name = "Natã Martins";
$logar->$email = "nata@gmail.com";
