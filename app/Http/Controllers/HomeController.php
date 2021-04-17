<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $cuaca = Http::get("https://api.openweathermap.org/data/2.5/weather?q=jakarta&appid=8027b86ed2ebd627eaef14d3c0f6a386&lang=id&units=metric");
        
        if (session("log") != null)
        {
            if (session("role") == "pengguna")
            {
                $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
                return view("home",[
                    "pengguna"=>$pengguna[0],
                    "cuaca"=>$cuaca->json()
                    ]);
            }
            if (session("role") == "polantas")
            {
                $polantas = DB::select("SELECT * FROM polantas WHERE id=?",[session("log")]);
                return view("home-polantas",[
                    "polantas"=>$polantas[0],
                    "cuaca"=>$cuaca->json()
                    ]);
            }
            if (session("role") == "admin")
            {
                $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
                return view("home-admin",[
                    "admin"=>$admin[0],
                    "cuaca"=>$cuaca->json()
                    ]);
            }
        }
        else
        {
            return redirect(url("/"));
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget("log");
        return redirect(url("/"));
    }

    public function chat()
    {
        if (session("log") != null)
        {
            if (session("role") == "pengguna")
            {
                $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
                return view("chat",[
                    "pengguna"=>$pengguna[0]
                    ]);
            }
            if (session("role") == "polantas")
            {
                $polantas = DB::select("SELECT * FROM polantas WHERE id=?",[session("log")]);
                return view("chat",[
                    "polantas"=>$polantas[0]
                    ]);
            }
            if (session("role") == "admin")
            {
                $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
                return view("chat",[
                    "admin"=>$admin[0]
                    ]);
            }
        }
        else
        {
            return redirect(url("/"));
        }
    }
}
