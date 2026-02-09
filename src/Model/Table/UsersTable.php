<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class UsersTable extends Table
{
    public function initialize(array $c): void
    {
        parent::initialize($c);

        // on lui demande de gérer created et modified de son côté
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $v): Validator
    {
        $v->notEmptyString('firstname');
        $v->maxLength('firstname', 55);
        $v->notEmptyString('lastname');
        $v->maxLength('lastname', 55);
        $v->allowEmptyString('biography');
        $v->allowEmptyDate('birthdate');
        return $v;
    }
}
