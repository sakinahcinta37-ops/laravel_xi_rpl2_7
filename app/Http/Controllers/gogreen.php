<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class gogreen extends Controller
{
    //
    public function gogreen()
    {
        return view('gogreen');
    }

    public function gogreen2()
    {
        return view('gogreen2');
    }

    public function tampilForm()
    {
        return view('halaman_form');
    }

    public function kirimData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return "berhasil memasukkan data";
    }
}
