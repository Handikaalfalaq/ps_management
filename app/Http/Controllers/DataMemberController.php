<?php

namespace App\Http\Controllers;

class DataMemberController extends Controller
{
    public function dataMember()
    {
        return view('dataMember', [
            'title' => "Data Member Page"
        ]);
    }
}
