<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;

class UserController extends BaseController   implements ResourceControllerInterface
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
        $user = new User(Post::getAll());

        if($user->is_valid()){
            $user->save();
            Redirect::toRoute('user/index');
        } else {
            //redirect to form with data and errors
            Redirect::flashToRoute('user/create', ['user' => $user]);
        }
    }

    public function show($id)
    {
        $user = User::find([$id]);

        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            return View::make('user.show', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find([$id]);

        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            return View::make('user.edit', ['user' => $user]);
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

        $users = User::find_by_username_and_password($username, $password);

        if(is_null($users)){
            Redirect::toRoute('home/index');
        }
        else
        {
            \ArmoredCore\WebObjects\Session::set('user', $user);
            \ArmoredCore\WebObjects\URL::toRoute('home/index');
            Session::set('user', $users);
            Redirect::toRoute('home/index');


        }
    }

    public function tipoUtilizador(){
        //administrador, operador checkin, passageiro.
    }
}