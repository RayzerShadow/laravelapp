<?php

namespace App\Http\Controllers;
use App\Models\services;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = services::first()->paginate(6);
        $user = User::first()->paginate(6);
        return view('admin.index', compact('data'), compact('user'))
                ->with('i', (request()->input('page',1) - 1) * 6);
    }
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function edit($id)
    {
        $service = services::find($id);
        return view('admin.edit', ['service' => $service]);
    }
    public function edit_user($id)
    {
        $service_user = User::find($id);
        return view('admin.edit_user', ['service_user' => $service_user]);
    }

        public function update($id, Request $request)
    {
        $service = services::find($id);

        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->time = $request->time;
        $service ->save();
        return redirect()->route('admin')->with('message', 'Serwis zmodyfikowany');
    }

    public function update_user($id, Request $request)
{
    $service_user = user::find($id);

    $service_user->name = $request->name;
    $service_user->email = $request->email;
    $service_user->created_at = $request->created_at;
    $service_user->email_verified_at = $request->email_verified_at;
    $service_user->updated_at = $request->updated_at;
    $service_user ->save();
    return redirect()->route('admin')->with('message', 'Użytkownik zmodyfikowany');
}

    public function delete($id)
    {
        services::destroy($id);
        return redirect()->route('admin')->with('message', 'faktura usunięta');
    }
    public function delete_user($id)
    {
        User::destroy($id);
        return redirect()->route('admin')->with('message', 'użytkownik usunięty');
    }
}
