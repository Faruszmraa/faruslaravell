<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phonkcontroller extends Controller
{
    public function beritaKSI()
    {
        return view('phonk.beritaKSI');
    }
    public function profileKelulusanKSI()
    {
        return view('phonk.profileKelulusanKSI');
    }
    public function profileDosen()
    {
        return view('phonk.profileDosen');
    }
    public function home()
    {
        return view('phonk.home ');
    }
    public function inputBeritaKSI()
    {
        return view('form.inputBeritaKSI ');
    }
    public function inputDataDosen()
    {
        return view('form.inputDataDosen ');
    }
}
