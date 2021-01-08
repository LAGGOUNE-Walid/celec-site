<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPanelController extends Controller {
    public function showLogin() {
    	return view("admin.login");
    }

    public function showDashboard() {
    	return view("admin.dashboard");
    }
}
