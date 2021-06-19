<?php

use ActiveRecord\Model;

class Ticket extends Model
{

    public static array $belongs_to = array(
        array('user'));

    public static array $has_one = array(
        array('flight', ['foreignKey' => 'idvooida'], ['foreignKey' => 'idvoovolta'])
    );

}

$ticket = Ticket::first();

echo $ticket->user->nomecompleto;