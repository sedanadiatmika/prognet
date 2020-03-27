<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function registeradmin(){
        return view('admin/tampilanregister');
    }

    public function registersubmit(Request $request){

        $validator = Validator::make(request()->all(),[
            'name' => 'required|min:6|max:30|unique:admins,name',
            'phone' => 'required|max:12|unique:admins,phone',
            'username' => 'required|min:6|max:30|unique:admins,username',
            'password' => 'min:8|required_with:password_confirmation',
            'file' => 'required|max:700',
            'password_confirmation' => 'required|min:8|
            same:password'
        ],
            [
                'name.required'=>'Nama tidak boleh kososng',
                'name.max'=>'Nama maksimal 30 karakter',
                'name.min'=>'Nama minimal 6 karakter',
                'name.unique'=>'Nama sudah digunakan',
                'phone.required'=>'Nomor telepon tidak boleh kosong',
                'phone.numeric'=>'Nomor telepon dalam bentuk angka',
                'phone.min'=>'Nomor telepon minimal 12 karakter',
                'phone.max'=>'Nomor telepon maksimal 12 karakter',
                'phone.unique'=>'Nomor telepon sudah digunakan',
                'username.required'=>'Username tidak boleh kososng',
                'username.max'=>'Username maksimal 30 karakter',
                'username.min'=>'Username minimal 6 karakter',
                'username.unique'=>'Username sudah digunakan',
                'email.required'=>'Email tidak boleh kosong',
                'email.email'=>'Format email salah',
                'email.unique'=>'Email sudah digunakan',
                'status.required'=>'Status tidak boleh kosong',
                'status.min'=>'Status minimal 3 karakter',
                'status.max'=>'Status maksimal 20 karakter',
                'password.required_with'=>'Password tidak boleh kosong',
                'password.min'=>'Password minimal 8 karakter',
                'file.required'=>'File tidak boleh kosong',
                'file.max'=>'File maksimal 700 KB',
                'password_confirmation.required'=>'Ulangi password tidak boleh kosong',
                'password_confirmation.min'=>'Ulangi password minimal 8 karakter',
                'password_confirmation.same'=>'Ulangi password tidak sama'
            ]);

        if ($validator->fails()) {
            return redirect('admin/register')->withErrors($validator->errors());
        } else {

            $file = $request->file('file');
            $tujuan = 'fotoadmin\\';
            $disimpan = $tujuan . $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());


            $new = new admin;
            $new->name = $request->name;
            $new->phone = $request->phone;
            $new->password = Hash::make($request->password);
            $new->username = $request->username;
            $new->profile_image = $disimpan;
            $new->save();

            return redirect('admin/registration_success');
        }
    }

    public function loginadmin(){

            return view('admin/tampilanlogin');

    }

    public function loginsubmit(Request $request){

        $validator = Validator::make(request()->all(),[
            'username' => 'required|min:6|max:30|',
            'password' => 'min:8'
        ],
            [
                'name.required'=>'Nama tidak boleh kososng',
                'name.max'=>'Nama maksimal 30 karakter',
                'name.min'=>'Nama minimal 6 karakter',
                'name.unique'=>'Nama sudah digunakan',
                'phone.required'=>'Nomor telepon tidak boleh kosong',
                'phone.numeric'=>'Nomor telepon dalam bentuk angka',
                'phone.min'=>'Nomor telepon minimal 12 karakter',
                'phone.max'=>'Nomor telepon maksimal 13 karakter',
                'phone.unique'=>'Nomor telepon sudah digunakan',
                'username.required'=>'Username tidak boleh kososng',
                'username.max'=>'Username maksimal 30 karakter',
                'username.min'=>'Username minimal 6 karakter',
                'username.unique'=>'Username sudah digunakan',
                'email.required'=>'Email tidak boleh kosong',
                'email.email'=>'Format email salah',
                'email.unique'=>'Email sudah digunakan',
                'status.required'=>'Status tidak boleh kosong',
                'status.min'=>'Status minimal 3 karakter',
                'status.max'=>'Status maksimal 20 karakter',
                'password.required_with'=>'Password tidak boleh kosong',
                'password.same'=>'Password berbeda',
                'password.min'=>'Password minimal 8 karakter',
                'file.required'=>'File tidak boleh kosong',
                'file.max'=>'File maksimal 700 KB',
                'password_confirmation.required'=>'Ulangi password tidak boleh kosong',
                'password_confirmation.min'=>'Ulangi password minimal 8 karakter'
            ]);

        if ($validator->fails()) {
            return redirect('admin/login')->withErrors($validator->errors());
        } else {

            $data = $request->only('username', 'password');
            if (Auth::guard('admin')->attempt($data)) {
                return redirect('admin/dashboard');
            } else {
                return "username atau password salah";
            }
        }
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function logoutadmin(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }

        return redirect('/admin/login');
    }

    public function adminreg(){
        return view('admin/registersukses');
    }
}
