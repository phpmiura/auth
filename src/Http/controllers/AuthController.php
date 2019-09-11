<?php

namespace PHPMiura\Auth\Http\Controllers;

use PHPMiura\Auth\Models\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class AuthController extends Controller {

    public function index()
    {
       return view('auth::auth');
    }

    public function sendMail(Request $request)
    {
        Auth::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent succesfully.']);
    }


}