<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request) 
    {
        // $request->session()->flush();

        $users = User::where('role_id', 2)->where('status', 'active')->get();

        return view('user', ['users' => $users]);
    }

    public function userAdd() 
    {
        $userBaru = User::where('status', 'inactive')->where('role_id', 2)->get();
        return  view('user-add', ['userBaru' => $userBaru]);
    }

    public function userEdit($slug) {
        $user = User::where('slug', $slug)->first();
        return view('user-edit', ['user' => $user]);
    }

    public function userApprove($slug) {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();

        return redirect('user-edit/'.$slug)->with('status', 'User Approved Successfully');
    }

    public function userDelete($slug) {

        $user = User::where('slug', $slug)->first();
        return view('user-delete', ['user' => $user]);
    }

    public function userDestroy($slug) {
        
        $user = User::where('slug', $slug)->first();
        $user->delete();

        return redirect('user')->with('status', 'User deleted successfully');
    }

    public function userDeleted() {
        $deletedUsers = User::onlyTrashed()->get();
        return view('user-deleted', ['deletedUsers' => $deletedUsers]);

    }

    
    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('user')->with('status', 'user Restored Successfully');
      
    }

    public function profile(Request $request) {

        return view('profile');
    }
}
