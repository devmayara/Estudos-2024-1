<?php

namespace Source\Inheritance\Event;

use Source\Inheritance\Address;

class EventOnline extends Event
{
    private $link;

    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    public function register($funllName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($funllName, $email);
        echo "<p class='trigger accept'>Show {$funllName}, cadastrado com sucesso!</p>";
    }

}