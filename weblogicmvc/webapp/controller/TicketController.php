<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class TicketController extends BaseController

    implements ResourceControllerInterface
{
    public function index()
    {
        $tickets = Ticket::all();
        return View::make('ticket.index', ['ticket' => $tickets]);
    }

    public function create()
    {
        return View::make('ticket.create');
    }

    public function store()
    {
        $tickets = new Ticket(Post::getAll());

        if($tickets->is_valid()){
            $tickets->save();
            Redirect::toRoute('ticket/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('ticket/create', ['ticket' => $tickets]);
        }
    }

    public function show($id)
    {
        $tickets = Ticket::find([$id]);

        if (is_null($tickets)) {
            //TODO redirect to standard error page
        } else {
            return View::make('ticket.show', ['ticket' => $tickets]);
        }
    }

    public function edit($id)
    {
        $tickets = Ticket::find([$id]);

        if (is_null($tickets)) {
            //TODO redirect to standard error page
        } else {
            return View::make('ticket.edit', ['ticket' => $tickets]);
        }
    }

    public function update($id)
    {
        $tickets = Ticket::find([$id]);
        $tickets->update_attributes(Post::getAll());

        if($tickets->is_valid()){
            $tickets->save();
            Redirect::toRoute('ticket/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('ticket/edit', ['ticket' => $tickets]);
        }
    }

    public function destroy($id)
    {
        $tickets = finance::find([$id]);
        $tickets->delete();
        Redirect::toRoute('ticket/index');
    }
}
