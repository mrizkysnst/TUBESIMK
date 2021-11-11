<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
  public function registrasi()
  {
    return view('registrasi');
  }

  public function store (Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:225',
      'username' => ['required', 'min:3', 'max:225', 'unique:users'],
      'email' => 'required|email:dns|unique:users',
      'password' => 'required|min:5|max:225'
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    user::create($validatedData);

    return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan Login.');
    }
}
