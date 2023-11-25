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

class PmbController extends Controller
{
    public function index()
    {
        return view('pmb.index');
    }

    public function data_pmb(Request $request)
    {
        $data_pmb = DB::connection('mysql')->select('SELECT * FROM pmb');

        return Datatables::of($data_pmb)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return '<a href="' . route('pmb_update', $data->id_pmb) . '" class="btn btn-xs btn-primary" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';

                // '<a href="javascript:void(0)" class="btn btn-xs btn-primary" id="bt_edit" data-show="' .  URL::asset("uploadfile/".$data->gambar)  . '" data-isi="' . $data->content . '" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'

            })
            ->addColumn('image', function ($data) {
                if (!empty($data->gambar)) {
                    $url = URL::asset('/uploadfile_pmb/' . $data->gambar);
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

    public function update_page($id)
    {
        $idpmb = $id;
        $data = collect(DB::connection('mysql')->select('SELECT * FROM pmb WHERE id_pmb =' . $idpmb . ''));

        $data = $data[0];

        return view('pmb.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // $validation = Validator::make($request->all(), [
        //     'judul' => 'required',
        // ]);


        // if ($validation->fails()) {
        //     return response()->json(['error' => $validation->errors()->all()]);
        // } else {
        $data = collect(DB::connection('mysql')->select('SELECT gambar FROM pmb WHERE id_pmb =' . $id));
        $data = $data[0]->gambar;
        $path = public_path('uploadfile_pmb/' . $data);

        if ($request->hasfile('gambar')) {

            if (File::exists($path)) {
                File::delete($path);
            }
            $file   =   $request->file('gambar');
            $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploadfile_pmb'), $name);
            DB::connection('mysql')->table('pmb')
                ->where('id_pmb', $id)
                ->update([
                    'judul' =>  $request->input('judul'),
                    'gambar' => $name,
                ]);
        } else {
            DB::connection('mysql')->table('pmb')
                ->where('id_pmb', $id)
                ->update([
                    'judul' =>  $request->input('judul')
                ]);
        }

        return response()->json(['success' => 'Artikel berhasil diubah !']);
        // }
    }
}