<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        // 入力内容のチェック
        $user_id = $request->input('user_id');
        $password = $request->input('password');

        // ログイン成功
        if ($user_id == 'hogehoge' && $password == 'fugafuga') {

            $request->session()->put('admin_auth', true);
            return redirect('admin');
        };

        // ログイン失敗
        return redirect('admin/login')->withErrors([
            'login' => 'ユーザIDまたはパスワードが違います'
        ]);
    }
}
