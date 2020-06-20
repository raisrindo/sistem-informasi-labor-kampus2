<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->First();
        return view('profile/index', compact('user'));
    }
    public function update(Request $request)
    {

        $this->validate(
            $request,
            [
                'password' => 'confirmed',
            ]
        );

        $user = User::where('id', Auth::user()->id)->First();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nomorinduk = $request->nomorinduk;
        $user->nomorhp = $request->nomorhp;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->update();

        return redirect('profile');
    }
}
