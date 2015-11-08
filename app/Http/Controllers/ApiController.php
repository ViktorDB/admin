<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Follower;

class ApiController extends Controller
{
    /**  GET ALL USERS  **/
    public function usersAll()
    {
        $users = User::all();
        return $users;
    }

    public function usersById()
    {
        $id = Request::get('id');
        $user = User::find($id);

        return $user;
    }

    public function usersByUsername()
    {
        $username = Request::get('username');
        $user = User::where('username', "=", $username)->get();

        return $user;
    }

    public function usersCreate()
    {
        $requestUser = Request::all();

        $newUser = new User();

        if (User::where('username', '=', $requestUser['username'])->count() > 0) {
            // if exists

            return 'username already exists';
        }

        if (User::where('email', '=', $requestUser['email'])->count() > 0) {
            // if exists

            return 'email already exists';
        }

        $newUser->username = $requestUser['username'];
        $newUser->email = $requestUser['email'];
        $newUser->password = $requestUser['password'];

        $newUser->save();

        return 'Success';
    }

    public function followersFollow()
    {
        $requestFollower = Request::all();
        $newFollower = new Follower();

        $newFollower->user_id = $requestFollower['user_id'];
        $newFollower->follow_id = $requestFollower['follow_id'];

        $newFollower->save();

        return 'Success';
    }

    public function followersUnfollow()
    {
        $requestFollower = Request::all();

        $user_id = $requestFollower['user_id'];
        $follow_id = $requestFollower['follow_id'];

        Follower::where('user_id', '=', $user_id)
            ->where('follow_id', '=', $follow_id)
            ->delete();

        return 'Success';
    }

}
