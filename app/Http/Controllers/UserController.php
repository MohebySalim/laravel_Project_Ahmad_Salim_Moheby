<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Province;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userList(Request $request)
    {
        $user = User::query();
            if ($request->search){
                $user->where('code', $request->search);
            }
        $users = $user->orderBy('id', 'desc')->paginate(10);

        return view('user.userList', compact('users'));
    }
    public function StoreUser(Request $request)
    {
//        return $request->all();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:128'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if($request->hasfile('profile')){
            $image = $request->file('profile');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456, 999999).".".$image_ext;
            $destination_path = public_path('/images/profile');
            $image->move($destination_path, $new_image_name);
        }
        $user = new User;
        $user->name        = $request->name;
        $user->job         = $request->job;
        $user->email       = $request->email;
        $user->password    = Hash::make($request['password']);
        $user->is_admin    = $request->is_admin;
        if ($request->has('profile')){
            $user->profile     = $new_image_name;
        }
        $user->status      = '1';
        $user->save();

        return redirect()->route('userList')->with('message', 'User Added successfully.');
    }
    public function UpdateUser(Request $request, $id)
    {
//        return $request->all();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:128'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'is_admin' => ['required'],
            'password' => ['nullable', 'string', 'min:8'],
        ]);
        $status = $request->status? : 0;

        $user = User::findOrFail($id);
        $user->name        = $request->name;
        $user->job         = $request->job;
        $user->email       = $request->email;
        $user->is_admin    = $request->is_admin;
        if ($request->password){
            $user->password    = Hash::make($request['password']);
        }
        $user->status      = $status;
        $user->save();

        return redirect()->route('userList')->with('message', 'User Updated successfully.');
    }
    public function UpdatePassword(Request $request, $id)
    {
        $this->validate($request, ['password' => ['required', 'string', 'min:8', 'confirmed'] ]);
        $data = User::findOrFail($id);
        $data->password = Hash::make($request['password']);
        $data->save();

        return redirect()->back()->with('message', 'Password Reseted successfully');
    }

}
