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

        if (!$loggingIn) {
            return redirect()->route('admin.loginPage')->withErrors(['Kombinasi email dan password tidak tepat']);
        }

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
        return redirect()->route('admin.pages');
        
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
    public function admin() {
        $myData = self::me();
        $message = Session::get('message');
        $admins = Admin::all();
        
        return view('admin.admin', [
            'myData' => $myData,
            'message' => $message,
            'admins' => $admins,
        ]);
    }
    public function store(Request $request) {
        $saveData = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.admin')->with(['message' => "Admin baru berhasil ditambahkan"]);
    }
    public function update(Request $request) {
        $id = $request->id;
        $toUpdate = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if ($request->password != "") {
            $toUpdate['password'] = bcrypt($request->password);
        }
        
        $data = Admin::where('id', $id);
        $admin = $data->first();
        $updateData = $data->update($toUpdate);
        
        return redirect()->route('admin.admin')->with(['message' => "Data admin ".$admin->name." berhasil diubah"]);
    }
    public function delete($id) {
        $data = Admin::where('id', $id);
        $admin = $data->first();
        $deleteData = $data->delete();

        return redirect()->route('admin.admin')->with(['message' => "Data admin ".$admin->name." berhasil dihapus"]);
    }
    public function faq() {
        $myData = self::me();
        $message = Session::get('message');
        $faqs = FaqController::get()->get();
        
        return view('admin.faq', [
            'myData' => $myData,
            'message' => $message,
            'faqs' => $faqs,
        ]);
    }
}
