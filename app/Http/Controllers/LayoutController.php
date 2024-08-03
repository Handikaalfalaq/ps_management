<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function showHome()
    {
        $status = $this->statusNavbar();
        return view('home', [
            'statusNavbar' => $status,
            'title' => "Home Page"
        ]);
    }

    private function statusNavbar()
    {
        return ['isOpen' => false];
    }
}
