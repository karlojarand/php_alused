<?php
class User{
    public $firstName;
    public $lastName;

    public function hello()
    {
        return "hello," . $this->firstName;
    }
}

$user1= new User();
$user1 ->firstName ='Jonnie';
$user1 ->lastName ='Roe';
echo $user1 -> hello();