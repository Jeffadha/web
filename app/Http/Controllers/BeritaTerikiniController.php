<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class BeritaTerikiniController extends Controller
{
    public function index()
    {
        return view('beritaterkini.index');
    }
    public function create()
    {
        return view('beritaterkini.create');
    }

    public function update_page($id)
    {
        $idpost = $id;
        $data = collect(DB::connection('mysql')
        ->select('SELECT * FROM beritaterkini
    WHERE id_berita =' . $idpost . ''))->first();
        return view('beritaterkini.update', compact('data'));
    }

    public function data_berita_terkini(Request $request)
    {
        $data_beritaterkini = DB::connection('mysql')->select('SELECT beritaterkini.*, users.fullname FROM beritaterkini JOIN users ON beritaterkini.user_id = users.id');

        return Datatables::of($data_beritaterkini)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '<a href="javascript:void(0)" class="btn btn-xs btn-info" data-id="' . $data->id_berita . '" title="Detail Berita"><i class="fa fa-info-circle" aria-hidden="true"></i></a> <a href="' . route('berita_terkini_update', $data->id_berita) . '" class="btn btn-xs btn-primary" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>  <a href="' . route('beritaterkini.delete', $data->id_berita) . '" class="btn btn-xs btn-danger" data-id="' . $data->id_berita . '" title="Hapus Berita"><i class="fa fa-trash"></i></a>';

                // '<a href="javascript:void(0)" class="btn btn-xs btn-primary" id="bt_edit" data-show="' .  URL::asset("uploadfile/".$data->gambar)  . '" data-isi="' . $data->content . '" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'

            })
            ->addColumn('image', function ($data) {
                if (!empty($data->gambar)) {
                    $url = URL::asset('/uploadfile_news/' . $data->gambar);
                } else {
                    $url = URL::asset('images/no-image.png');
                }

                $img = '<div style="height: 75px;width: 75px"><img src="' . $url . '" alt=" " style="width: 100%;height: 100%;object-fit: cover;"/></div>';
                //                <img style="height: 100%; width: 100%; object-fit: contain" src="' . $url . '" height="" alt="User Image">
                return $img;
            })
            ->rawColumns(['aksi', 'image'])
            ->make(true);
    }

    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'judul' => 'required',
            'author' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'gambar' => 'required|mimes:jpeg,png|max:2048'
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {

            if ($request-> hasfile('gambar')) {
                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_news'), $name);
                DB::connection('mysql')->table('beritaterkini')->insert([
                    'judul' =>  $request->judul,
                    'author' =>  $request->author,
                    'content' => htmlspecialchars($request->content),
                    'gambar' => $name,
                    'tags' =>  $request->tags,
                    'slug' =>  Str::slug($request->judul),
                    'user_id' => Session::get('id_user'),
                    'tanggal' => date("Y-m-d")
                ]);

                return response()->json(['success' => 'Artikel berhasil disimpan !']);
            }
        }
    }


    public function update(Request $request, $id)
{
    $validation = Validator::make($request->all(), [
        'author' => 'required',
        'judul' => 'required',
        'content' => 'required',
        'tags' => 'required',
        'gambar' => 'sometimes|mimes:jpeg,png|max:2048',
    ]);

    if ($validation->fails()) {
        return response()->json(['error' => $validation->errors()->all()]);
    } else {
            $data = collect(DB::connection('mysql')->select('SELECT gambar FROM beritaterkini WHERE id_berita =' . $id));
            $data = $data[0]->gambar;
            $path = public_path('uploadfile_news/' . $data);
                        
            if ($request->hasFile('gambar')) {
                // If file exists, delete the old file
                if (File::exists($path)) {
                    File::delete($path);
                }
                
                // Upload the new file
                $file = $request->file('gambar');
                $name = date('YmdHis') . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_news'), $name);
                DB::connection('mysql')->table('beritaterkini')
                ->where('id_berita', $id)
                ->update([
                'author' => $request->author,
                'judul' => $request->judul,
                'content' => htmlspecialchars($request->content),
                'gambar' => $name,
                'tags' => $request->tags,
                'slug' => Str::slug($request->judul),
                'user_id' => Session::get('id_user'),
                'tanggal' => date('Y-m-d'),
                ]);
            } else {
            DB::connection('mysql')->table('beritaterkini')
            ->where('id_berita', $id)
            ->update([
                'author' => $request->author,
                'judul' => $request->judul,
                'content' => htmlspecialchars($request->content),
                'tags' => $request->tags,
                'slug' => Str::slug($request->judul),
                'user_id' => Session::get('id_user'),
                'tanggal' => date('Y-m-d'),
            ]);
        }
            
    return response()->json(['success' => 'Artikel berhasil diubah !']);
}
}



    public function select_tags(Request $request)
    {
        $select_tags = DB::connection('mysql')->select('SELECT * FROM tags');
        return $select_tags;
    }

    // public function select_category(Request $request)
    // {   
    //     $select_category = DB::connection('mysql')->select('SELECT * FROM category');
    //     return $select_category;
    // }

    public function select_category(Request $request)
    {
        $select_category = DB::select("SELECT * FROM category WHERE name like '%{$request->search}%'");

        if (!empty($select_category[0]->id)) {
            foreach ($select_category as $namaselect_category) {
                $select_categoryArray[] = array(
                    "id" => $namaselect_category->id,
                    "text" => $namaselect_category->name
                );
            }
        } else {
            $select_categoryArray[] = array(
                "id" => '',
                "text" => '',
            );
        }
        return response()->json(['data' => $select_categoryArray]);
    }

    public function delete($id)
    {
        $data = collect(DB::connection('mysql')->select('SELECT gambar FROM beritaterkini WHERE id_berita =' . $id));
        $data = $data[0]->gambar;
        $path = public_path('uploadfile_news/' . $data);
        if (File::exists($path)) {
            File::delete($path);
        }

        DB::connection('mysql')->table('beritaterkini')->where('id_berita', $id)->delete();
        // return response()->json(['success' => 'berita berhasil dihapus !'])->header('Location', 'http://localhost:8000/admin/berita');
        return redirect('/berita-terkini')->with('success', 'berita Berhasil Dihapus');
    }
}
