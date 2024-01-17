<?php

namespace classes;

/**
 *
 */
class User
{
    public $firstName;
    public $lestName;
    public $email;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    /**
     * @return mixed
     */
    public function getLestName()
    {
        return $this->lestName;
    }

    /**
     * @param $lestName
     * @return void
     */
    public function setLestName($lestName)
    {
        $this->lestName  = filter_var($lestName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido!
     * @param $email
     * @return bool
     */
    public function setEmail($email)
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

}