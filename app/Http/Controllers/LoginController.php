<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function create()
    {
        return view('login.create');
    }
    
    public function store()
    {
        //echo "success";
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/home');

     }
    
    public function destroy()
    {
        //auth()->logout();
        
        return redirect()->to('/login');
    }

}
