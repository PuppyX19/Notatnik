<?php

class User
{
    private $id;
    private $email;
    private $login;
    private $password;
    private $role_id;
    public function __construct($email, $login, $password, $role_id, $id = null)
    {
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
        $this->id = $id;
        $this->role_id = $role_id;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setId($id): void
   {
       $this->id = $id;
   }

    public function setRoleId($role_id): void
    {
        $this->role_id = $role_id;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }


    public function setPassword(string $password): void
    {
        $this->password = $password;
    }



}