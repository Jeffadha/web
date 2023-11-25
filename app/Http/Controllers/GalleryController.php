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
class GalleryController extends Controller
{
    public function index()
    {
        return view('image.index');
    }
    public function create()
    {
        return view('image.create');
    }

    public function data_image(Request $request)
    {
        $data_image = DB::connection('mysql')->select('SELECT * FROM gallery');
        
        return Datatables::of($data_image)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '<a href="javascript:void(0)" class="btn btn-xs btn-info" data-id="' . $data->id_image . '" title="Detail Image"><i class="fa fa-info-circle" aria-hidden="true"></i></a>  <a href="' . route('image.delete', $data->id_image) . '" class="btn btn-xs btn-danger" data-id="' . $data->id_image . '" title="Hapus image"><i class="fa fa-trash"></i></a>';

                // '<a href="javascript:void(0)" class="btn btn-xs btn-primary" id="bt_edit" data-show="' .  URL::asset("uploadfile/".$data->gambar)  . '" data-isi="' . $data->content . '" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'

            })
            ->addColumn('image', function ($data) {
                if (!empty($data->gambar)) {
                    $url = URL::asset('/uploadfile_image/' . $data->gambar);
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
            'gambar' => 'required|mimes:jpeg,png|max:2048'
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {

            if ($request->hasfile('gambar')) {
                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_image'), $name);
                DB::connection('mysql')->table('gallery')->insert([
                    'gambar' => $name
                ]);

                return response()->json(['success' => 'Gambar berhasil disimpan !']);
            }
        }
    }



    // public function select_category(Request $request)
    // {   
    //     $select_category = DB::connection('mysql')->select('SELECT * FROM category');
    //     return $select_category;
    // }
    public function delete($id)
    {
        $data = collect(DB::connection('mysql')->select('SELECT gambar FROM gallery WHERE id_gallery =' . $id));
        $data = $data[0]->gambar;
        $path = public_path('uploadfile_gallery/' . $data);
        if (File::exists($path)) {
            File::delete($path);
        }

        DB::connection('mysql')->table('gallery')->where('id_gallery', $id)->delete();
        // return response()->json(['success' => 'berita berhasil dihapus !'])->header('Location', 'http://localhost:8000/admin/berita');
        return redirect('/gallery')->with('success', 'Gambar Berhasil Dihapus');
    }
}
