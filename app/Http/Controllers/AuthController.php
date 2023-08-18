<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if(!$user) {
            Log::channel('auth_history')->info($this->getDataLog($request, $request->all())); 
        }
        $user->save();
 
        return back()->with('success', 'Đăng ký thành công');
    }
 
    public function login()
    {
        return view('auth.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/book')->with('success', 'Đăng nhập thành công');
        }
        Log::channel('auth_history')->info($this->getDataLog($request, $request->all())); 
        return back()->with('error', 'Sai địa chỉ email hoặc mật khẩu');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}