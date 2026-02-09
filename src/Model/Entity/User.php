<?php

namespace App\Model\Entity;
use Cake\ORM\Entity; // import the Entity base

class User extends Entity
{
    protected array $_accessible = [
        "*" => true,
        'id' => false
    ];
}