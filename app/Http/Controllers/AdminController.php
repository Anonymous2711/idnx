<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function me() {
        $myData = Auth::guard('admin')->user();
        if ($myData != "") {
            $name = explode(" ", $myData->name);
            $myData->first_name = $name[0];
            if (array_key_exists(1, $name)) {
                $myData->initial = $myData->first_name[0].$name[1][0];
            } else {
                $myData->initial = $myData->first_name[0];
            }
        }

        $myData->pages = PageController::get()->get();

        return $myData;
    }
    public function loginPage() {
        $message = Session::get('message');
        return view('admin.login', [
            'message' => $message
        ]);
    }
    public function login(Request $request) {
        $loggingIn = Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('admin.dashboard');
    }
    public function logout() {
        $loggingOut = Auth::guard('admin')->logout();
        return redirect()->route('admin.loginPage')->with([
            'message' => "Logout berhasil"
        ]);
    }
    public function dashboard() {
        $myData = self::me();
        
        return view('admin.dashboard', [
            'myData' => $myData
        ]);
    }
    public function pages() {
        $myData = self::me();
        $pages = PageController::get()->get();
        
        return view('admin.pages', [
            'myData' => $myData,
            'pages' => $pages,
        ]);
    }
}
