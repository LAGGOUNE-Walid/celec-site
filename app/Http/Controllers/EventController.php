<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {
    public function show() {
    	return redirect(url('register'));
    	return view("events");
    }
}
