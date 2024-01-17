<?php

namespace source\Qualifield;

/**
 *
 */
class User
{
    private $firstName;
    private $lestName;
    private $email;
    private $error;

    public function setUser($firstName, $lestName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLestName($lestName);

        if (!$this->setEmail($email)) {
            $this->error = "O e-mail {$this->getEmail()} não é válido!";

            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

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
    private function setFirstName($firstName)
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
    private function setLestName($lestName)
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
    private function setEmail($email)
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

}