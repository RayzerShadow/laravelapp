<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $data = User::first()->paginate(6);
      $id = Auth::id();
      return view('user.index', compact('data'), compact('id'))
              ->with('i', (request()->input('page',1) - 1) * 6);

    }
    public function __construct()
    {
        $this->middleware('auth');
    }



}
