<?php

namespace app\Classes;



use app\Model\User;

class EloquentUserRepository implements  UserRepositoryInterface
{


    public function __construct($databaseConfig)
    {

    }
    public function find($id)
    {
        return User::find($id);
    }

    public function findByEmail($email)
    {
        return User::where('email',$email )->first();
    }

    public function findAll()
    {
        return User::all()->toArray();;
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