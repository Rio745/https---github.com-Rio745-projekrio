<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    public function setPassword(string $pass)
	{
		$salt = uniqid('', true);
		$this->attributes['salt'] = $salt;
		$this->attributes['password'] = md5($salt.$pass);

		return $this;
	}
}
