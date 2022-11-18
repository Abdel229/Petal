<?php

namespace App\Http\Controllers;

use App\Models\formations;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $formations=formations::all();
        return view('admin.admin',compact('formations'));
    }
}
