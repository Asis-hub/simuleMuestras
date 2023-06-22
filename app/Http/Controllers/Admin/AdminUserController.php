<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Panel de administrador - Usuarios - SIMULE";
        $viewData["users"] = User::all();
        return view('admin.user.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'roles' => ['required', 'string', 'max:255']
        ]);
        $newUser = new User();
        $newUser->setName($request->input('name'));
        $newUser->setEmail($request->input('email'));
        $newUser->setPassword(Hash::make($request->input('password')));
        $newUser->setRole($request->input('roles'));
        $newUser->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles' => ['required', 'string', 'max:255'],
        ]);
    
        $user = User::findOrFail($id);
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
        $user->setPassword(Hash::make($request->input('password')));
        $user->setRole($request->input('roles'));
        $user->save();
    
        return redirect()->back();
    }
    
}
