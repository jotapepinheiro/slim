<?php

namespace App\Controllers\Api;

use App\Controllers\Controller;
use App\Models\User;

class ApiUserController extends Controller
{
	public function index($request, $response)
    {
        $users = User::all();
        $return = $response->withJson(['status' => true, 'data' => $users], 200)
            ->withHeader('Content-type', 'application/json');

        return $return;
    }
}
