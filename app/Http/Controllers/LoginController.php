<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function indexAdmin()
    {
        return view("login-admin");
    }

    public function loginAdmin(Request $request)
    {
        $res = DB::select("SELECT * FROM admin WHERE nama = ? AND password = ?",[$request->post("nama"),$request->post("password")]);
        
        if (count($res) > 0)
        {
            session([
                "log"=>$res[0]->id,
                "role"=>"admin"
                ]);
            return redirect("home");
        }
        return redirect("login-admin?fail=true");
        exit;
    }

    public function login(Request $request)
    {
        $res = DB::select("SELECT * FROM pengguna WHERE email = ? AND password = ?",[$request->post("email"),$request->post("password")]);
        if (count($res) > 0)
        {
            session([
                "log"=>$res[0]->id,
                "role"=>"pengguna"
                ]);
            return redirect("home");
        }
        $res = DB::select("SELECT * FROM polantas WHERE id_lantas = ? AND password = ?",[$request->post("email"),$request->post("password")]);
        if (count($res) > 0)
        {
            session([
                "log"=>$res[0]->id,
                "role"=>"polantas"
                ]);
            return redirect("home");
        }
        return redirect("login?fail=true");
        exit;
    }
}
