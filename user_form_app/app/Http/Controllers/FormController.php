<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'mails' => 'accepted'
        ]);

        $basedir = storage_path('ourform');
        $filename = storage_path('ourform/' . uniqid() . '.json');

        if (!file_exists($basedir)) {
            mkdir($basedir, 0777, true);
        }

        file_put_contents($filename, json_encode($data, 448));

        return redirect('/')->with('success', 'Данные успешно сохранены!');
    }
}
