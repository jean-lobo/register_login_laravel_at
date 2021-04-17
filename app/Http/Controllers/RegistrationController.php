<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class RegistrationController extends Controller
{
    //
function index(){
    return "all is well";
}

function register(Request $req){
    $user = new User($req->all());
$data = $req->all();
$validator = Validator::make($data, [
    'name' => 'required|alpha|min:2|max:30',
    'email' => 'required|email|unique:users,email,'.$user->id,
    //'required|email|max:255',
    'password'=>'required|max:8'
]);
if($validator->fails()){
    return response(['error' => $validator->errors(), 'Validation Error']);
        }

$user->name=$req->input('name');
$user->email=$req->input('email');
$user->password=Crypt::encrypt($req->input('password'));
$user->save();
$req->session()->put('user', $req->input('name'));
return redirect('register');
}

function login(Request $req){
    $user=User::where('email',$req->input('email'))->get();
    if(Crypt::decrypt($user[0]->password)==$req->input('password')){
        $req->session()->put('user',$user[0]->name);
        return redirect('home');

    }}

    function a(){
      $a=Crypt::decrypt('') ; 
    return  $a;
    }



}





