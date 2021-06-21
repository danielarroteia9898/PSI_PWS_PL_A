<?php

use ActiveRecord\Model;
use ArmoredCore\WebObjects\Data;
use ArmoredCore\WebObjects\Layout;
use ArmoredCore\WebObjects\URL;
use Carbon\Carbon;

class Pesquisar extends Model
{
    public function pesquisar($pesquisar)
    {
        $pesquisar = $_GET['pesquisar'];
    }

    public function  show()
    {
        $flights = Post::get('flight');
        $airpot = Post::get('airpot');
        $plane = Post::get('plane');

        Session::set('pesquisar');
    }
}