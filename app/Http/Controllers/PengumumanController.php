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


class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman.index');
    }
    public function create()
    {
        return view('pengumuman.create');
    }

    public function update_page($id)
    {
        $idpost = $id;
        $data = collect(DB::connection('mysql')->select('SELECT * FROM pengumuman JOIN category ON pengumuman.category_id = category.id WHERE id_pengumuman =' . $idpost . ''))->first();


        return view('pengumuman.update', compact('data'));
    }

    public function data_pengumuman(Request $request)
    {
        $data_pengumuman = DB::connection('mysql')->select('SELECT * FROM pengumuman');

        return Datatables::of($data_pengumuman)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '<a href="javascript:void(0)" class="btn btn-xs btn-info" data-id="' . $data->id_pengumuman . '" title="Detail Pengumuman"><i class="fa fa-info-circle" aria-hidden="true"></i></a> <a href="' . route('pengumuman_update', $data->id_pengumuman) . '" class="btn btn-xs btn-primary" title="Edit Pengumuman"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>  <a href="' . route('pengumuman.delete', $data->id_pengumuman) . '" class="btn btn-xs btn-danger" data-id="' . $data->id_pengumuman . '" title="Hapus Pengumuman"><i class="fa fa-trash"></i></a>';

                // '<a href="javascript:void(0)" class="btn btn-xs btn-primary" id="bt_edit" data-show="' .  URL::asset("uploadfile/".$data->gambar)  . '" data-isi="' . $data->content . '" title="Edit Pengumuman"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'

            })
            ->addColumn('image', function ($data) {
                if (!empty($data->gambar)) {
                    $url = URL::asset('/uploadfile_announcement/' . $data->gambar);
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
            'content' => 'required|mimes:pdf',
            'gambar' => 'required|mimes:jpeg,png'
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {

            if ($request->hasfile('gambar')) {
                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_announcement'), $name);
                //pdf
                $files   =   $request->file('content');
                $names = date("YmdHis") . '.' . $files->getClientOriginalExtension();
                $files->move(public_path('uploadfile_announcement_pdf'), $names);
                DB::connection('mysql')->table('pengumuman')->insert([
                    'judul' =>  $request->judul,
                    'content' => $names,
                    'gambar' => $name,
                    'tanggal' => date("Y-m-d")
                ]);

                return response()->json(['success' => 'Artikel berhasil disimpan !']);
            }
        }
    }


    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'judul' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'id_pengumuman' => 'required'
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {


            $data = collect(DB::connection('mysql')->select('SELECT gambar FROM pengumuman JOIN category ON pengumuman.category_id = category.id WHERE id_pengumuman =' . $request->id_pengumuman . ''))->first();

            $path = public_path() . '/uploadfile_announcement/' . $data->gambar;
            $paths = public_path() . '/uploadfile_announcement_pdf/' . $data->content;

            if ($request->hasfile('gambar')) {

                if (File::exists($path)) {
                    File::delete($path);
                } 

                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_announcement'), $name);
                
                $files   =   $request->file('content');
                $names = date("YmdHis") . '.' . $files->getClientOriginalExtension();
                $files->move(public_path('uploadfile_announcement_pdf'), $names);

                DB::connection('mysql')->table('pengumuman')
                    ->where('id_pengumuman', $request->id_pengumuman)
                    ->update([
                        'judul' =>  $request->judul,
                        'content' => $names,
                        'gambar' => $name,
                        'tanggal' => date("Y-m-d")
                    ]);
            } else {
                $files   =   $request->file('content');
                $names = date("YmdHis") . '.' . $files->getClientOriginalExtension();
                $files->move(public_path('uploadfile_announcement_pdf'), $names);
                DB::connection('mysql')->table('pengumuman')
                    ->where('id_pengumuman', $request->id_pengumuman)
                    ->update([
                        'judul' =>  $request->judul,
                        'content' => $names,
                        'tanggal' => date("Y-m-d")
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

    public function delete($id)
    {
        $data = collect(DB::connection('mysql')->select('SELECT gambar FROM pengumuman WHERE id_pengumuman =' . $id));
        $data = $data[0]->gambar;
        $path = public_path('uploadfile_news/' . $data);
        if (File::exists($path)) {
            File::delete($path);
        }

        DB::connection('mysql')->table('pengumuman')->where('id_pengumuman', $id)->delete();
        // return response()->json(['success' => 'berita berhasil dihapus !'])->header('Location', 'http://localhost:8000/admin/berita');
        return redirect('/pengumuman')->with('success', 'pengumuman Berhasil Dihapus');
    }
}
