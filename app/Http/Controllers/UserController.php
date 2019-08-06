<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function index()
    {
        //Get all users
        $users = User::get();

        // Return a collection of $users with pagination
        return UserResource::collection($users);
    }

    public function create(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);
        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }
        return $userData['firstname'] . ' ' . $userData['lastname'];
    }
}