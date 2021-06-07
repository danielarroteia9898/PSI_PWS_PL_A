<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class userController

    implements ResourceControllerInterface
{

    public function index()
    {
        $users = User::all();
        return View::make('user.index', ['user' => $users]);
    }

    public function create()
    {
        return View::make('user.create');
    }

    public function store()
    {
        $users = new User(Post::getAll());

        if($users->is_valid()){
            $users->save();
            Redirect::toRoute('user/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('user/create', ['user' => $users]);
        }
    }

    public function show($id)
    {
        $users = User::find([$id]);

        if (is_null($users)) {
            //TODO redirect to standard error page
        } else {
            return View::make('user.show', ['user' => $users]);
        }
    }

    public function edit($id)
    {
        $users = User::find([$id]);

        if (is_null($users)) {
            //TODO redirect to standard error page
        } else {
            return View::make('user.edit', ['user' => $users]);
        }
    }

    public function update($id)
    {
        $users = User::find([$id]);
        $users->update_attributes(Post::getAll());

        if($users->is_valid()){
            $users->save();
            Redirect::toRoute('user/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('user/edit', ['user' => $users]);
        }
    }

    public function destroy($id)
    {
        $users = User::find([$id]);
        $users->delete();
        Redirect::toRoute('user/index');
    }

    public function login(){
        $username = Post::get('username');
        $password = Post::get('password');

        $user = User::find_by_username_and_pasword($username, $password);

        if(is_null($user)){
            URL::toRoute('home/login');

        }
        else
        {
            \ArmoredCore\WebObjects\Session::set('user', $user);


        }
    }

    public function tipoUtilizador(){
        //administrador, operador checkin, passageiro.
    }
}