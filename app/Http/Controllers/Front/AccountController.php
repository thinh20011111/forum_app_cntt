<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;


        if (Auth::attempt($credentials, $remember)) {
            // return redirect(''); //Trang chủ
            return redirect()->intended('');
        } else {
            return back()->with('notification', 'Sai thông tin đăng nhập');
        }
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }

    public function register()
    {
        return view('front.account.register');
    }

    public function postRegister(Request $request)
    {
        $emails = DB::table('users')->pluck('email');
        foreach ($emails as $email) {
            if (strcasecmp($email, $request->get('email')) == 0) {
                return back()->with('notification', 'ERROR: Tài khoản đã tồn tại!');
            }
        }

        if ($request->password != $request->password_confirmation) {
            return back()->with('notification', 'Lỗi: Mật khẩu không khớp!');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2, //đăng ký tài khoản cấp khác hàng bình thường
            'avatar' => 'default_user.png'
        ];

        $this->userService->create($data);

        return redirect('account/login')->with('notification', 'Đăng ký thành công!');
    }
}
