<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $items = [];

        $files = glob(storage_path('ourform/*.json'));

        foreach ($files as $file) {
            $items[] = json_decode(file_get_contents($file));
        }

        return view('admin', compact('items'));
    }
}
