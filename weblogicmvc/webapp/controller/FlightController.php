<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class flightController

    implements ResourceControllerInterface
{

    public function index()
    {
        $flights = Ticket::all();
        return View::make('flight.index', ['flight' => $flights]);
    }

    public function create()
    {
        return View::make('flight.create');
    }

    public function store()
    {
        $flights = new Flight(Post::getAll());

        if($flights->is_valid()){
            $flights->save();
            Redirect::toRoute('flight/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('flight/create', ['flight' => $flights]);
        }

    }

    public function show($id)
    {
        $flights = Flight::find([$id]);

        if (is_null($flights)) {
            //TODO redirect to standard error page
        } else {
            return View::make('flight.show', ['flight' => $flights]);
        }
    }

    public function edit($id)
    {
        $flights = Flight::find([$id]);

        if (is_null($flights)) {
            //TODO redirect to standard error page
        } else {
            return View::make('flight.edit', ['flight' => $flights]);
        }
    }

    public function update($id)
    {
        $flights = Flight::find([$id]);
        $flights->update_attributes(Post::getAll());

        if($flights->is_valid()){
            $flights->save();
            Redirect::toRoute('flight/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('flight/edit', ['flight' => $flights]);
        }
    }

    public function destroy($id)
    {
        $flights = Flight::find([$id]);
        $flights->delete();
        Redirect::toRoute('flight/index');
    }
}

