<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{

    public function dashboard()
    {   
        $users = User::all();

        return view('admin.dashboardUsers',compact('users'));
    }

    public function showBooks(){

        $books = Book::all();
        return view('admin.dashboardBooks',compact('books'));
    }


    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin');
    }



    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();



        return redirect('/login');
    }
}
