<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 20/03/2015
 * Time: 15:32
 */

namespace app\Classes;

use app\Model\User;

interface UserRepositoryInterface
{
    public function find($id);
    public function findAll();
    public function create($name, $email);
    public function update($id, $name, $email);
    public function remove($id);
}