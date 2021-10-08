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
    public function page($slug) {
        $data = PageController::get([['slug', $slug]]);
        $data->increment('read_counter');
        $page = $data->first();
        $pages = PageController::get([['is_published', 1]])->get();

        return view('page', [
            'page' => $page,
            'pages' => $pages
        ]);
    }
    public function faq() {
        $pages = PageController::get([['is_published', 1]])->get();
        $faqs = FaqController::get()->get();

        return view('faq', [
            'faqs' => $faqs,
            'pages' => $pages,
        ]);
    }
}
