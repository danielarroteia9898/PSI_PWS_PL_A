<?php

use ActiveRecord\Model;

class User extends Model
{
    public static array $has_many = array(
        array('ticket', ['foreignKey' => 'idutilizador'])
    );


}

$user = User::first();

$ticket = $user->create_ticket(array('precopassagem', 'dtacomprapassagem' => 1));