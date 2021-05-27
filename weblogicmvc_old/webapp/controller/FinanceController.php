<?php

use ArmoredCore\WebObjects\View;

class FinanceController extends \ArmoredCore\Controllers\BaseController implements \ArmoredCore\Interfaces\ResourceControllerInterface
{


    public function index()
    {

        $finances = Finance::all();
        return View::make('finances.index',['finances' => $finances]);

    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {

        $finance = Finance::find([$id]);
        return View::make('finances.show',['finance' => $finance]);

    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}