<?php

namespace app\Classes;

use app\Model\User;

class PDOUserRepository implements  UserRepositoryInterface
{
    protected $database;

    public function __construct($databaseConfig)
    {
        $this->database = $databaseConfig;

    }

    public function find($id)
    {
        return $this->database->select("SELECT * FROM users WHERE id = :id", array(":id" => $id));
    }
    public function findByEmail($email)
    {
        return $this->database->select("SELECT * FROM users WHERE email = :email", array(":id" => $email));
    }
    public function findAll()
    {
        return $this->database->selectAll('user');
    }
    public function create($name, $email)
    {
        $user = array(
            "name" => $name,
            "email" => $email
        );
        return $this->database->insert('user', $user);
    }

    public function update($id, $name, $email)
    {
        return $this->database->selectAll('user');
    }

    public function remove($id)
    {
        return $this->database->selectAll('user');
    }

}