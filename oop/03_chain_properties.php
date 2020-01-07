<?php
class User {
    public $firstName;
    public function hello()
    {
        echo "hello, " .  $this -> firstName;
    }
    public function register()
    {
        echo " >> registered";
    }

    public function mail()
    {
        echo " >> email sent";
    }
}

$user1 = new User();
$user1 -> firstName = 'Jane';

$user1 -> hello(); -> register() -> mail();