<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        if (session("log") != null)
        {
            if (session("role") == "pengguna")
            {
                $pengguna = DB::select("SELECT * FROM pengguna WHERE id=?",[session("log")]);
                return view("feedback",[
                    "pengguna"=>$pengguna[0]
                    ]);
            }
        }
        else
        {
            return redirect(url("/"));
        }
    }

    public function kirimFeedback(Request $request)
    {
        DB::insert("INSERT INTO feedback (id_pengguna,feedback) VALUES (?,?)",[$request->post("id_pengguna"),$request->post("feedback")]);
        return redirect()->route("feedback")->with("berhasil","1");
    }
}
