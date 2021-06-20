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
        $airport = new Airport(Post::getAll());

        if($airport->is_valid()){
            $airport->save();
            Redirect::toRoute('airport/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('airport/create', ['airport' => $airport]);
        }
    }

    public function show($id)
    {
        $airport = Airport::find([$id]);

        if (is_null($airport)) {
            //TODO redirect to standard error page
        } else {
            return View::make('airport.show', ['airport' => $airport]);
        }
    }

    public function edit($id)
    {
        $airport = Airport::find([$id]);

        if (is_null($airport)) {
            //TODO redirect to standard error page
        } else {
            return View::make('airport.edit', ['airport' => $airport]);
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
