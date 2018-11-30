<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 30/11/2018
 * Time: 17:35
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        // Xóa Session login, đưa người dùng về trạng thái chưa đăng nhập
        $request->session()->flush();
        return view('welcome');
    }
}