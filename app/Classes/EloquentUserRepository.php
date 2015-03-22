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

    public function create($name, $email)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->save();
    }

    public function update($id, $name, $email)
    {
        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();
    }

    public function remove($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}