<?php

namespace App\Http\Controllers;

use App\Models\ListPerempatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListPerempatanController extends Controller
{
    public function index()
    {
        if (session("log") != null)
        {
            $perempatan = ListPerempatan::all();
            if (session("role") == "pengguna")
            {
                $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
                return view("listperempatan",[
                    "pengguna"=>$pengguna[0] ?? null,
                    "perempatan"=>$perempatan
                    ]);
            }
            if (session("role") == "polantas")
            {
                $polantas = DB::select("SELECT * FROM polantas WHERE id=?",[session("log")]);
                return view("listperempatan-polantas",[
                    "polantas"=>$polantas[0] ?? null,
                    "perempatan"=>$perempatan
                    ]);
            }
            if (session("role") == "admin")
            {
                $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
                return view("listperempatan-admin",[
                    "admin"=>$admin[0] ?? null,
                    "perempatan"=>$perempatan
                    ]);
            }
        }
        else
        {
            return redirect(url("/"));
        }
    }

    public function kelolaPerempatan()
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        $perempatan = ListPerempatan::all();
        return view("kelolaperempatan",["admin"=>$admin[0] ?? null,"perempatan"=>$perempatan]);
    }

    public function tambahPerempatanForm()
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        return view("tambahperempatan",["admin"=>$admin[0] ?? null]);
    }

    public function editPerempatanForm($id)
    {
        $admin = DB::select("SELECT * FROM admin WHERE id=?",[session("log")]);
        $perempatan = ListPerempatan::where("id",$id)->get()[0];
        return view("editperempatan",["admin"=>$admin[0] ?? null,"perempatan"=>$perempatan]);
    }

    public function tambahPerempatan(Request $request)
    {
        DB::insert("INSERT into list_perempatan (nama,tingkatmacet,kecepatanmaks) values (?,?,?)",[$request->post("nama"),$request->post('tingkatmacet'),$request->post("kecepatanmaks")]);
        return redirect()->route("tambahperempatanform")->with("success","Berhasil menambahkan perempatan");
    }

    public function editPerempatan(Request $request)
    {
        $perempatan = ListPerempatan::where("id",$request->post("id"))->get()[0];
        $perempatan->nama = $request->post("nama");
        $perempatan->kecepatanmaks = $request->post("kecepatanmaks");
        $perempatan->tingkatmacet = $request->post("tingkatmacet");
        $perempatan->save();
        return redirect()->route("kelolaperempatan")->with("success","Berhasil mengedit perempatan");
    }

    public function deletePerempatan($id)
    {
        $perempatan = ListPerempatan::where("id",$id)->get()[0];
        $perempatan->delete();
        return redirect()->route("kelolaperempatan")->with("success","Berhasil menghapus perempatan");
    }
}
