<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\RoleUser;
use App\Post;

class MyController extends Controller
{
    public function getPosts($id){
        $u = User::find($id);
        $r = $u->posts;
        return view('posts', ['posts'=>$r, 'user'=>$u]);
    }

    public function getRoles($id){
        $u = User::find($id);
        $r = $u->roles;
        return view('roles', ['roles'=>$r, 'user'=>$u]);
    }

    public function getUsers($name){
        $r = Role::where('name', $name)->first();
        $u = $r->users;
        return view('users', ['users'=>$u, 'role'=>$r]);
    }

    public function getUsersFromPosts($id){
        $p = Post::find($id);
        $u = $p->user;
        return view('usersP', ['user'=>$u, 'post'=>$p]);
    }
}
