<?php

namespace model;

use sys\core\Model;

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        return $this->read('users', ['*'], null);
    }

    public function get($id)
    {
        return $this->read('users', ['*'], ['id' => $id]);
    }
}
