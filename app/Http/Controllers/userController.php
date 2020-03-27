<?php

namespace App\Http\Controllers;

use App\Mail\verifyuser;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Mail;
use Illuminate\Support\Facades\DB;
use Session;


class userController extends Controller
{
    public function userregister(){
        return view('user/registeruser');
    }

    public function registersubmit(Request $request){

        $validator = Validator::make(request()->all(),[
           'name' => 'required|min:6|max:30|unique:users,name',
           'email' => 'required|email|unique:users,email',
           'status' => 'required|min:3|max:20',
           'password' => 'min:8|required_with:password_confirmation',
           'file' => 'required|max:700',
           'password_confirmation' => 'required|min:8|same:password'
        ],
            [
                'name.required'=>'Username tidak boleh kososng',
                'name.max'=>'Username maksimal 30 karakter',
                'name.min'=>'Username minimal 6 karakter',
                'name.unique'=>'Username sudah digunakan',
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
                'password_confirmation.min'=>'Ulangi password minimal 8 karakter',
                'password_confirmation.same'=>'Password berbeda'
            ]);

        if ($validator->fails()){
            return redirect('/register')->withErrors($validator->errors());

        } else {

            $file = $request->file('file');
            $tujuan = 'fotouser\\';
            $disimpan = $tujuan . $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());

            $new = new User;
            $new->name = $request->name;
            $new->email = $request->email;
            $new->password = Hash::make($request->password);
            $new->status = $request->status;
            $new->profile_image = $disimpan;
            Session::put('user',$new->name);
            Session::put('email',$new->email);
            $email = $new->email;
            $name = $new->name;
            $data = array("email" => $email, "name" => $name);
            $new->save();

            Mail::to($request->email)->send(new verifyuser($data));

            return redirect('verify');
        }
    }

    public function userlogin(){
        return view('user/loginuser');
    }

    public function loginsubmit(Request $request){

        $validator = Validator::make(request()->all(),[
            'name' => 'required|min:6|max:30',
            'password' => 'required|min:8'
        ],
            [
                'name.required'=>'Username tidak boleh kososng',
                'name.max'=>'Username maksimal 30 karakter',
                'name.min'=>'Username minimal 6 karakter',
                'name.unique'=>'Username sudah digunakan',
                'email.required'=>'Email tidak boleh kosong',
                'email.email'=>'Format email salah',
                'email.unique'=>'Email sudah digunakan',
                'status.required'=>'Status tidak boleh kosong',
                'status.min'=>'Status minimal 3 karakter',
                'status.max'=>'Status maksimal 20 karakter',
                'password.required'=>'Password tidak boleh kosong',
                'password.same'=>'Password berbeda',
                'password.min'=>'Password minimal 8 karakter',
                'file.required'=>'File tidak boleh kosong',
                'file.max'=>'File maksimal 700 KB',
                'password_confirmation.required'=>'Ulangi password tidak boleh kosong',
                'password_confirmation.min'=>'Ulangi password minimal 8 karakter'
            ]);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator->errors());
        } else {

            $data = $request->only('name', 'password');
            if (Auth::guard('user')->attempt($data)) {
                return redirect('dashboard');

            } else {
                return "username atau password salah";
            }
        }
    }

    public function dashboard(){
        return view('user/dashboard');
    }

    public function logout(){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('login');
    }

    public function verifyemailuser($email){
        $veri = DB::statement('UPDATE users SET users.`email_verified_at`=NOW()
        WHERE users.email = ?',array($email));

        return redirect('verifysuccess');
    }

    public function sendagain(){
        $email = Session::get('email');
        $name = Session::get('user');
        $data = array("email" => $email, "name"=>$name);

        Mail::to($email)->send(new verifyuser($data));
        return redirect()->back();
    }

    public function verifyemailsuccess(){
        return view('user/verifysuccess');

    }

}
