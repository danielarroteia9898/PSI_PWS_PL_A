<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class PlaneController extends BaseController implements ResourceControllerInterface
{
    public function index()
    {
        $planes = Plane::all();
        return View::make('plane.index', ['plane' => $planes]);
    }

    public function create()
    {
        return View::make('plane.create');
    }

    public function store()
    {
        $planes = new Plane(Post::getAll());

        if($planes->is_valid()){
            $planes->save();
            Redirect::toRoute('plane/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('plane/create', ['plane' => $planes]);
        }
    }

    public function show($id)
    {
        $planes = Plane::find([$id]);

        if (is_null($planes)) {
            //TODO redirect to standard error page
        } else {
            return View::make('plane.show', ['plane' => $planes]);
        }
    }

    public function edit($id)
    {
        $plane = Plane::find([$id]);

        if (is_null($plane)) {
            //TODO redirect to standard error page
        } else {
            return View::make('plane.edit', ['plane' => $plane]);
        }
    }

    public function update($id)
    {
        $planes = Plane::find([$id]);
        $planes->update_attributes(Post::getAll());

        if($planes->is_valid()){
            $planes->save();
            Redirect::toRoute('plane/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('plane/edit', ['plane' => $planes]);
        }
    }

    public function destroy($id)
    {
        $planes = Plane::find([$id]);
        $planes->delete();
        Redirect::toRoute('plane/index');
    }
}
