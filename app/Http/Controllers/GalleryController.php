<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller {
    public function show() {
    	return redirect(url('register'));
    	return view("gallery");
    }
}
