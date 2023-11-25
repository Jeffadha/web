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


class ProdiController extends Controller
{
    public function index()
    {
        return view('prodi.index');
    }

    public function data_prodi()
    {
        $data_prodi = DB::connection('mysql')->select('SELECT * FROM prodi');

        return Datatables::of($data_prodi)
            ->addIndexColumn()
            ->addColumn(
                'aksi',
                function ($data) {

                    return '<a href="' . route('prodi.edit', $data->id_prodi) . '" class="btn btn-xs btn-primary" title="Edit Berita"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a href="' . route('prodi.delete', $data->id_prodi) . '" class="btn btn-xs btn-danger" data-id="' . $data->id_prodi . '" title="Hapus Berita"><i class="fa fa-trash"></i></a>';
                }

            )
            ->addColumn('image', function ($data) {
                if (!empty($data->gambar)) {
                    $url = URL::asset('/uploadfile_prodi/' . $data->gambar);
                } else {
                    $url = URL::asset('images/no-image.png');
                }

                $img = '<div style="height: 75px;width: 75px"><img src="' . $url . '" alt=" " style="width: 100%;height: 100%;object-fit: cover;"/></div>';
                return $img;
            })
            ->rawColumns(['aksi', 'image'])
            ->make(true);
    }

    public function create()
    {
        return view('prodi.create');
    }
    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama_prodi' => 'required',
            'degree' => 'required',
            'gambar' => 'mimes:jpeg,png|max:2048'
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {

            if ($request->hasfile('gambar')) {
                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_prodi'), $name);
                DB::connection('mysql')->table('prodi')->insert([
                    'nama_prodi' =>  $request->input('nama_prodi'),
                    'degree' =>  $request->input('degree'),
                    'gambar' => $name,
                    'visi' => htmlspecialchars($request->input('visi')),
                    'misi' =>  htmlspecialchars($request->input('misi')),
                    'tujuan' =>  htmlspecialchars($request->input('tujuan')),
                ]);

                return response()->json(['success' => 'Prodi berhasil disimpan !']);
            } else {
                DB::connection('mysql')->table('prodi')->insert([
                    'nama_prodi' =>  $request->input('nama_prodi'),
                    'degree' =>  $request->input('degree'),
                    'gambar' => null,
                    'visi' => htmlspecialchars($request->input('visi')),
                    'misi' =>  htmlspecialchars($request->input('misi')),
                    'tujuan' =>  htmlspecialchars($request->input('tujuan')),
                ]);
                return response()->json(['success' => 'Prodi berhasil disimpan !']);
            }
        }
    }
    public function update_page($id)
    {
        $idprodi = $id;
        $data = collect(DB::connection('mysql')->select('SELECT * FROM prodi WHERE id_prodi =' . $idprodi . ''));

        $data = $data[0];
        return view('prodi.update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'nama_prodi' => 'required',
            'degree' => 'required',
        ]);


        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()->all()]);
        } else {
            $data = collect(DB::connection('mysql')->select('SELECT gambar FROM prodi WHERE id_prodi =' . $id));
            $data = $data[0]->gambar;
            $path = public_path('uploadfile_prodi/' . $data);
            if ($request->hasfile('gambar')) {

                if (File::exists($path)) {
                    File::delete($path);
                }
                $file   =   $request->file('gambar');
                $name = date("YmdHis") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploadfile_prodi'), $name);
                DB::connection('mysql')->table('prodi')
                    ->where('id_prodi', $id)
                    ->update([
                        'nama_prodi' =>  $request->input('nama_prodi'),
                        'degree' =>  $request->input('degree'),
                        'gambar' => $name,
                        'visi' => htmlspecialchars($request->input('visi')),
                        'misi' =>  htmlspecialchars($request->input('misi')),
                        'tujuan' =>  htmlspecialchars($request->input('tujuan')),
                    ]);
            } else {
                DB::connection('mysql')->table('prodi')
                    ->where('id_prodi', $id)
                    ->update([
                        'nama_prodi' =>  $request->input('nama_prodi'),
                        'degree' =>  $request->input('degree'),
                        'visi' => htmlspecialchars($request->input('visi')),
                        'misi' =>  htmlspecialchars($request->input('misi')),
                        'tujuan' =>  htmlspecialchars($request->input('tujuan')),
                    ]);
            }

            return response()->json(['success' => 'Prodi berhasil diubah !']);
        }
    }
    public function delete($id)
    {
        $data = collect(DB::connection('mysql')->select('SELECT gambar FROM prodi WHERE id_prodi =' . $id));
        $data = $data[0]->gambar;
        $path = public_path('uploadfile_prodi/' . $data);
        if (File::exists($path)) {
            File::delete($path);
        }

        DB::connection('mysql')->table('prodi')->where('id_prodi', $id)->delete();
        // return response()->json(['success' => 'Prodi berhasil dihapus !'])->header('Location', 'http://localhost:8000/admin/prodi');
        return redirect('/admin/prodi')->with('success', 'Prodi Berhasil Dihapus');
    }
}