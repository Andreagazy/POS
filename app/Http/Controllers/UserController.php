<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $name) {
        $data = [
            'id'   => $id,
            'name' => $name,
        ];

        return view('user', $data);
    }
}
