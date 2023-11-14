<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use App\Gallery;
use App\Pengumuman;

class FrontendController extends Controller
{
    public function home()
    {
        return view('beranda_web');
    }

    //
    public function profil_show()
    {
        return view('frontend.profil_page');
    }

    public function campus_show()
    {
        
        return view('frontend.campus_page');
    }
    public function struktur_show()
    {
        return view('frontend.struktur_organisasi_page');
    }
    public function post_list()
    {
        return view('frontend.post_listpage');
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

    public function list_beritaterkini(Request $request)
    {
        $list_beritaterkini = DB::connection('mysql')
            ->select('SELECT beritaterkini.*, users.fullname,departement_roles.nama_departemen, departement_roles.url_departemen FROM beritaterkini 
        JOIN users ON beritaterkini.user_id = users.id 
        JOIN departement_roles ON departement_roles.id_departemen = beritaterkini.roles_departemen_id 
        ORDER BY id_berita DESC');
        return $list_beritaterkini;
    }

    // public function detail_post_page()
    // {   
    //     return view('frontend.post_detailpage');
    // }
    public function detail_post_page($urlext, $id, $title)
    {
        $id_berita = $id;
        $post = DB::table('beritaterkini')->where('id_berita', $id_berita)->first();

        // dd($id_berita);

        return view('frontend.post_detailpage', compact(['post'],'id_berita'));
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

    //Pengumuman
    public function web_pengumuman(Request $request)
    {
        $web_pengumuman = DB::connection('mysql')
            ->select('SELECT * FROM pengumuman
        ORDER BY id_pengumuman DESC LIMIT 4');
        return $web_pengumuman;
    }

    public function detail_announcement_page($urlext, $id, $title)
    {
        
        $id_pengumuman = $id;
        $pengumuman = DB::table('pengumuman')->find($id);

        // dd($id_pengumuman);

        return view('frontend.announcement_detailpage', compact(['pengumuman'],'id_pengumuman'));
    }

    // public function detail_announcement(Request $request)
    // {
    //     $detail_announcement = collect(DB::connection('mysql')
    //         ->select('SELECT pengumuman.*, users.fullname,departement_roles.nama_departemen, departement_roles.url_departemen FROM pengumuman 
    //     JOIN users ON pengumuman.user_id = users.id 
    //     JOIN departement_roles ON departement_roles.id_departemen = pengumuman.roles_departemen_id 
    //     WHERE id_pengumuman =' . $request->id . ''))->first();
    //     // dd($detail_announcement);
    //     return $detail_announcement;
    // }
    public function data_gambar(){
        $data_gambar = DB::connection('mysql')
            ->select('SELECT * FROM gallery
        ORDER BY id_image DESC LIMIT 12');
        return $data_gambar;
    }

}
