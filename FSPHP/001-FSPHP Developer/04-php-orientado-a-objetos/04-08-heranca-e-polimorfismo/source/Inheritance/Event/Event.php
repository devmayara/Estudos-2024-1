<?php

namespace Source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    /**
     * @param $event
     * @param $date
     * @param $price
     * @param $vacancies
     */
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($funllName, $email)
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($funllName, $email);

            echo "<p class='trigger accept'>Parabéns {$funllName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$funllName}, mas as vagas esgotaram!</p>";
        }
    }

    /**
     * @param mixed $register
     */
    protected function setRegister($funllName, $email): void
    {
        $this->register = [
            "name" => $funllName,
            "email" => $email
        ];
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function getDate(): \DateTime
    {
        return $this->date->format("d/m/Y H:i");
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }

}