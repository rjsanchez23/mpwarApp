<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 19/03/2015
 * Time: 15:52
 */

namespace app\Model;


use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'user';

    public $timestamps = false;

}