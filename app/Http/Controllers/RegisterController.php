<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function register(Request $request)
    {
        Pengguna::create($request->all());
        $res = DB::select("SELECT * FROM pengguna WHERE email = ? AND password = ?",[$request->post("email"),$request->post("password")]);
        session([
            "log"=>$res[0]->id,
            "role"=>"pengguna"
            ]);
        return redirect(url("/home"));
    }
}
