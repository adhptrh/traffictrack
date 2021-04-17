<?php

namespace App\Http\Controllers;

use App\Models\Polantas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolantasController extends Controller
{
    public function kelolaPolantas()
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        $polantas = Polantas::all();
        return view("kelolapolantas",["admin"=>$admin[0],"polantas"=>$polantas]);
    }

    public function tambahPolantasForm()
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        $polantas = Polantas::all();
        return view("tambahpolantas",["admin"=>$admin[0],"polantas"=>$polantas]);
    }

    public function tambahPolantas(Request $request)
    {
        $polantas = new Polantas;
        $polantas->id_lantas = $request->post("id_lantas");
        $polantas->password = $request->post("password");
        $polantas->save();
        return redirect()->route("tambahpolantasform")->with("success","Berhasil menambahkan polantas");
    }

    public function deletePolantas($id)
    {
        $polantas = Polantas::where("id",$id)->get()[0];
        $polantas->delete();
        return redirect()->route("kelolapolantas")->with("success","Berhasil menghapus polantas");
    }

    public function editPolantasForm($id)
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        $polantas = Polantas::where("id",$id)->get()[0];
        return view("editpolantas",["admin"=>$admin[0] ?? null,"polantas"=>$polantas]);
    }

    public function editPolantas(Request $request)
    {
        $polantas = Polantas::where("id",$request->post("id"))->get()[0];
        $polantas->id_lantas = $request->post("id_lantas");
        $polantas->password = $request->post("password");
        $polantas->save();
        return redirect()->route("kelolapolantas")->with("success","Berhasil mengedit perempatan");
    }

}
