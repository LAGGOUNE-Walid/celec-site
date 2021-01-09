<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function show() {
    	// $users = User::count();
    	return view("admin.users.show",);
    }
}
