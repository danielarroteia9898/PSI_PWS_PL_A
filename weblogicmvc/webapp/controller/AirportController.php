<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class AirportController extends BaseController

    implements ResourceControllerInterface
{
    public function index()
    {
        $airports = Airport::all();
        return View::make('airport.index', ['airport' => $airports]);
    }

    public function create()
    {
        return View::make('airport.create');
    }

    public function store()
    {
        $airports = new Airport(Post::getAll());
        $airports->save();
        Redirect::toRoute('airport/index');

    }

    public function show($id)
    {
        $airports = Airport::find([$id]);

        if (is_null($airports)) {
            //TODO redirect to standard error page
        } else {
            return View::make('airport.show', ['airport' => $airports]);
        }
    }

    public function edit($id)
    {
        $airports = Airport::find([$id]);

        if (is_null($airports)) {
            //TODO redirect to standard error page
        } else {
            return View::make('airport.edit', ['airport' => $airports]);
        }
    }

    public function update($id)
    {
        $airports = Airport::find([$id]);
        $airports->update_attributes(Post::getAll());

        if($airports->is_valid()){
            $airports->save();
            Redirect::toRoute('airport/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('airport/edit', ['airport' => $airports]);
        }
    }

    public function destroy($id)
    {
        $airports = Airport::find([$id]);
        $airports->delete();
        Redirect::toRoute('airport/index');
    }
}
