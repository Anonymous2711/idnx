<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client as Twilio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $pages = PageController::get()->get();
        return view('index', [
            'pages' => $pages
        ]);
    }
    public function page($id) {
        $data = PageController::get([['id', $id]]);
        $data->increment('read_counter');
        $page = $data->first();
        $pages = PageController::get([['is_published', 1]])->get();

        return view('page', [
            'page' => $page,
            'pages' => $pages
        ]);
    }
}
