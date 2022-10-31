<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $formations=formation::all();
        return view('admin.admin',compact('formations'));
    }
}