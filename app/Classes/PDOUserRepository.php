<?php

namespace app\Classes;

use app\Model\User;

class PDOUserRepository implements  UserRepositoryInterface
{
    protected $database;

    public function __construct($databaseConfig)
    {
        $this->database = $databaseConfig;
        var_dump($this->database);

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

    public function save(User $user)
    {
        $this->db->save($user, 'users');
    }

    public function remove(User $user)
    {
        $this->db->remove($user, 'users');
    }
}