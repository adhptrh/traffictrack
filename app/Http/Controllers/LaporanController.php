<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        if (session("log") != null)
        {
            $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
            return view("laporan",["pengguna"=>$pengguna[0]]);
        }
        else
        {
            return redirect(url("/"));
        }
    }

    public function riwayatLaporan()
    {
        if (session("log") != null)
        {
            $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
            
            $riwayat = DB::select("SELECT * from laporan where id_pengguna = ? order by id desc",[session("log")]);
            return view("riwayatlaporan",["pengguna"=>$pengguna[0],"riwayat"=>$riwayat ?? null]);
        }
        else
        {
            return redirect(url("/"));
        }
    }

    public function kirimLaporan(Request $request)
    {
        $file = $request->file("foto");
        $fotopath = rand(0,999999).$file->getClientOriginalName();
        move_uploaded_file($file->getPathname(), "laporan_img/".$fotopath);

        DB::insert(
            "INSERT INTO laporan (id_pengguna,jenis,berat,foto,komentar) VALUES (?,?,?,?,?)",
            [$request->post("id_pengguna"),$request->post("jenis"),$request->post("berat"),$fotopath,$request->post("komentar")]
        );

        return redirect()->route("laporan")->with("success","Laporan berhasil dikirim");
    }
}
