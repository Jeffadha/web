<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home()
    {
        return view('beranda_web');
    }

    //
    public function history_show()
    {
        return view('frontend.history_page');
    }


    public function web_beritaterkini(Request $request)
    {
        $web_beritaterkini = DB::connection('mysql')
            ->select('SELECT beritaterkini.*, users.fullname,departement_roles.nama_departemen, departement_roles.url_departemen FROM beritaterkini 
        JOIN users ON beritaterkini.user_id = users.id 
        JOIN departement_roles ON departement_roles.id_departemen = beritaterkini.roles_departemen_id 
        ORDER BY id_berita DESC LIMIT 4');
        return $web_beritaterkini;
    }

    // public function detail_post_page()
    // {   
    //     return view('frontend.post_detailpage');
    // }
    public function detail_post_page($urlext, $id, $title)
    {
        $id_berita = $id;

        // dd($id_berita);

        return view('frontend.post_detailpage', compact('id_berita'));
    }

    public function detail_post(Request $request)
    {
        $detail_post = collect(DB::connection('mysql')
            ->select('SELECT beritaterkini.*, users.fullname,departement_roles.nama_departemen, departement_roles.url_departemen FROM beritaterkini 
        JOIN users ON beritaterkini.user_id = users.id 
        JOIN departement_roles ON departement_roles.id_departemen = beritaterkini.roles_departemen_id 
        WHERE id_berita =' . $request->id . ''))->first();
        // dd($detail_post);
        return $detail_post;
    }
}
