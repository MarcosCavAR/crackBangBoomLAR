<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
  public function save_user(Request $request)
    {
    $userDB = UserDB::create($request->all());
    return redirect()->route('/');
    }
}
