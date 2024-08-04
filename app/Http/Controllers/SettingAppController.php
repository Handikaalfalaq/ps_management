<?php

namespace App\Http\Controllers;

class SettingAppController extends Controller
{
    public function settingApp()
    {
        return view('settingApp', [
            'title' => "Setting App Page"
        ]);
    }
}
