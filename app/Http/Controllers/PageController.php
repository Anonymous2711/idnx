<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function get($filter = NULL) {
        if ($filter == NULL) {
            return new Page;
        }
        return Page::where($filter);
    }
    public function create() {
        $saveData = Page::create([
            'is_published' => 0,
            'read_counter' => 0
        ]);

        return redirect()->route('admin.pages.edit', $saveData->id);
    }
    public function edit($id) {
        $myData = AdminController::me();
        $page = Page::where('id', $id)->first();

        return view('admin.page.edit', [
            'myData' => $myData,
            'page' => $page,
        ]);
    }
    public function update($id, Request $request) {
        $data = Page::where('id', $id);
        $page = $data->first();
        $updateData = $data->update([
            'title' => $request->title,
            'body' => $request->body,
            'is_published' => $request->is_published,
        ]);

        return redirect()->route('admin.pages')->with(['message' => "Halaman berhasil diubah"]);
    }
}
