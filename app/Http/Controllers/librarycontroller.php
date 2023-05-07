<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\book;
use App\Models\theuser;
use App\Models\admin;

use Illuminate\Support\Facades\Route;

class librarycontroller extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        return view('admin');
        //return book::all();
    }
    public function adminlogin(Request $req)
    {
  
    $email = $req->input('email');
    $password = $req->input('password');

    $admin = admin::where('email', $email)->first();

    if ($admin && $admin->password == $password) {
        // Login successful, store admin ID in session
        session(['admin_id' => $admin->id]);

        return redirect('listadmin');
        }

        else {
            echo "error";
        }
}
public function listadmin()
    {
        //return view('user');
       // $data= book::all();
        //return view('listadmin');
        $data= book::all();
        return view('listadmin',["data"=>$data]);
    }

        
        // $admin = admin::where('email','=',$req->email)->first();
        // if($admin){
        //     if(Hash::check($req->password,$admin->password)){
                
        //         $req->session()->put('loginId',$admin->id);
        //         return redirect('admin');
        //     }
        //     else{
        //         echo 'pass no';
        //     }

        // }
        // else
        // {
        //     echo 'email no';
        // }
    
    
    public function user()
    {
        //return view('user');
        $data= book::all();
        return view('list',["data"=>$data]);
    }
    public function list()
    {
        $data= book::all();
        return view('list',["data"=>$data]);

    }
    public function add()
    {
        return view('add');
    }
    public function addbook(Request $req)
    {
        $resto = new book;
        $resto->name=$req->input('name');
        $resto->price=$req->input('price');
        $resto->description=$req->input('description');
        $resto->quantity=$req->input('quantity');
        $resto->save();

    }
    public function register()
    {
         return view('register');
        // $resto = new theuser;
        // $resto->name=$req->input('name');
        // $resto->email=$req->input('email');
        // $resto->password=$req->input('password');
        // $resto->phone=$req->input('phone');
        // $resto->save();
        //return $requ->input();
        //echo 'doonee';
    }
    public function registeruser(Request $req)
    {
         //return view('register');
        $resto = new theuser;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        //$resto->password=$req->input('password');
        $resto->password= Hash::make($req->input('password'));

        $resto->phone=$req->input('phone');
        $resto->save();
        //return $requ->input();
        //echo 'doonee';
    }
    public function loginuser()
    {
        return view('loginuser');
    }
    public function login(Request $req)
    {
        //return view('loginuser');
        // $req->validate([
        //     'email' => 'required|email|unique:users',
        //     'password'=>''
        // ])
        $user = theuser::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                $req->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }
            else{
                echo 'pass no';
            }

        }
        else
        {
            echo 'email no';
        }
    }
    public function dashboard()
    {
        return 'hi uouo , pay here';
    }
}
